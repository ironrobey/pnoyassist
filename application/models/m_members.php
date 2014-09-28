<?php
class M_members extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function loan_application( $id ){

		$this->db->where( 'user_id', $id );
		$this->db->order_by('loan_application_id', 'desc');
		$query = $this->db->get('pas_loan_application');

		return $query->row();

	}

	public function getOthers( $id ){

		$this->db->where('other_id', $id);
		$query = $this->db->get('pas_others');

		return $query->row();

	}

	public function getOthersViaPrincipal( $id, $relationship ){

		$this->db->where( 'user_id', $id );
		$this->db->where( 'relationship', $relationship );
		$this->db->order_by('other_id', 'desc');
		$query = $this->db->get('pas_others');

		return $query->row();

	}

}