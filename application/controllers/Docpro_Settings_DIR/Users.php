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
        $data = array('u_name'=>$this->input->post('add-username'), 'u_pass'=>md5($this->input->post('add-password')), 'u_pass'=>md5($this->input->post('add-r-password')), 'u_pass_text'=>$this->input->post('add-password'), 'u_type'=>$this->input->post('add-user-type'), 'cb_id'=>$this->input->post('add-cb-id'));
        Users_Model::add($data);
        redirect('docpro_settings/users', 'refresh');
    }
    public function edit(){
        $p_id = $this->input->post('p-id');
        $p_data = array('p_fname'=>$this->input->post('edit-fname'), 'p_mname'=>$this->input->post('edit-mname'), 'p_lname'=>$this->input->post('edit-lname'), 'p_address'=>$this->input->post('edit-address'), 'p_cno'=>$this->input->post('edit-cno'), 'p_email'=>$this->input->post('edit-email'));
        Profiles_Model::edit($p_id, $p_data);
        $u_id = $this->input->post('u-id');
        $u_data = array('u_name'=>$this->input->post('edit-uname'), 'u_pass'=>$this->input->post('edit-pass'), 'u_pass'=>$this->input->post('edit-rpass'), 'u_pass_text'=>$this->input->post('edit-pass'), 'u_type'=>$this->input->post('edit-utype'));
        Users_Model::edit($u_id, $u_data);
        $cb_id = $this->input->post('cb-id');
        $cb_data = array('cb_name'=>$this->input->post('edit-company'));
        Company_Branches_Model::edit($cb_id, $cb_data);
        redirect('docpro_settings/users', 'refresh');
    }
}