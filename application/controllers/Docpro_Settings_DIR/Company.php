<?php
class Company extends CI_Controller{
    function __construct() {
        parent::__construct();
    }

    public function get(){
        echo json_encode(array('data' => Company_model::get()));
    }
    
    public function add(){
          $data = array('bp_class_id' => $this->input->post('bpclasscode'),
                        'bp_type_id' => $this->input->post('bptypecode'),
                        'co_seq' => $this->input->post('coseq'),
                       'co_name' => $this->input->post('coname'),
                       'co_ind_name' => $this->input->post('coindname'),
                       'co_address' => $this->input->post('coaddress'),
                       'co_tin' => $this->input->post('cotin'),
                       'tax_id' => $this->input->post('taxtypecode')
                      );
        Company_model::Add($data);
        redirect('docprosettings/company', 'refresh');

    }

   
}