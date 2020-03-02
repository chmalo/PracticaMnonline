<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ee8123b14172c19b7c18c957bf670d8
{
    public static $files = array (
        '4c2bbe23083b4759aeebe81c7e6d6aaf' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Chmalo\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Chmalo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ee8123b14172c19b7c18c957bf670d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ee8123b14172c19b7c18c957bf670d8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
