<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Authentication {

	public $ci;

	public function __construct(){
		
		$this->CI =& get_instance();

		$this->CI->load->model( 'm_auth' );

	}

	public function validate_fb( $user ){

		if( $user ){

			$return = $this->CI->m_auth->getUserViaFb( $user['id'] );

			if( $return != 'invalid' ){

				$url = $this->redirect_user( $return );	

			} else {

				redirect( site_url('registration/error') );

			}

			redirect( $url );
		} 

	}

	public function validate_user(){
		
		$see_login = $this->CI->session->userdata('login_data');

		if($see_login == FALSE){

			redirect('/');

		} else {

			if ( !is_object( $this->CI->m_auth->checkSession($see_login['session']) ) ) {

				redirect('/');

			}

		}

	}

	public function redirect_user( $checkUser ){

		if (is_object($checkUser)) {

			$sess = sha1(".robey".$checkUser->email.date('U'));

			$this->CI->m_auth->saveSession( $checkUser->user_id,$checkUser->role,$sess);

			switch( $checkUser->role ){

				case '1':
					$redirect = 'admin';
				break;

				case '2':
					$redirect = 'staff';
				break;

				default:
					$redirect = 'members';
				break;

			}

		} else {

			$redirect = 'error';

		}

		return $redirect;

	}

	public function set_userMetas( $userMetas ){

		$usermetas = array();
		foreach( $userMetas as $usermeta ){
			if( in_array( $usermeta->meta_key, array('firstname','lastname','profile_image','public') ) ){
				$usermetas[$usermeta->meta_key] = $usermeta->meta_value;
			}
		}

		$this->CI->session->set_userdata( $usermetas );

	}

	public function fbregistration( $user ){

		$this->CI->load->library( array( 'facebook', 'authentication' ) );
		$this->CI->load->model( 'm_common' );

		$primary = array();
		$meta = array();
		$referral = array();

		if( $this->CI->m_auth->isExists( $user['email'] ) ){

			die();

		} 

		$primary = array(
				'email'	=>$user['email'],
				'facebook_id'	=> $user['id'],
				'role'	=> 3
			);

		$user_id = $this->CI->m_common->insert('pas_users', $primary);

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
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> 'gender',
					'meta_value'=> $user['gender']
				),
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> 'profile_image',
					'meta_value'=> $this->CI->facebook->get_image()['url']
				)
			);

		$this->CI->m_common->insert_batch('pas_usermetas', $meta);

		$checkUser = array( 'role' => $primary['role'], 'email' => $primary['email'], 'user_id' => $user_id );

		$this->sendReportEmail($primary['email']);
		
		$return = $this->redirect_user( (object)$checkUser );

		$this->sendReportEmail( $primary['email'] );

		return $return;

	}

	public function sendReportEmail($email){

		$this->CI->load->library( 'email' );

		$config['protocol'] = 'smtp';
		$config['charset'] = 'utf-8';
		$config['smtp_timeout'] = 5;
		$config['smtp_host'] = 'smtp.mandrillapp.com';
		$config['smtp_port'] = 587;
		$config['smtp_user'] = 'mclordgt@gmail.com';
		$config['smtp_pass'] = '_i6eOUSiVA4L4qLnKtzLLA'; 	

		$this->CI->email->initialize($config);

		$this->CI->email->from('pinoyassist@gmail.com', 'pinoyassist');
		$this->CI->email->to($email);
		$this->CI->email->subject( 'Successful Registration' );
		$html = 'Dear User'.",\n";
		$html .= "\n";
		$html .= "You have successfully registered to pinoy assist, thank you";

		$this->CI->email->message($html);
		
		if( $this->CI->email->send() ){
			return true;
		} else {
			return $this->CI->email->print_debugger();
		}

	}

}