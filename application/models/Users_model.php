<?php
class Users_Model extends CI_Model {
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->from('users u')->join('profiles p', 'u.p_id=p.p_id')->join('p_cb pc', 'p.p_id=pc.p_id')->join('company_branches cb', 'pc.cb_id=cb.cb_id')->get()->result();
    }
    public static function add($data){
        self::$db->insert('users', $data);
        return self::$db->affected_rows() > 0 ? self::$db->insert_id() : false;
    }
    public static function edit($id, $data){
        self::$db->where('u_id', $id)->update('users', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
    public static function Login($username, $password){
        $user = self::$db->get_where('users', array('u_name' => $username));
        if($user->num_rows() > 0){
            $user = $user->result()[0];
            if(md5($password == $user->u_pass)){
                return $user->u_id;
            }
        }
        return false;
    }
    /*public static function Insert($username, $password){
		if(self::$db->get_where('user_accounts', array('ua_username' => $username))->num_rows() > 0){
	            return false;
		}
		self::$db->insert('user_accounts', array('ua_username' => $username, 'ua_password' => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),'ua_password_text' => $password));
		return true;
    }*/
}