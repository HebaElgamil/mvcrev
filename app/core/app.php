<?php

namespace MVCREV\core;

class app
{
    protected $controller="homecontroller";
    protected $method="index";
    protected $params;

    function __construct()
    {
        $this->parceUrl();
        $this->render();
    }

    function parceUrl()
    {
        $url = $_SERVER['QUERY_STRING'];
        $url = explode("/", $_SERVER['QUERY_STRING']);
        $this->controller = isset($url[0]) ? $url[0] . "controller" : "homecontroller";;
        $this->method = isset($url[1]) ? $url[1] : "index";
        unset($url[0], $url[1]);
        $this->params = array_values($url);
        // if(empty($url)){
        //         $this->controller ="homecontroller";
        //         $this->method ="index";
        // }
    }

    function render()
    {
        $controller = "MVCREV\controllers\\" . $this->controller;
        if (class_exists($controller)) {
            $controller_obj = new $controller;
            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller_obj, $this->method], $this->params);
            } 
        }
    }
}
