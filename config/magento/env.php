<?php
return array (
    'backend' =>
        array (
            'frontName' => 'admin',
        ),
    'db' =>
        array (
            'connection' =>
                array (
                    'indexer' =>
                        array (
                            'host' => 'mysql',
                            'dbname' => 'magento',
                            'username' => 'magento',
                            'password' => 'magento',
                            'model' => 'mysql4',
                            'engine' => 'innodb',
                            'initStatements' => 'SET NAMES utf8;',
                            'active' => '1',
                            'persistent' => NULL,
                        ),
                    'default' =>
                        array (
                            'host' => 'mysql',
                            'dbname' => 'magento',
                            'username' => 'magento',
                            'password' => 'magento',
                            'model' => 'mysql4',
                            'engine' => 'innodb',
                            'initStatements' => 'SET NAMES utf8;',
                            'active' => '1',
                        ),
                ),
            'table_prefix' => '',
        ),
    'install' =>
        array (
            'date' => 'Tue, 17 May 2016 13:11:08 +0000',
        ),
    'queue' =>
        array (
            'amqp' =>
                array (
                    'host' => '',
                    'port' => '',
                    'user' => '',
                    'password' => '',
                    'virtualhost' => '/',
                    'ssl' => '',
                ),
        ),
    'crypt' =>
        array (
            'key' => '40bc1f66c527e7a41550b4bffedf3347',
        ),
    'session' =>
        array (
            'save' => 'redis',
            'redis' =>
                array (
                    'host' => 'cache',
                    'port' => '6379',
                    'password' => '',
                    'timeout' => '2.5',
                    'persistent_identifier' => '',
                    'database' => '0',
                    'compression_threshold' => '2048',
                    'compression_library' => 'gzip',
                    'log_level' => '1',
                    'max_concurrency' => '6',
                    'break_after_frontend' => '5',
                    'break_after_adminhtml' => '30',
                    'first_lifetime' => '600',
                    'bot_first_lifetime' => '60',
                    'bot_lifetime' => '7200',
                    'disable_locking' => '0',
                    'min_lifetime' => '60',
                    'max_lifetime' => '2592000'
                )
        ),
    'resource' =>
        array (
            'default_setup' =>
                array (
                    'connection' => 'default',
                ),
        ),
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'cache_types' =>
        array (
            'config' => 1,
            'layout' => 1,
            'block_html' => 1,
            'collections' => 1,
            'reflection' => 1,
            'db_ddl' => 1,
            'eav' => 1,
            'customer_notification' => 1,
            'target_rule' => 1,
            'full_page' => 1,
            'config_integration' => 1,
            'config_integration_api' => 1,
            'translate' => 1,
            'config_webservice' => 1,
        ),
    'cache' =>
        array(
            'frontend' =>
                array(
                    'default' =>
                        array(
                            'backend' => 'Cm_Cache_Backend_Redis',
                            'backend_options' =>
                                array(
                                    'server' => 'cache',
                                    'port' => '6379',
                                    'database' => '1',
                                ),
                        ),
                    'page_cache' =>
                        array(
                            'backend' => 'Cm_Cache_Backend_Redis',
                            'backend_options' =>
                                array(
                                    'server' => 'cache',
                                    'port' => '6379',
                                    'database' => '2',
                                    'compress_data' => '0',
                                ),
                        ),
                ),
        ),
    'http_cache_hosts' => array(
        '0' => array(
            'host' => 'varnish',
        ),
    ),
);
