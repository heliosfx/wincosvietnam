<?php
class Winco_Theme_Options extends Hookable
{
    use Dolazo_Instance_Trait;
    function __construct()
    {
        $this->add_filter('dolazo_general_options','remove_contact',999);
        $this->add_filter('dolazo_footer_options','footer',999);
    }
    function remove_contact($fields) {
        $fields = [];
        return $fields;
    }
    function footer($fields) {
        $menus = wp_get_nav_menus();
        $fields[] = [
            'type' => 'heading',
            'content' => 'Footer 1'
        ];
        $fields[] = [
            'id' => 'footer_1_heading',
            'type' => 'text',
            'title' => 'Tiêu đề'
        ];
        $fields[] = [
            'id' => 'footer_1_menu',
            'type' => 'select',
            'title' => 'Menu',
            'options' => $menus ? ["" => "--Chọn--"] + array_column($menus,'name','name') : []
        ];
        $fields[] = [
            'type' => 'heading',
            'content' => 'Footer 2'
        ];
        $fields[] = [
            'id' => 'footer_2_heading',
            'type' => 'text',
            'title' => 'Tiêu đề'
        ];
        $fields[] = [
            'id' => 'footer_2_menu',
            'type' => 'select',
            'title' => 'Menu',
            'options' => $menus ? ["" => "--Chọn--"] + array_column($menus,'name','name') : []
        ];
        $fields[] = [
            'type' => 'heading',
            'content' => 'Footer 3'
        ];
        $fields[] = [
            'id' => 'footer_3_menu',
            'type' => 'select',
            'title' => 'Menu',
            'options' => $menus ? ["" => "--Chọn--"] + array_column($menus,'name','name') : []
        ];
        return $fields;
    }
    
}
Winco_Theme_Options::instance();