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
            
        }
        
        
    }

}
