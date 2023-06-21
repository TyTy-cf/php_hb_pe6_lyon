<?php

spl_autoload_register(function ($className) {
    echo $className . '<br>';

    $classPath = str_replace('\\', '/', $className);

    $file =  __DIR__ . '/' . $classPath . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

