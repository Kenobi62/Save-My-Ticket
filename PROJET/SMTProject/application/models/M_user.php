<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function select_by_login($login) {


        $query = $this->db->select("*")->from("user")->where("login", $login)->get();
        $resultats = $query->result_array();
        return $resultats;
    }
    
    

    

}