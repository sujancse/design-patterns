<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d0d7cedf4a9292f520619fe0c3fb615
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPatterns\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d0d7cedf4a9292f520619fe0c3fb615::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d0d7cedf4a9292f520619fe0c3fb615::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
