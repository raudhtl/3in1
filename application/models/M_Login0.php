
<?php
class M_login extends CI_Model {
	function login_user ($username, $password){
		$query = $this -> db ->query ("select * from user where password = MD5('$password') and username = '$username'");
		return $query;

	}
	function login_admin ($username,$password) {
		$query = $this -> db ->query("select * from admin where password = MD5('$password') and email_admin = '$email'");
		return $query;
	}
}
?>
