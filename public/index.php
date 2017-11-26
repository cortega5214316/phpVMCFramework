<?php

	/**
	*
	*	PhpFramework
	*	
	*	Front Controller
	*
	*
	*
	*/
	define('ROOT', dirname(dirname(__FILE__)));
	require ROOT.'/app/configs/config.php'; 
	require COREDIR.DS.'router.class.php'; 
	
	//echo ROOT;
	
	$router = new Router();
	
	echo get_class($router);
	
	

?>
