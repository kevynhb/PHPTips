<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita440489b40bb4509490820a86c40a213
{
    public static $files = array (
        '453b0397d81cb30e222ecbef5e4f3084' => __DIR__ . '/../..' . '/source/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'D' => 
        array (
            'Dead\\Ep01\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Dead\\Ep01\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita440489b40bb4509490820a86c40a213::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita440489b40bb4509490820a86c40a213::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita440489b40bb4509490820a86c40a213::$classMap;

        }, null, ClassLoader::class);
    }
}
