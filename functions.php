<?php

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

if (is_admin() && class_exists(YahnisElsts\PluginUpdateChecker\v5\PucFactory::class)) {
    $themeUpdater = PucFactory::buildUpdateChecker(
        'https://github.com/heliosfx/wincovietnam/',
        __FILE__,
        'wincosvietnam'
    );
    $themeUpdater->setBranch('master');
    //$themeUpdater->setAuthentication('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');
}
define('THEME_DEV_MODE', FALSE);
define('THEME_VERSION', THEME_DEV_MODE ? time() : '1.0.1');
define('THEME_DIR', trailingslashit(get_stylesheet_directory()));
define('THEME_URL', trailingslashit(get_stylesheet_directory_uri()));
define('THEME_ASSET_URL', trailingslashit(THEME_URL . 'assets/dist'));
define("THEME_MODULE_DIR", THEME_DIR . 'modules/');
define("THEME_MODULE_URL", trailingslashit(THEME_URL . 'modules'));
define('THEME_LANG_DIR', THEME_DIR . 'languages/');
define('THEME_TEXT_DOMAIN', 'wincosvietnam');

define('TEMPLATE_CREDIT_TEXT', 'Gozone');
define('TEMPLATE_CREDIT_URL', '#');

function wincos_after_setup_theme()
{
    add_image_size('wincos-blog-thumb', 437, 241, true);
    load_theme_textdomain('wincosvietnam', THEME_LANG_DIR);
}
add_action('after_setup_theme', 'wincos_after_setup_theme', 10);
/**
 * Load modules
 */
if (class_exists('Dolazo_Core'))
    require THEME_MODULE_DIR . 'load.php';
