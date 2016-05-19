<?php
class Documents extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Documents_Model::get()));
    }
    public function add(){
        $data = array('d_code'=>$this->input->post('add-code'), 'd_class'=>$this->input->post('add-class'), 'd_name'=>$this->input->post('add-name'), 'd_shortname'=>$this->input->post('add-shortname'), 'd_journal_name'=>$this->input->post('add-journal-name'));
        Documents_Model::add($data);
        redirect('docpro_settings/documents', 'refresh');
    }
}