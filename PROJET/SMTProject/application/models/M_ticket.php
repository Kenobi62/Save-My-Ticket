<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_ticket extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function count_all() {


        $query = $this->db->query("select count(*) from tickets");
        $resultat = $query->result_array()[0];
        return $resultat;
    }
    
    public function select_by_user($id_user) {


        $query = $this->db->select("*")->from("tickets")->where("id_user", $id_user)->get();
        $resultats = $query->result_array();
        return $resultats;
    }
    public function select_by_id($id) {


        $query = $this->db->select("*")->from("tickets")->where("id_ticket", $id)->get();
        $resultat = $query->result_array();
        return $resultat;
    }
    
    public function select_by_user_categorie($id_user, $id_cat) {


        $query = $this->db->select("*")->from("tickets")->where("id_user", $id_user)->where("id_categorie",$id_cat)->get();
        $resultats = $query->result_array();
        return $resultats;
    }
    
    public function select_by_user_enseigne($id_user, $id_ens) {


        $query = $this->db->select("*")->from("tickets")->where("id_user", $id_user)->where("id_enseigne", $id_ens)->get();
        $resultats = $query->result_array();
        return $resultats;
    }
    
    public function insert($ticket) {

        $this->db->insert("tickets", $ticket);
        $last_id = $this->db->insert_id();
        return $this->select_by_id($last_id)[0];
        
    }
    
    public function update_by_id($ticket, $id) {

        $this->db->where("id_ticket", $id)->update("ticket", $ticket);
        
    }
    public function delete_by_id($id) {

        $this->db->where("id_ticket", $id)->delete("ticket");
        
    }
    
    

    

}
