<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc51f5d02ecc3ec5139d0a4f498f4e6dd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc51f5d02ecc3ec5139d0a4f498f4e6dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc51f5d02ecc3ec5139d0a4f498f4e6dd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
