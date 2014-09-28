<?php
class M_admin extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function getApplications(){

		$this->db->where('status', 1);
		$query = $this->db->get('pas_loan_application');

		return $query->result();

	}

	public function getApplication( $id ){

		$this->db->where( 'loan_application_id', $id );
		$query = $this->db->get('pas_loan_application');

		return $query->row();

	}

	public function getMember( $id ){

		$this->db->where('user_id',$id);
		$query = $this->db->get('pas_users');

		return $query->row();

	}
}