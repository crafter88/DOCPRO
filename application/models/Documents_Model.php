<?php
class Documents_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->from('documents')->get()->result();
    }
    public static function add($data){
        self::$db->insert('documents', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
}