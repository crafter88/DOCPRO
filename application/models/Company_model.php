<?php
class Company_model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }

     public static function get(){
        $query = self::$db->from('company_branches cb')
                          ->join('bp_class bc', 'bc.bp_class_id = cb.bp_class_id')
                          ->join('bp_type bt', 'bt.bp_type_id = cb.bp_type_id')
                          ->join('taxes t', 't.tax_id = cb.tax_id')
                          ->get();
        return $query->result();
    }

     public static function add($data){
        self::$db->insert('company_branches', $data);        
        return self::$db->affected_rows() > 0 ? true : false;
    }
    
    
    
}