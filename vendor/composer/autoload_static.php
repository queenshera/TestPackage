<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaa6e9be841a3071276abcb6e9f8db33
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ashish\\MyPackage\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ashish\\MyPackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaa6e9be841a3071276abcb6e9f8db33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaa6e9be841a3071276abcb6e9f8db33::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcaa6e9be841a3071276abcb6e9f8db33::$classMap;

        }, null, ClassLoader::class);
    }
}