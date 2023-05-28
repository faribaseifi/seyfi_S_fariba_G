<?php
namespace App\Core\Routing;

use App\Core\Request;

class Router{

    private $request;
    private $routes;
    private $current_route;


    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
    }

    public function findRoute(Request $request)
    {
        foreach ($this->routes as $route)
        {
            if(in_array($request->method(),$route['methods']) && $request->uri() == $route['uri']){
                return $route;
            }
        }

        return null;
    }

    public function run()
    {

        # check 404 : uri not found

        if(is_null($this->current_route)){
            $this->dispatch404();
        }

        $this->dispatch();

    }

    public function dispatch404()
    {
        header("HTTP/1.0 404 Not Found");
        view('errors.404');
        die();

    }

    private function dispatch()
    {
        $action = $this->current_route['action'];
        # action : null
        if(is_null($action) || empty($action)){
            return;
        }

        # action : clousure
        if(is_callable($action)){
            $action();
        }

        # action : ['controller','method']
        if(is_array($action)){
            $class_name = $action[0];

            $method = $action[1];

            if(!class_exists($class_name)){
                throw new \Exception("class $class_name Not Exist");
            }
            $controller = new $class_name();

            if(!method_exists($controller,$method)){
                throw new \Exception("method $method Not Exist in $controller");
            }
            $controller->$method();

        }
    }

}