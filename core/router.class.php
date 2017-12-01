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
		*	Parameters from the matched route
		*	@var array
		*/
		protected $params = [];
		
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
        
        /*
		*	Match the route to the routes already defined in the routing table,
        *   if route foun dthen set the $params
		*
		*	@param string $url the route URL
		*
		*	@return bool true if a match was found, false otherwise
		*/
		public function Match($url)
		{
			foreach($this->routes as $route => $params)
            {
                if ($url == $route)
                {
                    $this->params = $params;
                    return true;
                }
            }
            
            return false;
		}
	
	}
	
	
	

?>