<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite21bcd8e9f117c7b20dbeffc278a4e86
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite21bcd8e9f117c7b20dbeffc278a4e86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite21bcd8e9f117c7b20dbeffc278a4e86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite21bcd8e9f117c7b20dbeffc278a4e86::$classMap;

        }, null, ClassLoader::class);
    }
}