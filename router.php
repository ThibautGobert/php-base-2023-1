<?php

/**
 * https://github.com/dannyvankooten/AltoRouter
 */
$router = new AltoRouter();
$menus = [];
$directories = getDirectories();
foreach ($directories as $directory) {
    $menus[$directory] = str_replace('.php', '', getDirContents('../content/'.$directory));
    $router->map('GET|POST', '/'.$directory.'/[*:slug]', $directory);
}
$router->map('GET', '/', 'index');

$match = $router->match();

if($match !== false) {
    if($match['target'] === 'index') {
        $title = getConfig('generic_title');
        ob_start();
        include 'views/index.php';
        $content = ob_get_clean();
    }
    if(in_array($match['target'], $directories)) {
        $files = getDirContents('../content/'.$match['target']);
        $file = getConfig('root_content').'/'.$match['target'].'/'.$match['params']['slug'].'.php';
        if(file_exists($file)){
            $title = ucfirst(str_replace('-', ' ', $match['params']['slug']));
            ob_start();
            include $file;
            $content = ob_get_clean();
        }
    }
}

