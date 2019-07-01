<?php
	@mb_internal_encoding("UTF-8");
	
	require GLOBAL_SYS_PATH."config/database.php";
    require GLOBAL_SYS_PATH.'config/router.php';
    require GLOBAL_SYS_PATH.'config/request.php';
    require GLOBAL_SYS_PATH.'config/dispatcher.php';

    require GLOBAL_SYS_PATH."core/controller.php";
	require GLOBAL_SYS_PATH."core/model.php";
    
    $dispatch = new Dispatcher();
    $dispatch->dispatch();
?>