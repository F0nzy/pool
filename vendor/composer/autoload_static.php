<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ddbcdd137917c3af33344acda490ca2
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8ddbcdd137917c3af33344acda490ca2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}