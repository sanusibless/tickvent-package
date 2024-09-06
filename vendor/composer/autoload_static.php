<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2405d4cc66aed1f0dfc99958d5199938
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tickvent\\Streaming\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tickvent\\Streaming\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2405d4cc66aed1f0dfc99958d5199938::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2405d4cc66aed1f0dfc99958d5199938::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2405d4cc66aed1f0dfc99958d5199938::$classMap;

        }, null, ClassLoader::class);
    }
}
