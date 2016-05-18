<?php
class Modes_Of_Payment extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function get(){
        echo json_encode(array('data' => Modes_of_payment_model::get()));
    }
    
    public function add(){
        $data = array('pay_mode_code' => $this->input->post('paymodecode'),
                      'pay_mode_seq' => $this->input->post('paymodeseq'),
                      'pay_mod_name' => $this->input->post('paymodename'),
                      'pay_mod_shortname' => $this->input->post('paymodeshortname'),
                      'pay_code' => $this->input->post('paycode'),
                      'pay_type' => $this->input->post('paytype'));

        Modes_of_payment_model::Add($data);

        redirect('docprosettings/modesofpayment', 'refresh');
    }

    public function edit(){
      
        $id = $this->input->post('paymodeid');

        $data = array('pay_mode_code' => $this->input->post('paymodecode'),
                      'pay_mode_seq' => $this->input->post('paymodeseq'),
                      'pay_mod_name' => $this->input->post('paymodename'),
                      'pay_mod_shortname' => $this->input->post('paymodeshortname'),
                      'pay_code' => $this->input->post('paycode'),
                      'pay_type' => $this->input->post('paytype'));

        Modes_of_payment_model::Edit($id,$data);

        redirect('docprosettings/modesofpayment', 'refresh');
    }

    public function update(){
        $data = array('pay_mode_code' => $this->input->post('paymodecode'),
                      'pay_mode_seq' => $this->input->post('paymodeseq'),
                      'pay_mod_name' => $this->input->post('paymodename'),
                      'pay_mod_shortname' => $this->input->post('paymodeshortname'),
                      'pay_code' => $this->input->post('paycode'),
                      'pay_type' => $this->input->post('paytype'));

        Modes_of_payment_model::Update($data);

        redirect('docprosettings/modesofpayment', 'refresh');
    }
}