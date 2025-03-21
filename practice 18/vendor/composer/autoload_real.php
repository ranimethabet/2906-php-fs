<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdd8f9dcc82081ab5f3bcea0293325817
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitdd8f9dcc82081ab5f3bcea0293325817', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdd8f9dcc82081ab5f3bcea0293325817', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdd8f9dcc82081ab5f3bcea0293325817::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
