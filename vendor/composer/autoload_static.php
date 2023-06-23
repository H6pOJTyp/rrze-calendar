<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit414aea536e171ba8a1bea52a2cad5779
{
    public static $files = array (
        'e4e11a001002b1c747a45db4ce1ccc3a' => __DIR__ . '/..' . '/cmb2/cmb2/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RRule\\' => 6,
            'RRZE\\WP\\' => 8,
            'RRZE\\Calendar\\' => 14,
        ),
        'J' => 
        array (
            'Jsvrcek\\ICS\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RRule\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/rlanvin/php-rrule/src',
        ),
        'RRZE\\WP\\' => 
        array (
            0 => __DIR__ . '/..' . '/rrze/wp/src',
        ),
        'RRZE\\Calendar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Jsvrcek\\ICS\\' => 
        array (
            0 => __DIR__ . '/..' . '/jsvrcek/ics/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'ICal' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
                1 => __DIR__ . '/..' . '/johngrogg/ics-parser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit414aea536e171ba8a1bea52a2cad5779::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit414aea536e171ba8a1bea52a2cad5779::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit414aea536e171ba8a1bea52a2cad5779::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit414aea536e171ba8a1bea52a2cad5779::$classMap;

        }, null, ClassLoader::class);
    }
}
