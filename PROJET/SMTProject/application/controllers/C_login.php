<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("M_user");
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        if (isset($_SESSION["user"])) {

            redirect("C_categorie/index");
        } else {

            $this->load->view("V_login.php");
        }
    }

    public function login() {
        if ($this->input->post("login") == "" || $this->input->post("mdp") == "") {
            $this->index();
        } else {
            $login = $this->input->post("login");
            $password = $this->input->post("mdp");
            $result = $this->M_user->select_by_login($login);
            if (count($result) != 0) {

                if (password_verify($password, $user["password"])) {

                    $_SESSION["user"] = array("id_user" => $user["id_user"], "login" => $user["login"], "pseudo" => $user["pseudo"]);
                    redirect("C_categorie/index");
                } else {
                    $this->index();
                }
            } else {
                $this->index();
            }
        }
    }
    
    public function sign_in(){
        if ($this->input->post("login") == "" || $this->input->post("mdp") == ""  || $this->input->post("pseudo") == "") {
            $this->index();
        } else {
            $login = $this->input->post("login");
            $password = $this->input->post("mdp");
            $pseudo = $this->input->post("pseudo");
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $result = $this->M_user->select_by_login($login);
            if (count($result) == 0) {
                $user=array("login" => $login, "password" => $passwordHash, "pseudo" => $pseudo);
                $this->M_user->insert_user($user);
            } else {
                $this->index();
            }
        }
    }
    
    public function logout(){
        session_destroy();
        $this->index();
    }

}
