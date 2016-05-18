<?php
class Modes_of_payment_model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        $query = self::$db->get('mod_of_payment');
        return $query->result();
    }
    
    public static function add($data){
        self::$db->insert('mod_of_payment', $data);        
        return self::$db->affected_rows() > 0 ? true : false;
    }

    public static function edit($id, $data){
        self::$db->where('pay_mode_id', $id)->update('mod_of_payment', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
    public static function update($data){
        self::$db->insert('mod_of_payment', $data);        
        return self::$db->affected_rows() > 0 ? true : false;
    }
    
    
}