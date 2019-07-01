<?php
    if (!defined('DS'))
    {	
        define('DS', DIRECTORY_SEPARATOR);
    }

    include 'db_config.php';

    $_config['http_host'] 	= 'http://'.$_SERVER['HTTP_HOST'];
    if ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != 'off')
    {
        $_config['http_host'] 	= 'https://'.$_SERVER['HTTP_HOST'];
    }

    $_config['doc_root'] 		= '/';
    $_config['web_folder'] 		= 'htdocs';	
    $_config['project_name']	= 'Siddhant';

    $_config['admin_folder']	= 'admin';
    $_config['root_path'] 		= str_replace(DS.'config'.DS.'config.php', '', __FILE__);
    $_config['server_path']		= $_config['root_path'].DS.$_config['web_folder'];
    $_config['system_path']		= $_config['root_path'];
        
    define('GLOBAL_ROOT_PATH', 	$_config['root_path']);
    define('GLOBAL_SYS_PATH', 	$_config['system_path'].DS);

    define('_SESSION_WEB', 		'web_sess');
    define('_SESSION_ADMIN', 	'admin_sess');

    define('GLOBAL_DOC_ROOT', 		$_config['doc_root']);
    define('GLOBAL_DOC_ROOT_ADMIN', $_config['doc_root'].$_config['admin_folder'].'/');
    define('GLOBAL_SERVER_PATH',	$_config['server_path']);

    define('_HTTP_HOST', 		$_config['http_host']);
    define('_FROM_ADMIN_EML', 'no-reply@'.$_SERVER['HTTP_HOST']);

    define('_FILE_TMPPATH', 	$_config['root_path'].DS.'tmp'.DS.'uploads'.DS);
    define('_FILE_CACHEPATH', 	$_config['root_path'].DS.'tmp'.DS.'image_cache'.DS);
    define('_FILE_UPLOADPATH', 	$_config['root_path'].DS.'media-files'.DS);
        
?>