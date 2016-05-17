<?php
class Company extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function get(){
        echo json_encode(array('data' => Company_Model::get()));
    }
    public function add(){
        $data = array('co_class'=>$this->input->post('classification'), 'co_name'=>$this->input->post('name'), 'co_ind_name'=>$this->input->post('indname'), 'co_address'=>$this->input->post('addr'), 'co_tin'=>$this->input->post('tin'));
        Company_Model::add($data);
        redirect('docpro_settings/company', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('editid');
        $data = array('co_class'=>$this->input->post('editclassification'), 'co_name'=>$this->input->post('editname'), 'co_ind_name'=>$this->input->post('editindname'), 'co_address'=>$this->input->post('editaddr'), 'co_tin'=>$this->input->post('edittin'));
        Company_Model::edit($id, $data);
        redirect('docpro_settings/company', 'refresh');
    }
    public function update(){
        $data = array('co_class'=>$this->input->post('updateclassification'), 'co_name'=>$this->input->post('updatename'), 'co_ind_name'=>$this->input->post('updateindname'), 'co_address'=>$this->input->post('updateaddr'), 'co_tin'=>$this->input->post('updatetin'));
        Company_Model::update($data);
        redirect('docpro_settings/company', 'refresh');        
    }
}