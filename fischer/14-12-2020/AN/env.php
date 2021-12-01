<?php
return array (
  'cache' => 
  array (
    'frontend' => 
    array (
      'default' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis.internal',
          'port' => 6379,
          'database' => 1,
        ),
      ),
      'page_cache' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis.internal',
          'port' => 6379,
          'database' => 2,
        ),
      ),
    ),
  ),
  'MAGE_MODE' => 'developer',
  'cache_types' => 
  array (
    'compiled_config' => 1,
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 0,
    'target_rule' => 1,
    'config_webservice' => 1,
    'translate' => 1,
    'google_product' => 1,
    'vertex' => 1,
  ),
  'cron' => 
  array (
  ),
  'backend' => 
  array (
    'frontName' => 'admin',
  ),
  'db' => 
  array (
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'database.internal',
        'username' => 'user',
        'dbname' => 'main',
        'password' => '',
      ),
      'indexer' => 
      array (
        'host' => 'database.internal',
        'username' => 'user',
        'dbname' => 'main',
        'password' => '',
      ),
    ),
  ),
  'queue' => 
  array (
    'consumers_wait_for_messages' => 0,
  ),
  'crypt' => 
  array (
    'key' => 'b5116e5a74353739c7aa41ca6fd1bca9',
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'session' => 
  array (
    'save' => 'redis',
    'redis' => 
    array (
      'host' => 'redis.internal',
      'port' => 6379,
      'database' => 0,
      'disable_locking' => 1,
    ),
  ),
  'lock' => 
  array (
    'provider' => 'db',
    'config' => 
    array (
      'prefix' => NULL,
    ),
  ),
  'downloadable_domains' => 
  array (
    0 => 'master-7rqtwti-peyesrxyoqwuq.us-5.magentosite.cloud',
  ),
  'install' => 
  array (
    'date' => 'Wed, 08 Jul 2020 18:59:53 +0000',
  ),
  'static_content_on_demand_in_production' => 0,
  'force_html_minification' => 1,
  'cron_consumers_runner' => 
  array (
    'cron_run' => false,
    'max_messages' => 10000,
    'consumers' => 
    array (
    ),
  ),
  'system' => 
  array (
    'default' => 
    array (
      'catalog' => 
      array (
        'search' => 
        array (
          'engine' => 'elasticsearch6',
          'elasticsearch6_server_hostname' => 'elasticsearch.internal',
          'elasticsearch6_server_port' => 9200,
        ),
      ),
    ),
  ),
  'directories' => 
  array (
    'document_root_is_pub' => true,
  ),
);