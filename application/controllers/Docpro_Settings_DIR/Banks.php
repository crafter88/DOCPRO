<?php
class Banks extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data'=> Banks_Model::get()));
    }
    public function add(){
        $data = array('b_code'=>$this->input->post('add-code'), 'b_name'=>$this->input->post('add-name'), 'b_shortname'=>$this->input->post('add-shortname'));
        Banks_Model::add($data);
        redirect('docpro_settings/banks', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array('b_code'=>$this->input->post('edit-code'), 'b_name'=>$this->input->post('edit-name'), 'b_shortname'=>$this->input->post('edit-shortname'));
        Banks_Model::edit($id, $data);
        redirect('docpro_settings/banks', 'refresh');
    }
    public function update(){
        $data = array('b_code'=>$this->input->post('update-code'), 'b_name'=>$this->input->post('update-name'), 'b_shortname'=>$this->input->post('update-shortname'));
        Banks_Model::update($data);
        redirect('docpro_settings/banks', 'refresh');    
    }
}