<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf606bdd7a38be13e1539bf18f7cb5c74
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf606bdd7a38be13e1539bf18f7cb5c74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf606bdd7a38be13e1539bf18f7cb5c74::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}