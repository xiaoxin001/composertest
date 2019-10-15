<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6e4f55e38017e276b60d4f089858ab3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'O' => 
        array (
            'OYXX\\Tools\\' => 11,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'E' => 
        array (
            'Ejiayou\\PHP\\Utils\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'OYXX\\Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Ejiayou\\PHP\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/ejiayou/phputils/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6e4f55e38017e276b60d4f089858ab3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6e4f55e38017e276b60d4f089858ab3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}