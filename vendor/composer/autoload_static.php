<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37bdb36b554c15d63ff4a8d9610bbe77
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lutwrld\\Tp5Poo\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lutwrld\\Tp5Poo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit37bdb36b554c15d63ff4a8d9610bbe77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37bdb36b554c15d63ff4a8d9610bbe77::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37bdb36b554c15d63ff4a8d9610bbe77::$classMap;

        }, null, ClassLoader::class);
    }
}