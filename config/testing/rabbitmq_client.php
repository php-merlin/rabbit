<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Config for Rabbit MQ Library
 */
$config['rabbitmq_client'] = array(
    'host' => '172.18.0.1',
    'port' => 5672,
    'user' => 'rabbitmq',
    'pass' => 'rabbitmq',
    'vhost' => '/'
);