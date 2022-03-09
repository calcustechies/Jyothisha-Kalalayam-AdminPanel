<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function login($UserName,$Password)
    {
        $query  =$data = $this->db->query('CALL `RootLogin`("'.$UserName.'","'.$Password.'")');
        return $query ;
    }

}