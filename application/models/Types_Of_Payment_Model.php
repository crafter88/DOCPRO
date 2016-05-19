<?php
class Types_Of_Payment_model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->from('types_of_payment')->get()->result();
    }
}