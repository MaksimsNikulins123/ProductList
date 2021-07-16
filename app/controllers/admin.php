<?php

class Admin extends liw\app\core\MainController
{
  
    function index()
    {
        $data['page_title'] = "Admin";
        
        $admin = $this->loadModel("adminTable");
       
        $emails = $admin->getEmailsFromTable();
        
            if(!empty($_POST['deleteValue']))
            {
                
                
                $admin->deleteEmailFromDataBase($_POST['deleteValue']);
                $emails = $admin->getEmailsFromTable();
                $this->view("Admin", $data, $emails);
            }else{
               
                $this->view("Admin", $data, $emails);
            }
            
            
            
           
    }
    
   
}