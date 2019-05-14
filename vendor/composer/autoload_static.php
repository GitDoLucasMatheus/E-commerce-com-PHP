<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91b2c57946a98c3f8b0c9ad6779ac969
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'routes\\' => 7,
        ),
        'c' => 
        array (
            'classes\\' => 8,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'routes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/routes',
        ),
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Rain\\Tpl' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl.php',
        'Rain\\Tpl\\Exception' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Exception.php',
        'Rain\\Tpl\\IPlugin' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/IPlugin.php',
        'Rain\\Tpl\\NotFoundException' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/NotFoundException.php',
        'Rain\\Tpl\\Parser' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Parser.php',
        'Rain\\Tpl\\Plugin' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Plugin.php',
        'Rain\\Tpl\\PluginContainer' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/PluginContainer.php',
        'Rain\\Tpl\\Plugin\\Compress' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Plugin/Compress.php',
        'Rain\\Tpl\\Plugin\\ImageResize' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Plugin/ImageResize.php',
        'Rain\\Tpl\\Plugin\\PathReplace' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Plugin/PathReplace.php',
        'Rain\\Tpl\\SyntaxException' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/SyntaxException.php',
        'SlimFlashTest' => __DIR__ . '/..' . '/slim/slim/tests/Middleware/FlashTest.php',
        'SlimHttpUtilTest' => __DIR__ . '/..' . '/slim/slim/tests/Http/UtilTest.php',
        'SlimTest' => __DIR__ . '/..' . '/slim/slim/tests/SlimTest.php',
        'Slim\\Environment' => __DIR__ . '/..' . '/slim/slim/Slim/Environment.php',
        'Slim\\Exception\\Pass' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/Pass.php',
        'Slim\\Exception\\RequestSlash' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/RequestSlash.php',
        'Slim\\Exception\\Stop' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/Stop.php',
        'Slim\\Http\\Headers' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Headers.php',
        'Slim\\Http\\Request' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Request.php',
        'Slim\\Http\\Response' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Response.php',
        'Slim\\Http\\Util' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Util.php',
        'Slim\\Log' => __DIR__ . '/..' . '/slim/slim/Slim/Log.php',
        'Slim\\LogWriter' => __DIR__ . '/..' . '/slim/slim/Slim/LogWriter.php',
        'Slim\\Middleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware.php',
        'Slim\\Middleware\\ContentTypes' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/ContentTypes.php',
        'Slim\\Middleware\\Flash' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/Flash.php',
        'Slim\\Middleware\\MethodOverride' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/MethodOverride.php',
        'Slim\\Middleware\\PrettyExceptions' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/PrettyExceptions.php',
        'Slim\\Middleware\\SessionCookie' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/SessionCookie.php',
        'Slim\\Route' => __DIR__ . '/..' . '/slim/slim/Slim/Route.php',
        'Slim\\Router' => __DIR__ . '/..' . '/slim/slim/Slim/Router.php',
        'Slim\\Slim' => __DIR__ . '/..' . '/slim/slim/Slim/Slim.php',
        'Slim\\View' => __DIR__ . '/..' . '/slim/slim/Slim/View.php',
        'classes\\Bank' => __DIR__ . '/../..' . '/app/classes/Bank.php',
        'classes\\Page' => __DIR__ . '/../..' . '/app/classes/Page.php',
        'classes\\Product' => __DIR__ . '/../..' . '/app/classes/Product.php',
        'routes\\HomeRouter' => __DIR__ . '/../..' . '/app/routes/HomeRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91b2c57946a98c3f8b0c9ad6779ac969::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91b2c57946a98c3f8b0c9ad6779ac969::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit91b2c57946a98c3f8b0c9ad6779ac969::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit91b2c57946a98c3f8b0c9ad6779ac969::$classMap;

        }, null, ClassLoader::class);
    }
}
