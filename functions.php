<?php

/**
 * @param string $key
 * @return string|null
 */
function getConfig(string $key):? string
{
    if(file_exists( __DIR__.'/config.php')) {
        $config = require __DIR__.'/config.php';
        if(is_array($config) && array_key_exists($key, $config)) {
            return $config[$key];
        }
        return null;
    }
    echo '<b style="color: red">Fichier de configuration <em>config.php</em> 
        non trouvé ! (copier le fichier config.exemple.php et le renommer en config.php)</b>';die();
}

/**
 * @return array
 */
function getDirectories(): array
{
    $directories = array_filter(glob(getConfig('root_content') . '\*'), 'is_dir');
    $result = [];
    foreach ($directories as $directory) {
        $result[] = basename($directory, '/');
    }
    return $result;
}

/**
 * @param string $directory
 * @return array
 */
function getDirContents(string $directory): array
{
    $files = array_filter(glob($directory . '\*'), 'is_file');
    $result = [];
    foreach ($files as $file) {
        $result[] = basename($file, '/');
    }
    sort($result, SORT_NATURAL);
    return $result;
}

/**
 * @param string $string
 * @param string $left
 * @param string $right
 * @return string
 */
function wrapString(string $string, string $left = '&laquo;', string $right = '&raquo;'): string
{
    return $left . $string . $right;
}