<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63ed153e8443c0a5e881f468c12ab50c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dmiloj01\\PersonalFw\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dmiloj01\\PersonalFw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63ed153e8443c0a5e881f468c12ab50c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63ed153e8443c0a5e881f468c12ab50c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63ed153e8443c0a5e881f468c12ab50c::$classMap;

        }, null, ClassLoader::class);
    }
}
