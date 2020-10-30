<?php

require __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($class) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, str_replace("zmtool\jsonrpc\\", "", $class));
    $file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
