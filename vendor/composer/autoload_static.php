<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6743c1c9e2cb8979d13c60de80d6b63a
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Inc\\Base\\Activate' => __DIR__ . '/../..' . '/inc/Base/Activate.php',
        'Inc\\Base\\BaseController' => __DIR__ . '/../..' . '/inc/Base/BaseController.php',
        'Inc\\Base\\Deactivate' => __DIR__ . '/../..' . '/inc/Base/Deactivate.php',
        'Inc\\Base\\Enqueue' => __DIR__ . '/../..' . '/inc/Base/Enqueue.php',
        'Inc\\Base\\SettingsLinks' => __DIR__ . '/../..' . '/inc/Base/SettingsLinks.php',
        'Inc\\Init' => __DIR__ . '/../..' . '/inc/Init.php',
        'Inc\\Pages\\Admin' => __DIR__ . '/../..' . '/inc/Pages/Admin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6743c1c9e2cb8979d13c60de80d6b63a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6743c1c9e2cb8979d13c60de80d6b63a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6743c1c9e2cb8979d13c60de80d6b63a::$classMap;

        }, null, ClassLoader::class);
    }
}
