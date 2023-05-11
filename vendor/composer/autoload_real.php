<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc3eb611d46388b992053e12b06db3a9b
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

        spl_autoload_register(array('ComposerAutoloaderInitc3eb611d46388b992053e12b06db3a9b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc3eb611d46388b992053e12b06db3a9b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc3eb611d46388b992053e12b06db3a9b::getInitializer($loader));

        $loader->register(true);

        $filesToLoad = \Composer\Autoload\ComposerStaticInitc3eb611d46388b992053e12b06db3a9b::$files;
        $requireFile = static function ($fileIdentifier, $file) {
            if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
                $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

                require $file;
            }
        };
        foreach ($filesToLoad as $fileIdentifier => $file) {
            ($requireFile)($fileIdentifier, $file);
        }

        return $loader;
    }
}