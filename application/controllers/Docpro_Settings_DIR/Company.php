<?php
class Company extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Company_Branches_Model::get()));
    }
    public function add(){
        $data = array('cb_class'=>$this->input->post('add-class'), 'cb_type'=>$this->input->post('add-type'), 'cb_name'=>$this->input->post('add-name'), 'cb_ind_name'=>$this->input->post('add-ind-name'), 'cb_address'=>$this->input->post('add-address'), 'cb_tin'=>$this->input->post('add-tin'), 'cb_tax_type'=>$this->input->post('add-tax-type'), 'bpc_id'=>$this->input->post('add-class-id'), 'bpt_id'=>$this->input->post('add-type-id'), 'tt_id'=>$this->input->post('add-tax-type-id'));
        $insert_id = Company_Branches_Model::add($data);
        $code = array('cb_code'=>$this->input->post('add-class-id')."".$this->input->post('add-type-id')."".$this->input->post('add-tax-type-id')."".$insert_id);
        Company_Branches_Model::edit($insert_id, $code);        
        redirect('docpro_settings/company', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');        
        $data = array('cb_code'=>$this->input->post('edit-class-id')."".$this->input->post('edit-type-id')."".$this->input->post('edit-tax-type-id')."".$id, 'cb_class'=>$this->input->post('edit-class'), 'cb_type'=>$this->input->post('edit-type'), 'cb_name'=>$this->input->post('edit-name'), 'cb_ind_name'=>$this->input->post('edit-ind-name'), 'cb_address'=>$this->input->post('edit-address'), 'cb_tin'=>$this->input->post('edit-tin'), 'cb_tax_type'=>$this->input->post('edit-tax-type'), 'bpc_id'=>$this->input->post('edit-class-id'), 'bpt_id'=>$this->input->post('edit-type-id'), 'tt_id'=>$this->input->post('edit-tax-type-id'));
        Company_Branches_Model::edit($id, $data);
        redirect('docpro_settings/company', 'refresh');
    }
    public function update(){
        $data = array('cb_class'=>$this->input->post('update-class'), 'cb_type'=>$this->input->post('update-type'), 'cb_name'=>$this->input->post('update-name'), 'cb_ind_name'=>$this->input->post('update-ind-name'), 'cb_address'=>$this->input->post('update-address'), 'cb_tin'=>$this->input->post('update-tin'), 'cb_tax_type'=>$this->input->post('update-tax-type'), 'bpc_id'=>$this->input->post('update-class-id'), 'bpt_id'=>$this->input->post('update-type-id'), 'tt_id'=>$this->input->post('update-tax-type-id'));
        $insert_id = Company_Branches_Model::update($data);
        $code = array('cb_code'=>$this->input->post('update-class-id')."".$this->input->post('update-type-id')."".$this->input->post('update-tax-type-id')."".$insert_id);
        Company_Branches_Model::edit($insert_id, $code);        
        redirect('docpro_settings/company', 'refresh');
    }
}