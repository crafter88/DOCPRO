<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Users_Model::get()));
    }
    public function add(){
        $profiles_data = array('p_fname'=>$this->input->post('add-fname'),
                               'p_mname'=>$this->input->post('add-mname'),
                               'p_lname'=>$this->input->post('add-lname'),
                               'p_address'=>$this->input->post('add-address'),
                               'p_cno'=>$this->input->post('add-cno'),
                               'p_email'=>$this->input->post('add-email'));
        $p_insert_id = Profiles_Model::add($profiles_data);
        $p_cb_data = array('p_id'=>$p_insert_id, 'cb_id'=>$this->input->post('add-cb-id'));
        P_CB_Model::add($p_cb_data);
        
        $users_data = array('u_name'=>$this->input->post('add-username'), 
            'u_pass'=>md5($this->input->post('add-password')), 
            'u_pass'=>md5($this->input->post('add-r-password')),
            'u_pass_text'=>$this->input->post('add-password'),
            'u_type'=>$this->input->post('add-user-type'), 
            'p_id'=>$p_insert_id);
        
        $u_insert_id = Users_Model::add($users_data);
        $code = array('u_code'=>$u_insert_id);
        Users_Model::edit($u_insert_id, $code);
        
        redirect('docpro_settings/users', 'refresh'); 
    }
}