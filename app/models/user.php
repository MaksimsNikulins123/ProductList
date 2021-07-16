<?php

class User
{
    function signUp($POST)
    {
       
        $DB = new Database();

        $_SESSION['error'] = "";
        $email = "";
        $date = "";
        $domain = "";

        $email = test_input($_POST["email"]);
        $date = test_input((date("Y-m-d H:i:s")));
       
        

        if (isset($POST['email'])) {
         

            if(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/", $email)){
                
                $emailArray = explode(".",$email);
                if($emailArray[count($emailArray) -1] === 'co') {
                    $_SESSION['error'] = "We are not accepting subscriptions from Colombia emails";
                    
                }else{
                    if($emailArray[count($emailArray) -1] !== 'co' && !isset($_POST['checkbox'])){
                        $_SESSION['error'] = "You must accept the terms and conditions";
                    }else{
                        $emailArray = explode("@",$email);
                        $domain = ($emailArray[1]);
                        $domain = test_input($domain);
            
                        $arr['date'] = $date;
                        $arr['email'] = $email;
                        $arr['domain'] = $domain;
            
                        $query = "INSERT INTO subscriberegistration (id,date,email,domain) VALUES (NULL, :date, :email, :domain)";
                        $data = $DB->write($query, $arr);
                            
                        if($data)
                        {
                                $_SESSION['error'] = "";
                                header("Location:" . ROOT . "subscribed");
                                die;
            
                        }else{
                            alert("Error!!! Didn't get insert to Data Base");
                        }
                    }
                }
            }else{
                $_SESSION['error'] = "Please provide a valid e-mail address"; 
            }      

        }else{
            $_SESSION['error'] = "Email address is required"; 
        }

    }
}     