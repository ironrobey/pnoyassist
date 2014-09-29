<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent::__construct();

		if( $this->session->userdata('login_data') ){
			redirect( '/' );
		}

		$this->load->library('authentication');
		$params = array( 'redirect_url'=>'login/fbLogin' );
		$this->load->library('facebook', $params);
		$this->load->model('m_auth');

		$this->data['headerData']['css'][] 		= 'css/validation.css';
		$this->data['footerData']['js'][] 		= 'js/jquery.cookies.js';
		$this->data['footerData']['js'][] 		= 'template-js/login.js';

	}

	public function index()
	{

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist';
		$this->data['headerData']['pageClass'] = 'loginpage';
		$this->data['pageData'][] = null;

		$this->data['pageView'] = 'login';
		$this->load->view('master-layout', $this->data);

	}

	public function forgot_password()
	{

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist';
		$this->data['headerData']['pageClass'] = 'loginpage';
		$this->data['pageData'][] = null;

		$this->data['pageView'] = 'forgot_password';
		$this->load->view('master-layout', $this->data);

	}

	public function change_password(){

		$this->load->model('m_common');

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist';
		$this->data['headerData']['pageClass'] = 'loginpage';
		$this->data['pageData'][] = null;

		$password_key = $this->uri->segment(3);

		$this->data['exists'] = $this->m_common->isExists( 'session',$password_key,'pas_users' );

		$this->data['pageView'] = 'change_password';
		$this->load->view('master-layout', $this->data);

	}


	public function fbLogin(){

		$user = $this->facebook->get_user();
		$this->authentication->validate_fb( $user );

	}

}