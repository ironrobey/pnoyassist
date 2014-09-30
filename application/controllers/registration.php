<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct(){

		parent::__construct();

		if( $this->session->userdata('login_data') ){
			redirect( '/' );
		}

		$params = array('redirect_url'=>'registration/fbregistration');
		$this->load->library('facebook',$params);

		$this->data['headerData']['css'][] 		= 'css/font-awesome.min.css';
		$this->data['headerData']['css'][] 		= 'css/validation.css';
		$this->data['footerData']['js'][] 		= 'template-js/registration.js';

	}

	public function index()
	{

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist - Registration';
		$this->data['headerData']['pageClass'] = 'loginpage';
		$this->data['pageData'][] = null;

		$this->data['pageView'] = 'registration';
		$this->load->view('master-layout', $this->data);
		
	}

	public function fbregistration(){

		$this->load->library('authentication');
		$this->load->model( 'm_common' );

		$user = $this->facebook->get_user();

		$primary = array();
		$meta = array();
		$referral = array();

		if( $this->m_auth->isExists( $user['email'] ) ){
			redirect('/registration/error');
			die();
		}

		$primary = array(
				'email'	=>$user['email'],
				'facebook_id'	=> $user['id'],
				'role'	=> 3
			);

		$user_id = $this->m_common->insert('pas_users', $primary);

		$meta = array(
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> 'firstname',
					'meta_value'=> $user['first_name']
				),
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> 'lastname',
					'meta_value'=> $user['last_name']
				),
			);

		$this->m_common->insert_batch('pas_usermetas', $meta);

		$checkUser = array( 'role' => $primary['role'], 'email' => $primary['email'], 'user_id' => $user_id );

		$return = $this->authentication->redirect_user( (object)$checkUser );

		redirect( $return );

	}

	public function error(){

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist - Registration';
		$this->data['headerData']['pageClass'] = 'loginpage';
		$this->data['pageData']['error'] = true;

		$this->data['pageView'] = 'registration';
		$this->load->view('master-layout', $this->data);

	}
}