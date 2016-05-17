<?php
class Documents_Model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->from('documents d')
                        ->join('journals j', 'd.journ_id=j.journ_id')
                        ->get()
                        ->result();
    }
    public static function add($data){
        self::$db->insert('documents', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
    
    public static function edit($id, $data){
        self::$db->where('doc_id', $id)->update('documents', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }

    public static function update($data){
        self::$db->insert('documents', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
}