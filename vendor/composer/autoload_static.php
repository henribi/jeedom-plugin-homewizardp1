<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53040797efd1392e0d3da124d22eca1a
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'MipsEqLogicTrait' => 
            array (
                0 => __DIR__ . '/..' . '/mips/jeedom-tools/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit53040797efd1392e0d3da124d22eca1a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit53040797efd1392e0d3da124d22eca1a::$classMap;

        }, null, ClassLoader::class);
    }
}
