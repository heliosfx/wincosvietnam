<?php

$dirs = scandir(THEME_MODULE_DIR);
$loaders = [];
if ($dirs) {
    foreach ($dirs as $module) {
        if (is_dir(THEME_MODULE_DIR . "/$module") && $module !== '.' && $module !== '..') {
            if (file_exists(THEME_MODULE_DIR . "/$module/module.json")) {
                $json = json_decode(file_get_contents(THEME_MODULE_DIR . "/$module/module.json"), true);
                $loaders[] =  [
                    'name' => $module,
                    'piority' => $json['piority'],
                    'includes' => $json['includes']
                ];
            }
        }
    }
}
if ($loaders) {
    usort($loaders, function ($a, $b) {
        return $a['piority'] > $b['piority'] ? 1 : -1;
    });
    foreach ($loaders as $load) {
        if ($inlcudes = $load['includes']) {
            foreach ($inlcudes as $file) {
                require_once THEME_MODULE_DIR . "/{$load['name']}/$file.php";
            }
        }
    }
}
