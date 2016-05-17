<?php
class Taxes_Model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->from('taxes')->get()->result();
    }

     public static function add($data){
        self::$db->insert('taxes', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }

    public static function edit($id, $data){
        self::$db->where('tax_id', $id)->update('taxes', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }

    public static function update($data){
        self::$db->insert('taxes', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }

}