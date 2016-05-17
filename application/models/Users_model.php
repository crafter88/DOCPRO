<?php
class Users_model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }

    public static function get(){
       $query = self::$db->select('*')
                         ->from('user u')
                         ->join('company_branches cb','u.user_id = cb.user_id')
                         ->get();
        return $query->result();
    }

    
}