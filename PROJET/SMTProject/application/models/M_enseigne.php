<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_enseigne extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function select_by_user($id_user) {


        $query = $this->db->select("*")->from("enseignes")->where("id_user", $id_user)->or_where("id_user", NULL)->get();
        $resultats = $query->result_array();
        return $resultats;
    }
    
    

    

}
