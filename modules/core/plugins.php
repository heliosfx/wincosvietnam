<?php


add_filter('plugin_action_links', 'disable_plugin_deactivation', 10, 4);
function disable_plugin_deactivation($actions, $plugin_file, $plugin_data, $context)
{

    if (array_key_exists('deactivate', $actions) && in_array($plugin_file, array(
        'core-dolazo/core.php',
    )))
        unset($actions['deactivate']);
    return $actions;
}

add_action('delete_user', 'wincos_delete_user_check', 10, 3);
function wincos_delete_user_check($id, $reassign, $user)
{
    if($user->data->ID == 1 || $user->data->user_login == 'admin') {
        $home = admin_url();
        die("Không thể xóa người dùng này! <a href='$home'>Quay lại</a>");
    }
}
