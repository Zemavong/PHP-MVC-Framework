<?php

namespace app\core;

class Router {

    public Request $request;
    protected array $routes = [];

    public function __construct($request)
    {
        $this->request = $request;
    }    

    public function get($path, $callback) {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false) {
            echo 'NOT FOUND';
        }
        if(is_string($callback)) {
            return $this->renderView($callback);
        }
        return call_user_func($callback);
    }

    public function renderView($view) {
        $layoutContent = $this->layoutContent();
        include_once Application::$ROOT_DIR."/views/$view.php";
    }

    protected function layoutContent() {
        require_once Application::$ROOT_DIR.'/views/layouts/main.php';
    }
}