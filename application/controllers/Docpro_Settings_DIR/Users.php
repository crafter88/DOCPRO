<?php
class Users extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function get(){
        echo json_encode(array('data' => User_Model::get()));
    }
    public function add(){
        $profile_data = array('fname'=>$this->input->post('fname'), 'mname'=>$this->input->post('mname'), 'lname'=>$this->input->post('lname'), 'address'=>$this->input->post('addr'), 'cnum'=>$this->input->post('cnum'), 'email'=>$this->input->post('email'));
        $inserted_profile_id = Profile_Model::add($profile_data);
        if($inserted_profile_id){
            $user_data = array('username'=>$this->input->post('username'), 'password'=>$this->input->post('pass'), 'password'=>$this->input->post('rpass'), 'profile_id'=>$inserted_profile_id);
            User_Model::add($user_data);
            $cp_data = array('profile_id'=>$inserted_profile_id, 'co_id'=>$this->input->post('coid'));
            Company_Profile_Model::add($cp_data);
            redirect('docpro_settings/users', 'refresh');
        }
    }
}