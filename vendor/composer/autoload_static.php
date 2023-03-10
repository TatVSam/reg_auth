<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4b3ad0812367d574c16e2544b5d6aae
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PhpConsole\\' => 11,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PhpConsole\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-console/php-console/src/PhpConsole',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4b3ad0812367d574c16e2544b5d6aae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4b3ad0812367d574c16e2544b5d6aae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc4b3ad0812367d574c16e2544b5d6aae::$classMap;

        }, null, ClassLoader::class);
    }
}
