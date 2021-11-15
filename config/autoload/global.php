<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

use Laminas\Db\Adapter;


return [

    'service_manager' => [
        'abstract_factories' => [
            Adapter\AdapterAbstractServiceFactory::class
        ],
        'factories' => [
            Adapter\AdapterInterface::class => Adapter\AdapterServiceFactory::class,
        ],
        'aliases' => [
            Adapter\Adapter::class => Adapter\AdapterInterface::class
        ]
    ],
    'db' => [
        'database' => 'Laminas',
        'driver'   => 'Pdo_MySQL',
        'username' => 'root',
        'password' => 'pass1234',
        'hostname' => 'mysql',
        'port' => '3306'
    ],
    /*'db' => [
        'driver' => 'Pdo',
        'adapters' => [
            mysqliAdapter::class => [
                'driver' => 'Pdo',
                'dsn' => 'mysql:dbname=laminas;host=localhost;charset=utf8',
                'username' => 'root',
                'password' => 'pass1234',
                'port' => '3306',

                /*'driver_options' => [
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                ],
            ],
        ],
    ],*/
];
