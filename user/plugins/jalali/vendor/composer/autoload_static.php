<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit104cd647255509e26e57c0a923bef87d
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\Jalali\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\Jalali\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\JalaliPlugin' => __DIR__ . '/../..' . '/jalali.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit104cd647255509e26e57c0a923bef87d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit104cd647255509e26e57c0a923bef87d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit104cd647255509e26e57c0a923bef87d::$classMap;

        }, null, ClassLoader::class);
    }
}
