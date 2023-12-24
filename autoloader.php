<?php

spl_autoload_register(function ($class) {
    $classPath = __DIR__ . '/';
    $class = str_replace('\\', '/', $class);
    $classFile = $classPath . $class . '.php';

    if (file_exists($classFile)) {
        require_once $classFile;
    }
});
