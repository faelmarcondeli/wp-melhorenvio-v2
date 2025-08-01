<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86344c9ce8ce3fa0f49736e7e62fe6e5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MelhorEnvio\\Services\\' => 21,
            'MelhorEnvio\\Models\\' => 19,
            'MelhorEnvio\\Interfaces\\' => 23,
            'MelhorEnvio\\Helpers\\' => 20,
            'MelhorEnvio\\Factory\\' => 20,
            'MelhorEnvio\\Controllers\\' => 24,
            'MelhorEnvio\\Bases\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MelhorEnvio\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Services',
        ),
        'MelhorEnvio\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'MelhorEnvio\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/interfaces',
        ),
        'MelhorEnvio\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Helpers',
        ),
        'MelhorEnvio\\Factory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Factory',
        ),
        'MelhorEnvio\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'MelhorEnvio\\Bases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/bases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86344c9ce8ce3fa0f49736e7e62fe6e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86344c9ce8ce3fa0f49736e7e62fe6e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86344c9ce8ce3fa0f49736e7e62fe6e5::$classMap;

        }, null, ClassLoader::class);
    }
}
