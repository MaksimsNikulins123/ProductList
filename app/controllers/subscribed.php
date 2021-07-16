<?php

class Subscribed extends liw\app\core\MainController
{
    function index()
    {
       
        $data['page_title'] = "Subscribed";
        $this->view("subscribed", $data);
    }
    
}