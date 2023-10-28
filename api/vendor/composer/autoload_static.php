<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4841f57ea67e5d67909dbdb7dd733d69
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'model\\' => 6,
        ),
        'c' => 
        array (
            'controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
        'controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4841f57ea67e5d67909dbdb7dd733d69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4841f57ea67e5d67909dbdb7dd733d69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4841f57ea67e5d67909dbdb7dd733d69::$classMap;

        }, null, ClassLoader::class);
    }
}
