<?php

namespace liw\app\core;


class App
{
    

    private $controller = "home";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
      
        $url = $this->splitURL();
        
       var_dump($url);
        if(file_exists("../app/controllers/" . strtoLower($url[0]) . ".php" )){
            $this->controller = strtoLower($url[0]);
            unset($url[0]);
        }
        
        require "app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
       

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
           
            $this->params = array_values($url);
            call_user_func_array([$this->controller, $this->method],$this->params);
           
        }else{
            if(method_exists($this->controller, $this->method)){
                $this->method = $this->method;
                unset($url[1]);
            }
           
            $this->params = array_values($url);
            call_user_func_array([$this->controller, $this->method],$this->params);
        }
        
    }

    private function splitURL()
    {
      
        if(isset($_GET['url'])){
            $url =  $_GET['url'];
        }
        if(empty($_GET['url'])){
            $url= $this->controller . "/" . $this->method ;
        }
       
        return explode("/", filter_var(trim($url,"/"), FILTER_SANITIZE_URL));
    }
}