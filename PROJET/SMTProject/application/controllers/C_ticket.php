<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ticket extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
          public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("M_ticket");
        
        }
    
	public function index()
	{
            //$nbticket = $this->M_ticket->count_all();
            //$photo = $this->input->post("photo");
            //write_file('./tickets/ticket'.($nbticket+1).'.php', $photo);
            
                redirect("C_categorie/index");
            
		
	}
        
        public function list_ticket_cat($id_cat) {
            if(isset($id_cat) && isset($_SESSION["user"])){
               $data["tickets"] = $this->M_ticket->select_by_user_categorie($_SESSION["user"]["id_user"],$id_cat);
               $this->load->view("V_list_ticket", $data);
            }else{
                $this->index();
            }
            
            
            
        }
        
        public function list_ticket_ens($id_ens) {
            if(isset($id_ens) && isset($_SESSION["user"])){  
               $data["tickets"] = $this->M_ticket->select_by_user_enseigne($_SESSION["user"]["id_user"],$id_ens);
               $this->load->view("V_list_ticket", $data);
            }else{
                $this->index();
            }
        }
        
        public function detail_ticket($id_ticket) {
            if(isset($id_ticket) && isset($_SESSION["user"])){  
                $data["ticket"] = $this->M_ticket->select_by_id($id_ticket)[0];
               $this->load->view("V_detail_ticket", $data);
            }else{
                $this->index();
            }
        }
}
