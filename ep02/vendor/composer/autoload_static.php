<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita440489b40bb4509490820a86c40a213
{
    public static $files = array (
        '0d5a149e635fdafa8507832cd152cebc' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita440489b40bb4509490820a86c40a213::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita440489b40bb4509490820a86c40a213::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita440489b40bb4509490820a86c40a213::$classMap;

        }, null, ClassLoader::class);
    }
}
