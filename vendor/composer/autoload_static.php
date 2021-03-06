<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4adc27b3ed1a0b97fbdf4004fc67cc1
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4adc27b3ed1a0b97fbdf4004fc67cc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4adc27b3ed1a0b97fbdf4004fc67cc1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc4adc27b3ed1a0b97fbdf4004fc67cc1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
