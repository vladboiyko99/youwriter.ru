<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a7e847a48c52e0a5887ac9249b28c08
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a7e847a48c52e0a5887ac9249b28c08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a7e847a48c52e0a5887ac9249b28c08::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}