<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52c895e474d9c4190ca1f7fcc5f8372f
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52c895e474d9c4190ca1f7fcc5f8372f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52c895e474d9c4190ca1f7fcc5f8372f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52c895e474d9c4190ca1f7fcc5f8372f::$classMap;

        }, null, ClassLoader::class);
    }
}
