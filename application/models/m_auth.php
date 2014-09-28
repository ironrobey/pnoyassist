<?php
class M_auth extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function isExists($param){

		$this->db->where('email',$param);
		$query = $this->db->get('pas_users');	

		if ($query->num_rows() > 0) {
			return true;
		} else{
			return false;
		}

	}

	public function getUser( $session ){

		$this->db->select( 'B.meta_key, B.meta_value' );
		$this->db->where( 'session', $session );
		$this->db->from('pas_users A');
		$this->db->join('pas_usermetas B', 'B.user_id = A.user_id');
		$query = $this->db->get();

		return $query->result();

	}

	public function checkUser( $email, $password ){

		$this->db->where('email',$email);
		$this->db->where('password', sha1(md5($password.".robey") ));
		$this->db->where('active', 0);
		$query = $this->db->get('pas_users');	

		if ($query->num_rows() > 0) {
			return $query->row();
		} else{
			return 'invalid';
		}

	}

	public function getUserViaFb( $id ){

		$this->db->where( 'facebook_id', $id );
		$query = $this->db->get('pas_users');

		if( $query->num_rows() > 0 ){
			return $query->row();
		} else {
			return 'invalid';
		}

	}

	public function saveSession($id,$role,$session){

		$this->db->where('user_id',$id);
		$query = $this->db->update('pas_users', array('session' => $session));

		$login_data = array(
				'role'	=> $role,
				'session'	=> $session,
				'user_id'	=> $id
			);

		$this->session->set_userdata('login_data',$login_data);

	}

	public function checkSession($session){

		$this->db->where('session',$session);
		$query = $this->db->get('pas_users');

		if ($query->num_rows() > 0) {
			return $query->row();
		}

	}

	public function removeSession($session){

		$this->db->where('session',$session);
		$query = $this->db->update('pas_users',array('session' => ''));

	}

}