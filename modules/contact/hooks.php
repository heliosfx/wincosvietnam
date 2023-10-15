<?php
class Wincos_Contact_Post_Type extends Base_Post_Type
{
}

class Wincos_Contact_Hooks extends Hookable
{
    use Dolazo_Instance_Trait;
    function __construct()
    {
        $this->add_action('after_setup_theme', 'init_winco_contact_post_type', 1);
        $this->add_action('after_setup_theme', 'winco_contact_metabox', 999);
        $this->add_action('wp_dashboard_setup', 'create_contact_widget');
        $this->add_filter('manage_contact_posts_columns', 'set_contact_columns');
        $this->add_action('manage_contact_posts_custom_column', 'custom_contact_columns', 10, 2);
    }
    function init_winco_contact_post_type()
    {
        $args =  array(
            'public' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'query_var' => false,
            'has_archive' => false,
            'menu_icon' => 'dashicons-email',
            'hierarchical' => false,
            'menu_position' => 5,
            'taxonomies' => array(),
            'supports' => array(
                'title',
            ),
            'show_in_rest' => false,
        );
        new Wincos_Contact_Post_Type('contact', 'Liên hệ', false, $args);
    }

    function winco_contact_metabox()
    {
        if (class_exists('CSF')) {
            $prefix = 'winco_contact_post_type';
            CSF::createMetabox($prefix, array(
                'title'     => 'Thông tin bổ sung',
                'post_type' => 'contact',
                'data_type' => 'unserialize'
            ));
            CSF::createSection($prefix, array(
                'fields' => array(
                    array(
                        'id'    => 'phone',
                        'type'  => 'text',
                        'title' => 'Điện thoại',
                    ),
                    array(
                        'id'    => 'email',
                        'type'  => 'text',
                        'title' => 'Email',
                    ),
                    array(
                        'id'    => 'note',
                        'type'  => 'textarea',
                        'title' => 'Lời nhắn',
                    ),

                )
            ));
        }
    }

    public function create_contact_widget()
    {
        wp_add_dashboard_widget('winco_contact', 'Liên hệ mới', [$this, 'winco_contact_callback']);
    }

    public function winco_contact_callback()
    {
        $args = [
            'post_type' => 'contact',
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date',
            'posts_per_page' => 5
        ];
        $contacts = get_posts($args);
        if ($contacts) {
            echo "<style>
            table {width: 100%;border-collapse: collapse;}
            table, th, td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: center;
              }</style>";
            echo "<table class='contact_table'>";
            echo "<thead><tr>
                <th>Thời gian</th> <th>Tên</th> <th>Email</th> <th>Số điện thoại</th>
            </tr></thead>";
            foreach ($contacts as $item) {
                echo sprintf(
                    "<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                    get_the_date('d/m/Y', $item->ID),
                    $item->post_title,
                    get_post_meta($item->ID, 'email', true),
                    get_post_meta($item->ID, 'phone', true),
                );
            }
            echo "</table>";
            $link = admin_url('edit.php?post_type=contact');
            echo "<a href='$link' style='margin-top: 10px;display: inline-block'>Xem thêm</a>";
        }
    }

    function set_contact_columns($columns)
    {
        $_columns = [];
        $_columns['cb'] = __('Chọn');
        $_columns['date'] = __('Ngày tạo');
        $_columns['title'] = __('Tên');
        $_columns['phone'] = __('Điện thoại');
        $_columns['email'] = __('Email');
        $_columns['note'] = __('Nội dung');
        return $_columns;
    }
    function custom_contact_columns($column, $post_id)
    {
        switch ($column) {

            case 'phone':
                echo get_post_meta($post_id, 'phone', true);
                break;
            case 'email':
                echo get_post_meta($post_id, 'email', true);
                break;
            case 'note':
                echo get_post_meta($post_id, 'note', true);
                break;
        }
    }
}

Wincos_Contact_Hooks::instance();
