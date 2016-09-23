<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'chat';
	$config['host'] = '127.0.0.1:3308';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'chat';
	$config['host'] = '127.0.0.1:3038';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>