<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit439f99ff26318fe8d917b2275e40de0f
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit439f99ff26318fe8d917b2275e40de0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit439f99ff26318fe8d917b2275e40de0f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit439f99ff26318fe8d917b2275e40de0f::$classMap;

        }, null, ClassLoader::class);
    }
}
