<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbdb575d92c5a37ccba7924b4e4e95b1
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbdb575d92c5a37ccba7924b4e4e95b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbdb575d92c5a37ccba7924b4e4e95b1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
