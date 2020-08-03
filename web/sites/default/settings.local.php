<?php

$lando_info = json_decode(getenv('LANDO_INFO'), TRUE);

$databases = array(
  'default' =>
    array (
      'default' =>
        array (
          'database' => $lando_info['database']['creds']['database'],
          'username' => $lando_info['database']['creds']['user'],
          'password' => $lando_info['database']['creds']['password'],
          'host' => $lando_info['database']['internal_connection']['host'],
          'port' => $lando_info['database']['internal_connection']['port'],
          'driver'   => 'mysql',
          'prefix'   => '',
        ),
    ),
);
