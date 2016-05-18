<?php
class Taxes_model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    
    public static function get(){
        $query = self::$db->get('taxes');
        return $query->result();
    }
}