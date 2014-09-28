<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('m_auth');

		$login_data = $this->session->userdata('login_data');
		$this->m_auth->removeSession($login_data['session']);
		$this->session->sess_destroy();
		redirect('/login');

	}

}