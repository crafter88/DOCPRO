<?php
class Company_Profile_Model extends CI_Model {
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = &get_instance()->db;
    }
    public static function add($data){
        self::$db->insert('company_profile', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
}