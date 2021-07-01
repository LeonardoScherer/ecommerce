<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9507d6c6c395b6d2fed9de9f122f941b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'H' => 
        array (
            'Hcode\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Hcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9507d6c6c395b6d2fed9de9f122f941b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9507d6c6c395b6d2fed9de9f122f941b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9507d6c6c395b6d2fed9de9f122f941b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9507d6c6c395b6d2fed9de9f122f941b::$classMap;

        }, null, ClassLoader::class);
    }
}
