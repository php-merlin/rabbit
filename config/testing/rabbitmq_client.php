<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Config for Rabbit MQ Library
 */
$config['rabbitmq_client'] = array(
    'host' => '172.17.0.1',
    'port' => 5673,
    'user' => 'guest',
    'pass' => 'guest',
    'vhost' => '/',
    'allowed_methods' => null,
    'non_blocking' => false,
    'timeout' => 0
);