<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit125ca65f72d883ff002b018e517b6288
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RC\\' => 3,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit125ca65f72d883ff002b018e517b6288::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit125ca65f72d883ff002b018e517b6288::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}