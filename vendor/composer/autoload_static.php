<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7a68f48ad6ce00881c5bc61c01982be
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7a68f48ad6ce00881c5bc61c01982be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7a68f48ad6ce00881c5bc61c01982be::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitc7a68f48ad6ce00881c5bc61c01982be::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc7a68f48ad6ce00881c5bc61c01982be::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
