<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit863953d8ffc59ed8003bbc1352a68d05
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Calendar\\Repository\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Calendar\\Repository\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/repository/v2',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit863953d8ffc59ed8003bbc1352a68d05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit863953d8ffc59ed8003bbc1352a68d05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit863953d8ffc59ed8003bbc1352a68d05::$classMap;

        }, null, ClassLoader::class);
    }
}
