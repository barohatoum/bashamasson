<?php

	(defined('DS')) 	? null : define('DS', DIRECTORY_SEPARATOR);
	(defined('ROOT')) 	? null : define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	(defined('APP')) 	? null : define('APP', ROOT . DS . 'app');
	(defined('ASSETS')) ? null : define('ASSETS', ROOT . DS . 'assets');
	(defined('CONFIG')) ? null : define('CONFIG', ROOT . DS . 'config');
	(defined('INC')) 	? null : define('INC', ROOT . DS . 'inc');
	(defined('LOGS')) 	? null : define('LOGS', ROOT . DS . 'logs');

	$_dev_mode = 1;
	error_reporting(E_ALL);
	ini_set('log_errors', 1);
	ini_set('error_log', LOGS . DS . 'errors' . DS . date('Ymd') . '.log');
	ini_set('display_errors', $_dev_mode);
