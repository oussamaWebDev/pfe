<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf65d4ab68c756697dd47c288a9987b3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf65d4ab68c756697dd47c288a9987b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf65d4ab68c756697dd47c288a9987b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf65d4ab68c756697dd47c288a9987b3::$classMap;

        }, null, ClassLoader::class);
    }
}