<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07962ecb0e9c08307c12f958dae829c8
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZxcvbnPhp\\' => 10,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
            'PHPAuth\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZxcvbnPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/bjeavons/zxcvbn-php/src',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'PHPAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpauth/phpauth',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07962ecb0e9c08307c12f958dae829c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07962ecb0e9c08307c12f958dae829c8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}