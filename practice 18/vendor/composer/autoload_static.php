<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd8f9dcc82081ab5f3bcea0293325817
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/models',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitdd8f9dcc82081ab5f3bcea0293325817::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitdd8f9dcc82081ab5f3bcea0293325817::$classMap;

        }, null, ClassLoader::class);
    }
}
