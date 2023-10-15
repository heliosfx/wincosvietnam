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
