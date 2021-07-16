<?php

class Home extends liw\app\core\MainController
{
    function index()
    {
        
        $data['page_title'] = "Home";
        
        if(isset($_POST['email']) )
        {
        
            $user = $this->loadModel("user");
           
            $user->signup($_POST);
       

        }
        
        
            $this->view("home", $data );
        
           
    }
   
}