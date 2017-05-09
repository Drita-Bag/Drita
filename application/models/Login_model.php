<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function IsConnected() {
            if(isset($_COOKIE['VoCoreConnect']))
            {
                $reponse = TRUE;
            }
            else
            {
                $reponse = FALSE;
            }
            return $reponse;
        }
    public function user_validity(){
        
        if(empty($_POST['UserName']) || empty($_POST['Password']))
        {
            $reponse = FALSE;
        }
        else
        {
            $handle=fopen('C:/wamp/www/Drita-Bag/application/GetLog.txt', 'r');
            $compteur=0;
            $UserCheck = FALSE;
            $PassCheck = FALSE;
            if($handle){
                while(($line=fgets($handle)) !== false)
                {
                    if($_POST['UserName'] == $line && $compteur = 0)
                    {
                        $UserCheck = TRUE;
                    }
                    else if($_POST['Password'] == $line && $compteur = 1)
                    {
                        $PassCheck = TRUE;
                    }
                }
                
                if($UserCheck == TRUE && $PassCheck == TRUE)
                {
                    $reponse = TRUE;
                    if(isset($_POST['RememberMe']))
                    {
                        if($_POST['RememberMe'] = "true")
                        {
                            setcookie("VoCoreConnect", "VoCoreConnect", (time()+365*24*3600));
                        }
                        else
                        {
                            setcookie("VoCoreConnect","VoCoreConnect", (time()+20));
                        }
                    }
                }
                else
                {
                    $reponse = false;
                }
            }
            fclose($handle);
            
            
        }
        
        return $reponse;
        
    }

}
