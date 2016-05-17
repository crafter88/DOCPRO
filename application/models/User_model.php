<?php
class User_Model extends CI_Model {
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = &get_instance()->db;
    }
    public static function get(){
        return self::$db->from('user u')->join('profile p', 'u.profile_id=p.profile_id')->join('company_profile cp', 'p.profile_id=cp.profile_id')->join('company_branches cb', 'cp.co_id=cb.co_id')->get()->result();
    }
    public static function add($data){
        self::$db->insert('user', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
    public static function edit($id, $data){
        self::$db->where('user_id', $id)->update('user', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
    public static function update($data){
        self::$db->insert('user', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
    public static function Login($username, $password){
        $user = self::$db->get_where('user', array('username' => $username));
        if($user->num_rows() > 0){
            $user = $user->result()[0];
            if($password == $user->password){
                return $user->user_id;
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