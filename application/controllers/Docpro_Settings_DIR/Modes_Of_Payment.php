<?php
class Modes_Of_Payment extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function get(){
        echo json_encode(array('data' => Modes_of_payment_model::get()));
    }
    
    public function add(){
        $data = array('pay_type_code' => $this->input->post('code'),
                      'pay_mod_name' => $this->input->post('name'),
                      'pay_mod_shortname' => $this->input->post('shortname'),
                      'pay_type' => $this->input->post('paymenttype'));

        Modes_of_Payment_Model::add($data);

        redirect('docpro_settings/modes_of_payment', 'refresh');
    }

    public function edit(){
      
        $id = $this->input->post('editid');

        $data = array('pay_type_code' => $this->input->post('code'),
                      'pay_mod_name' => $this->input->post('name'),
                      'pay_mod_shortname' => $this->input->post('shortname'),
                      'pay_type' => $this->input->post('paymenttype'));

        Modes_of_Payment_Model::edit($id,$data);

        redirect('docpro_settings/modes_of_payment', 'refresh');
    }

    public function update(){
        $data = array('pay_type_code' => $this->input->post('code'),
                      'pay_mod_name' => $this->input->post('name'),
                      'pay_mod_shortname' => $this->input->post('shortname'),
                      'pay_type' => $this->input->post('paymenttype'));

        Modes_of_Payment_Model::update($data);

        redirect('docpro_settings/modes_of_payment', 'refresh');
    }
}