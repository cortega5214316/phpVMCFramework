<?php

	/**
	*
	*	PhpFramework
	*	
	*	Router Class
	*
	*
	*
	*/
	class Router
	{
		/*
		*	Associative array of routes (routing table)
		*	@var array
		*/
		protected $routes = [];
		
		/*
		*	Adds a route to the routing table
		*
		*	@param string $route the route URL
		* 	@param array $params Parameters (controller, actions, ect)
		*
		*	@return void
		*/
		public function Add($route, $params)
		{
			$this->routes[$route] = $params;
		}
		
		/*
		*	Gets all the routes from the routing table
		*
		*	@return array
		*/
		public function getRoutes()
		{
			return $this->routes;
		}
	
	}
	
	
	

?>