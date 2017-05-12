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
    public function SettingCookie($User, $Password)
    {
        if($User == TRUE && $Password == TRUE)
            {
                $reponse = TRUE;
                setcookie("VoCoreConnect", "VoCoreConnect", (time()+365*24*3600));  
            }                
            else
            {
                $reponse = false;
            }
        return $reponse;
    }

    public function handle($User, $Password)
    {
        $handle=fopen('C:/wamp/www/Drita-Bag/application/GetLog.txt', 'r');
        $compteur=0;
        $UserCheck = FALSE;
        $PassCheck = FALSE;
        if($handle){
            while(($line=fgets($handle)) !== false)
            {
                if($User == $line && $compteur = 0)
                {
                    $UserCheck = TRUE;
                }
                else if($Password === $line && $compteur = 1)
                {
                    $PassCheck = TRUE;
                }
            }
            fclose($handle);
            $reponse = SettingCookie($UserCheck, $PassCheck);
        }
    return $reponse;
    }
    public function user_validity($User, $Password){
        
        if(empty($User) || empty($Password)){
            
            $reponse = FALSE;
        }
        else
        {
            var_dump($User);
            var_dump($Password);
            $reponse = handle($User, $Password);
        }
        return $reponse;
    }
}