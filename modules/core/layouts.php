<?php
class Template_Core_Layouts extends Hookable
{
    use Dolazo_Instance_Trait;

    function __construct()
    {
        add_filter('use_base_app_script', '__return_false', 99); // remove base app scripts
        add_filter('use_base_app_css', '__return_false', 99); // remove base app css
        $this->add_action('wp_head', 'custom_css', 99);
        $this->add_action('dolazo_header', 'header');
        //$this->add_action('dolazo_after_header', 'breadcrumb');
        $this->add_action('dolazo_footer', 'footer');
        $this->add_action('dolazo_app_scripts', 'footer_scripts');
        $this->add_action('wp_enqueue_scripts', 'style', 999);
        $this->add_action('wp_enqueue_scripts', 'script', 999);
        $this->add_filter('custom_web_fonts', 'custom_fonts', 99);
        $this->add_filter('nav_menu_css_class', 'menu_class', 10, 4);
        $this->add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
        $this->add_filter('nav_menu_submenu_css_class', 'submenu_class', 10, 3);
        $this->add_filter('dolazo_theme_registered_nav_menus', 'register_nav_menu', 10, 1);
        //$this->add_filter('dolazo_theme_registered_sidebars', 'register_sidebars', 10, 1);
        $this->add_filter('rank_math/frontend/breadcrumb/html', 'breadcrumb_items_html', 10, 3);
    }

    function style()
    {
        $deps = [
            'icon_customize' => [
                'src' => THEME_ASSET_URL . 'icons/customize.min.css',
                'dep' => []
            ],
            'icon_default' => [
                'src' => THEME_ASSET_URL . 'icons/default.min.css',
                'dep' => []
            ],
            'default' => [
                'src' => THEME_ASSET_URL . 'release/default.min.css',
                'dep' => []
            ]
        ];
        foreach ($deps as $handle => $css) {
            wp_register_style($handle, $css['src'], $css['dep'], THEME_VERSION);
        }
        wp_register_style('main', THEME_ASSET_URL . 'release/main.min.css', array_keys($deps), THEME_VERSION);
        wp_enqueue_style('main');
    }

    function script()
    {
        wp_register_script('jquery', THEME_ASSET_URL . 'release/jquery.min.js', [], THEME_VERSION, TRUE);
        wp_enqueue_script('jquery');
    }


    function header()
    {
        theme_partial('header/header');
    }

    function breadcrumb()
    {
        theme_partial('global/breadcrumb');
    }

    function footer()
    {
        theme_partial('footer/footer');
    }
    function footer_scripts()
    {
        theme_partial('global/footer-scripts');
    }
    function custom_fonts($fonts)
    {
        $fonts['families'] = ['Inter'];
        $fonts['urls'] = [THEME_ASSET_URL . 'fonts/fonts.css'];
        return $fonts;
    }
    function clear_nav_menu_item_id($id, $item, $args)
    {
        return "";
    }
    function menu_class($classes, $item, $args)
    {
        if ($args->menu == "Footer 1" || $args->menu == "Footer 2") {
            $classes = [];
        }
        return $classes;
    }
    function submenu_class($classes, $args, $depth)
    {
        if ('primary' === $args->theme_location) {
            $classes = ['nav level2'];
        }
        if ('primary_mobile' === $args->theme_location) {
            $classes = ['nav submenu'];
        }
        return $classes;
    }

    function register_nav_menu($nav_menus)
    {
        $nav_menus['primary_mobile'] = esc_html__('Mobile Menu');
        //$nav_menus['footer_1'] = esc_html__('Footer 1');
        //$nav_menus['footer_2'] = esc_html__('Footer 2');
        return $nav_menus;
    }

    function breadcrumb_items_html($html, $crumbs, $class)
    {
        $items = [];
        $blog_item = [
            0 => "Blog",
            1 => trailingslashit(home_url("blog")),
        ];
        if (is_singular('post') || is_category() || is_tag() || is_search()) {
            $crumbs = array_merge(array_slice($crumbs, 0, 1), array($blog_item), array_slice($crumbs, 1));
        }
        $items[] = "<ol>";
        foreach ($crumbs as $item) {
            $items[] = sprintf("<li><a href='%s'><span>%s</span></a></li>", $item[1], $item[0]);
        }
        $items[] = "</ol>";
        return implode(" ", $items);
    }
    function custom_css()
    {
        echo "<style>
        body.admin-bar {position: relative}
        body.admin-bar .header-body.fixed {top: 32px}
        #loading {z-index: 9999}
        </style>\n";
    }
}

Template_Core_Layouts::instance();
