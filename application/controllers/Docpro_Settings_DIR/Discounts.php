<?php
class Discounts extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data'=> Discounts_Model::get()));
    }
    public function add(){
        $data = array('di_code'=>$this->input->post('add-code'), 'di_name'=>$this->input->post('add-name'), 'di_shortname'=>$this->input->post('add-shortname'));
        Discounts_Model::add($data);
        redirect('docpro_settings/discounts', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array('di_code'=>$this->input->post('edit-code'), 'di_name'=>$this->input->post('edit-name'), 'di_shortname'=>$this->input->post('edit-shortname'));
        Discounts_Model::edit($id, $data);
        redirect('docpro_settings/discounts', 'refresh');
    }
    public function update(){
        $data = array('di_code'=>$this->input->post('update-code'), 'di_name'=>$this->input->post('update-name'), 'di_shortname'=>$this->input->post('update-shortname'));
        Discounts_Model::update($data);
        redirect('docpro_settings/discounts', 'refresh');    
    }
}