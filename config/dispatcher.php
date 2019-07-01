<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $this->request->action = ($this->request->action) ? $this->request->action : 'index';
        $name = ($this->request->controller) ?  $this->request->controller. "Controller" : 'home'. "Controller";
        $file = GLOBAL_SYS_PATH. 'controllers/' . $name . '.php';
        require($file);
        $controller = new $name();
        return $controller;
    }

}

?>