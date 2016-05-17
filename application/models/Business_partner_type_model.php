<?php
class Business_partner_type_model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    
    public static function get(){
        $query = self::$db->get('bp_type');
        return $query->result();
    }
    
    public static function add($data){
        self::$db->insert('bp_type', $data);        
        return self::$db->affected_rows() > 0 ? true : false;
    }
    
    public static function edit($id, $data){
        self::$db->where('bp_type_id', $id)->update('bp_type', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }

    public static function update($data){
        self::$db->insert('bp_type', $data);        
        return self::$db->affected_rows() > 0 ? true : false;
    }
}