<?php
class M_login extends CI_Model {
	function login_username($username, $password){
		$query = $this -> db ->query ("select * from userlist where password = '$password' and username = '$username'");
		return $query;
	}
  function login_email($email, $password){
    $query = $this -> db ->query ("select * from userlist where password ='$password' and email = '$email'");
    return $query;
  }
}
