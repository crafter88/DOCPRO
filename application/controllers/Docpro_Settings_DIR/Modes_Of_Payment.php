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
        $data = array('mop_name'=>$this->input->post('add-name'), 'mop_shortname'=>$this->input->post('add-shortname'), 'mop_type'=>$this->input->post('add-type'), 'top_id'=>$this->input->post('add-type-id'));
        $insert_id = Modes_Of_Payment_Model::add($data);
        $code = array('mop_code'=>$this->input->post('add-type-id')."".$insert_id);
        Modes_Of_Payment_Model::edit($insert_id, $code);
        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array('mop_code'=>$this->input->post('edit-type-id')."".$id, 'mop_name' => $this->input->post('edit-name'), 'mop_shortname' => $this->input->post('edit-shortname'), 'mop_type' => $this->input->post('edit-type'), 'top_id'=>$this->input->post('edit-type-id'));
        Modes_Of_Payment_Model::edit($id, $data);
        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
    public function update(){
        $data = array('mop_name'=>$this->input->post('update-name'), 'mop_shortname'=>$this->input->post('update-shortname'), 'mop_type'=>$this->input->post('update-type'), 'top_id'=>$this->input->post('update-type-id'));
        $insert_id = Modes_Of_Payment_Model::update($data);
        $code = array('mop_code'=>$this->input->post('update-type-id')."".$insert_id);
        Modes_Of_Payment_Model::edit($insert_id, $code);
        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
}