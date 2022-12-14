<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb633b744b16ecd92805293cd5f5074af
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb633b744b16ecd92805293cd5f5074af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb633b744b16ecd92805293cd5f5074af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb633b744b16ecd92805293cd5f5074af::$classMap;

        }, null, ClassLoader::class);
    }
}
