<?php
/**
 * Created by Mr. Bharat Makwana.
 * User: woxiprogrammers
 * Date: 16/11/15
 * Time: 11:58 PM
 */
Class User extends CI_Model {
	function login($username, $password) {
        $sql = "SELECT id, username, password, firstname, lastname, created_at from  users WHERE password = '".MD5($password)."' AND (username = '".$username."' OR email= '".$username."')";
        $query = $this->db->query($sql);

		if($query -> num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

    function get_user_role($username) {
        $sql = "SELECT user_role_type from  users AS U, user_role AS UR WHERE UR.ID = U.user_role_id AND (username = '".$username."' OR email= '".$username."')";
        $query = $this->db->query($sql);
        $results = $query->result();
        $user_role = '';
        foreach($results as $row){
            $user_role = $row->user_role_type;
        }

        if($query -> num_rows() == 1) {
            return $user_role;
        } else {
            return false;
        }
    }
}

/* End of file user.php */
/* Location: ./application/models/user.php */