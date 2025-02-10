<?php

namespace Devmo\Mvc\core;

class app
{
    public function __construct()
    {

        $url = $_SERVER['QUERY_STRING'];
        $url=explode("/",$url);

        $controller = $url[0];
        $method = $url[1];

        $controller="\\Devmo\\Mvc\\controllers\\".$controller;


        call_user_func_array([new $controller(),$method],[]);
    }
}