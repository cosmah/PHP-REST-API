<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1de4979215f3757f847b1cef5f086d46
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Janat\\PhpRestApi\\' => 17,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Janat\\PhpRestApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1de4979215f3757f847b1cef5f086d46::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1de4979215f3757f847b1cef5f086d46::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1de4979215f3757f847b1cef5f086d46::$classMap;

        }, null, ClassLoader::class);
    }
}
