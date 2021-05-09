<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee95b5323bc168289d8c536d1a93cb7f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Coletivo\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Coletivo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Coletivo\\Alpha_Color_Control' => __DIR__ . '/../..' . '/inc/class-alpha-color-control.php',
        'Coletivo\\Customize_Repeatable_Control' => __DIR__ . '/../..' . '/inc/class-customize-repeatable-control.php',
        'Coletivo\\Editor_Custom_Control' => __DIR__ . '/../..' . '/inc/class-editor-custom-control.php',
        'Coletivo\\Editor_Scripts' => __DIR__ . '/../..' . '/inc/class-editor-scripts.php',
        'Coletivo\\Misc_Control' => __DIR__ . '/../..' . '/inc/class-misc-control.php',
        'Coletivo\\Textarea_Custom_Control' => __DIR__ . '/../..' . '/inc/class-textarea-custom-control.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee95b5323bc168289d8c536d1a93cb7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee95b5323bc168289d8c536d1a93cb7f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee95b5323bc168289d8c536d1a93cb7f::$classMap;

        }, null, ClassLoader::class);
    }
}