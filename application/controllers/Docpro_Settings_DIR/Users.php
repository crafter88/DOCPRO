<?php
class Users extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function get(){
        echo json_encode(array('data' => Users_model::get()));
    }
    
}