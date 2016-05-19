<?php
class Modes_Of_Payment extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Modes_Of_Payment_Model::get()));
    }
    public function add(){
        $data = array('mop_code' => $this->input->post('add-code'), 'mop_name' => $this->input->post('add-name'), 'mop_shortname' => $this->input->post('add-shortname'), 'mop_type' => $this->input->post('add-type'));
        Modes_Of_Payment_Model::add($data);
        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array('mop_code'=>$this->input->post('edit-code'), 'mop_name' => $this->input->post('edit-name'), 'mop_shortname' => $this->input->post('edit-shortname'), 'mop_type' => $this->input->post('edit-type'));
        Modes_Of_Payment_Model::edit($id, $data);
        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
    public function update(){
        $data = array('mop_code' => $this->input->post('update-code'), 'mop_name' => $this->input->post('update-name'), 'mop_shortname' => $this->input->post('update-shortname'), 'mop_type' => $this->input->post('update-type'));
        Modes_Of_Payment_Model::update($data);
        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
}