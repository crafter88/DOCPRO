<?php
class Journals extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function get(){
        echo json_encode(array('data' => Journals_model::get()));
    }
    
}