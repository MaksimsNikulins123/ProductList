<?php

  
        function show($stuff)
        {
                echo "<pre>";
                print_r($stuff);
                echo "</pre>";
        }

        function check_message()
        {
               if(isset($_SESSION['error']) && $_SESSION['error'] != "")
               {
                       echo $_SESSION['error'];
                       
                       unset($_SESSION['error']);
               }
        }
        function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }
       

    
    

