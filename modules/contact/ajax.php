<?php
class Winco_Contact_Ajax extends Dolazo_Ajax
{
    function handle_contact_submit()
    {
        $data = $_POST;
        $name = sanitize_text_field($data['name']);
        $email = sanitize_text_field($data['email']);
        $phone = sanitize_text_field($data['phone']);
        $note = sanitize_text_field($data['body']);
        $res = [
            'code' => 200,
            'msg' => '',
            'status' => 'ok'
        ];
        if (empty($_POST) || !wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_nonce')) {
            $res['status'] = 'error';
            $res['msg'] = __('Không thể gửi!');
            echo json_encode($res);
            die;
        }
        if ($name) {
            $args = [
                'post_title' => $name,
                'post_status' => 'publish',
                'post_type' => 'contact',
            ];
            $post_id = wp_insert_post($args);
            if ($post_id) {
                $res['msg'] = __('Thông tin đã được gửi đi!');
                if (!empty($phone)) {
                    add_post_meta($post_id, 'phone', $phone);
                }
                if (!empty($email)) {
                    add_post_meta($post_id, 'email', $email);
                }
                if (!empty($note)) {
                    add_post_meta($post_id, 'note', $note);
                }
            } else {
                $res['status'] = 'error';
            }
        }
        echo json_encode($res);
        die;
    }
}
new Winco_Contact_Ajax();
