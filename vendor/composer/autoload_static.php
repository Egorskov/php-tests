<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64e1bdf8803d262282f54d806c99c44f
{
    public static $files = array (
        '09ec71022e52f74809cbb92ddd8a024a' => __DIR__ . '/../..' . '/src/StringUtils.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64e1bdf8803d262282f54d806c99c44f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64e1bdf8803d262282f54d806c99c44f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64e1bdf8803d262282f54d806c99c44f::$classMap;

        }, null, ClassLoader::class);
    }
}
