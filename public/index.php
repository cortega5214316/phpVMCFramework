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
	
	// Creates an instance of the Router
	$router = new Router();
	
	// add a few routes
	$router->add('', ['controller' => 'Home', 'action' => 'index']);
	$router->add('posts', ['controller' => 'Post', 'action' => 'index']);
	$router->add('posts/new', ['controller' => 'Post', 'action' => 'new']);
	
	// display the routing table
	//echo ROOT;
	echo '<pre>';
	var_dump($router->getRoutes());
	echo '</pre>';
	
	
	


?>
