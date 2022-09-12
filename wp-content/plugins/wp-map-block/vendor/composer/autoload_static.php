<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe3db2d676c181a3b9224208305ef034
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPMapBlock\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPMapBlock\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe3db2d676c181a3b9224208305ef034::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe3db2d676c181a3b9224208305ef034::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe3db2d676c181a3b9224208305ef034::$classMap;

        }, null, ClassLoader::class);
    }
}
