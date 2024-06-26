<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitac7897c5f5fed1f9ddb91cfa64fbf82c
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitac7897c5f5fed1f9ddb91cfa64fbf82c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitac7897c5f5fed1f9ddb91cfa64fbf82c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitac7897c5f5fed1f9ddb91cfa64fbf82c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
