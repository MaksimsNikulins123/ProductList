<?php

class AdminTable
{
    function getEmailsFromTable()
    {
        
        $DB = new Database();

        $query = "SELECT * FROM subscriberegistration";
        $data = $DB->read($query);
        return $data;
     
        
    }
    function getEmailFromTable($id)
    {
        
        $DB = new Database();

        $query = "SELECT email FROM subscriberegistration WHERE id = $id";
        $data = $DB->read($query);
        return $data;
    
        
    }
    function deleteEmailFromDataBase($deleteValue)
    {
        $DB = new Database();

       
        $query = "DELETE FROM subscriberegistration WHERE id=$deleteValue";
        $data = $DB->delete($query);
        return $data;
     
    }
    
}     