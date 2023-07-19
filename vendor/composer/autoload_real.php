<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd163fcb150408f9a815df11b4f0d4714
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

        spl_autoload_register(array('ComposerAutoloaderInitd163fcb150408f9a815df11b4f0d4714', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd163fcb150408f9a815df11b4f0d4714', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd163fcb150408f9a815df11b4f0d4714::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
