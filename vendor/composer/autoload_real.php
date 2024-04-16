<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit94fbf96befc5acb9e7ecdadc03af52de
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

        spl_autoload_register(array('ComposerAutoloaderInit94fbf96befc5acb9e7ecdadc03af52de', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit94fbf96befc5acb9e7ecdadc03af52de', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit94fbf96befc5acb9e7ecdadc03af52de::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}