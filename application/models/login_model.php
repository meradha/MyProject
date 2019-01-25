
<?php

class Login_model extends CI_Model {

	function __construct()
	{
       parent::__construct();
	   $this->load->database();
	}
	public function checkUserLogin($data)
	{
		$user_email = $data['user_email'];
		$user_password = $data['user_password'];
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('user_email', $user_email);
		$this->db->where('user_password', $user_password);
		$query = $this->db->get();
		return $query->result();
	}
}
?>