<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc4a869ca9bb145f7d1ff8e1ee7ab471
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Server\\' => 21,
            'League\\Event\\' => 13,
            'Lcobucci\\JWT\\' => 13,
            'Lcobucci\\Clock\\' => 15,
        ),
        'E' => 
        array (
            'EdsonMtz\\PooEvidence\\' => 21,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\OAuth2\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-server/src',
        ),
        'League\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/event/src',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
        'Lcobucci\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/clock/src',
        ),
        'EdsonMtz\\PooEvidence\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc4a869ca9bb145f7d1ff8e1ee7ab471::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc4a869ca9bb145f7d1ff8e1ee7ab471::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc4a869ca9bb145f7d1ff8e1ee7ab471::$classMap;

        }, null, ClassLoader::class);
    }
}
