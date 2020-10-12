<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69489323c380d75477cfe5e8b050b3cb
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/Connections.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/database/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/router/router.php',
        'Task' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit69489323c380d75477cfe5e8b050b3cb::$classMap;

        }, null, ClassLoader::class);
    }
}
