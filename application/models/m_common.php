<?php
class M_common extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function isExists( $field, $item, $table ){

		$this->db->like($field,$item);
		$query = $this->db->get($table);
		if( $query->num_rows() > 0 ){
			return true;
		} else {
			return false;
		}

	}

	public function getMetaKeyId($key){

		$this->db->select('user_id');
		$this->db->where('meta_key','borrower_key');
		$this->db->like('meta_value',$key);
		$query = $this->db->get('pas_usermetas');

		return $query->row();

	}

	public function checkMeta($id, $key, $field, $table){

		$this->db->where('meta_key', $key);
		$this->db->where($field, $id);
		$query = $this->db->get($table);

		if( $query->num_rows() > 0 ){
			return true;
		} else {
			return false;
		}

	}

	public function deleteMeta($id, $key, $field, $table){
		$this->db->where($field,$id);
		$this->db->where('meta_key',$key);
		$this->db->delete($table);
	}

	public function getMeta( $id, $key, $field, $table ){

		$this->db->select( 'meta_value' );
		$this->db->where( $field, $id );
		$this->db->where( 'meta_key', $key );
		$query = $this->db->get( $table );

		return $query->row();

	}

	public function getUsers(){

		$this->db->select('A.user_id, A.email');
		$this->db->where( 'A.active', 0 );
		$this->db->where( 'A.role', 3 );
		$where = "B.loan_application_id IS NULL";
		$this->db->where( $where );
		$this->db->from( 'pas_users A' );
		$this->db->join( 'pas_loan_application B', 'B.user_id = A.user_id', 'left');
		$this->db->group_by('user_id');
		$query = $this->db->get();

		return $query->result();
	}

	public function getPending(){

		$this->db->where( 'B.status', 0 );
		$this->db->where( 'A.role', 3 );
		$this->db->from( 'pas_users A' );
		$this->db->join( 'pas_loan_application B', 'B.user_id = A.user_id' );
		$this->db->group_by('A.user_id');
		$query = $this->db->get();

		return $query->result();

	}

	public function getBorrowers(){

		$this->db->where( 'B.status', 1 );
		$this->db->where( 'A.role', 3 );
		$this->db->from( 'pas_users A' );
		$this->db->join( 'pas_loan_application B', 'B.user_id = A.user_id' );
		$this->db->group_by('A.user_id');
		$query = $this->db->get();

		return $query->result();

	}

	public function getComaker( $id ){

		$this->db->where('user_id',$id);
		$query = $this->db->get('pas_users');
		return $query->row();

	}
	public function getBorrower( $id ){
		$this->db->where( 'active', 0 );
		$this->db->where( 'user_id', $id );
		$query = $this->db->get('pas_referrals');
		return $query->row();
	}

	public function getProfile($param,$field='session'){

		$this->db->where($field,$param);
		$query = $this->db->get('pas_users');	

		return $query->row();

	}

	public function getMetas($param,$table,$field){

		$this->db->where($field,$param);
		$query = $this->db->get($table);

		$return = array();

		foreach( $query->result() as $res ){

			$return[$res->meta_key] = $res->meta_value;

		}

		return (object)$return;

	}

	public function update($table,$data,$field,$id){

		$this->db->where($field,$id);
		if( $this->db->update($table,$data) ){
			return true;
		} else {
			return false;
		}

	}

	public function getPublic($id){

		$this->db->select('meta_value');
		$this->db->where( 'meta_key', 'public' );
		$this->db->where( 'user_id', $id );
		$query = $this->db->get( 'pas_usermetas' );

		return $query->row();

	}

	public function deletePublic($id){

		$this->db->where('meta_key', 'public');
		$this->db->where('user_id', $id);
		if( $this->db->delete('pas_usermetas') ){
			return true;
		} else {
			return false;
		}

	}

	public function updateInsert($table,$data,$field){

		$this->db->select($field);
		$this->db->where($data);
		$select = $this->db->get($table);

		if( $select->num_rows() > 0 ){

			$dataID = $select->row();

			return $this->update( $table,$data,$field,$dataID->$field );

		} else {

			return $this->insert( $table,$data );

		}

	}

	public function delete($table,$field,$id){

		$this->db->where($field,$id);
		$this->db->delete($table);

	}

	public function insert($table,$data){
		
		if( $this->db->insert($table,$data) ){

			return $this->db->insert_id();

		} else {

			return false;

		}

	}

	public function insert_batch($table,$data){

		if( $this->db->insert_batch( $table, $data ) ){

			return $this->db->insert_id();

		} else {

			return false;
		}

	}

}