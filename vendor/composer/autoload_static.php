<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabaf4f14dd85d3f434ef236e037a028e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitabaf4f14dd85d3f434ef236e037a028e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabaf4f14dd85d3f434ef236e037a028e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitabaf4f14dd85d3f434ef236e037a028e::$classMap;

        }, null, ClassLoader::class);
    }
}
