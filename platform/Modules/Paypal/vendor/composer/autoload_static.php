<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78f706a58f939431bb23f066e9f1254c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78f706a58f939431bb23f066e9f1254c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78f706a58f939431bb23f066e9f1254c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit78f706a58f939431bb23f066e9f1254c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
