<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b84138f2bfffdfabca5a60643f0510f
{
    public static $classMap = array (
        'Ps_Shoppingcart' => __DIR__ . '/../..' . '/ps_shoppingcart.php',
        'Ps_ShoppingcartAjaxModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/ajax.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7b84138f2bfffdfabca5a60643f0510f::$classMap;

        }, null, ClassLoader::class);
    }
}
