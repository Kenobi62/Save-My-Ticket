<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_enseigne extends CI_Controller {

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
        $this->load->model("M_enseigne");
        
        }
    
	public function index()
	{
            //$nbticket = $this->M_ticket->count_all();
            //$photo = $this->input->post("photo");
            //write_file('./tickets/ticket'.($nbticket+1).'.php', $photo);
            if(isset($_SESSION["user"])){
                
                $data["enseignes"] = $this->M_enseigne->select_by_user($_SESSION["user"]["id_user"]);
                $this->load->view("V_enseigne", $data);
            }else{
                redirect("C_login/index");
            }
		
	}
}
