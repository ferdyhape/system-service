<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit36f7824e0168418ecb1de055a0f92583
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

        spl_autoload_register(array('ComposerAutoloaderInit36f7824e0168418ecb1de055a0f92583', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit36f7824e0168418ecb1de055a0f92583', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit36f7824e0168418ecb1de055a0f92583::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
