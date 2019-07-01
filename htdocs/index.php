<?php
	session_start();
	define('DS', DIRECTORY_SEPARATOR);

	require dirname(dirname(__FILE__)).DS.'config'.DS.'config.php';

	define('_DB_LOG_TYPE', 'website');
	define('_DB_SESSION_VAR', _SESSION_WEB);

	require GLOBAL_SYS_PATH.'libs'.DS.'load.php';
?>