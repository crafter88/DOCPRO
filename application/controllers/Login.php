<?php
class Login extends CI_Controller{
    function __construct(){
		parent::__construct();
            if($this->session->userdata('logged_in')){
                redirect('home', 'refresh');
            }
    }
    public function index(){
        $data = array('title' => 'Login', 'auth_msg' => $this->session->flashdata('auth_msg'));
		$this->load->view('login', $data);
    }
    public function postLogin(){
        $id = User_model::Login($this->input->post('username'), $this->input->post('password'));
        if($id === false){
            $this->session->set_flashdata('auth_msg', 'Incorrect username/password');
            redirect('login', 'refresh');
    	}else{
            $sess_array = $id;      
            $this->session->set_userdata('logged_in', $sess_array);
            redirect('home', 'refresh');
    	}
    }
}