<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Tiré du site http://www.kodingmadesimple.com/2014/08/how-to-create-login-form-codeigniter-mysql-twitter-bootstrap.html
class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          $sql = "select * from tbl_usrs where username = '" . $usr . "' and password = '" . md5($pwd) . "' and status = 'active'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
}