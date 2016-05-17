<?php
class Profile_Model extends CI_Model {
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = &get_instance()->db;
    }
    public static function get(){
    
    }
    public static function add($data){
        self::$db->insert('profile', $data);
        return self::$db->affected_rows() > 0 ? self::$db->insert_id() : false;
    }
}