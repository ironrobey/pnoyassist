<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model( 'm_common' );

	}

	public function savePassword(){

		extract($_POST);

		$data = array(
				'password'	=> sha1(md5($password.".robey") )
			);

		if( $this->m_common->update( 'pas_users',$data, 'session', $password_key ) ){
			$return['msg'] = 'You have successfully changed your password';
			$return['alert'] = 'success';
		} else {
			$return['msg'] = 'An error has occurred while trying change password.';
			$return['alert'] = 'alert';
		}

		echo json_encode( $return );

	}

	public function forgotPassword(){

		extract($_POST);

		if( $this->m_common->isExists('email', $email, 'pas_users') ){

			$session = sha1(md5($email.date('Ymd')) );

			$data = array(
					'session'	=> $session
				);
			$this->m_common->update( 'pas_users',$data, 'email', $email );

			$message = "Dear Customer, \n\n";
			$message .= "Please click on the link below to change your password. \n\n";
			$message .= site_url( 'login/change_password/'.$session );

			$this->sendEmail( 'admin@pinoyassist.com', $email, 'PinoyAssist Admin', 'Change Password', $message );

			$return['msg'] = "An email was sent to change password.";
			$return['alert'] = 'success';

		} else {

			$return['msg'] = "Email doesn't exists in our database.";
			$return['alert'] = 'danger';

		}

		echo json_encode( $return );

	}

	public function linkAccounts(){

		extract($_POST);

		if( $this->m_common->getMetaKeyId($borrower_key) ){

			$data = array(
					'comaker'	=> $comaker->user_id,
				);
			$result = $this->m_common->update( 'pas_loan_application',$data,'loan_application_id',$application_id );

		} else {			

			$result = false;
			
		}


		echo json_encode( $result );
	}

	public function sendKey(){

		extract($_POST);

		$subject = "PinoyAssist Co-borrower Key";
		$message = "Dear {$name},\n\n";
		$message .= "\n\n";
		$message .= "Co-maker Key: ".$key."\n\n";
		$message .= "Message: You have been sent a comaker key.";

		if( $this->sendEmail( $comaker, $email, $name, $subject, $message ) ){
			echo json_encode(true);
		} else {
			echo json_encode(false);
		}

	}

	public function ajaxGenerateRandomKey(){

		extract( $_POST );

    	$random = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);

    	$data = array(
    			'user_id'	=> $user_id,
    			'meta_key'	=> 'borrower_key',
    			'meta_value'=> $random
    		);
		if( $this->m_common->checkMeta($user_id,'borrower_key','user_id','pas_usermetas') ){
			$this->m_common->deleteMeta($user_id,'borrower_key','user_id','pas_usermetas');
		}

    	$this->m_common->insert('pas_usermetas',$data);

    	echo json_encode($random);

	}

	public function ajaxSubmitApplication(){

		extract($_POST);

		$data = array(
				'status'	=> 1
			);

		$this->m_common->update('pas_loan_application',$data,'loan_application_id', $application_id);

		echo json_encode($_POST);

	}

	public function ajaxSaveLoanMeta(){
		
		extract($_POST);

		$user_id = $this->session->userdata('login_data')['user_id'];

		foreach( $_POST as $k => $v ){
			if( $v != '' || $v != 0 ){
				$key = str_replace('_meta', '', $k);
				if( $this->m_common->checkMeta($user_id,$key,'user_id','pas_usermetas') ){
					$this->m_common->deleteMeta($user_id,$key,'user_id','pas_usermetas');
				}
				$return[] = array(
						'user_id'	=> $user_id,
						'meta_key'	=> $key,
						'meta_value'=> $v
					);
			}
		}

		$this->m_common->insert_batch('pas_usermetas', $return);

		echo json_encode($_POST);
	}

	public function ajaxLoanApplication(){

		extract($_POST);

		$user_id = $this->session->userdata('login_data')['user_id'];

		$data = array(
				'user_id'	=> $user_id,
				'purpose'	=> $purpose,
				'desired_loan_amount'=> $loan_amount,
				'comaker'	=> $comaker
			);

		if( $application_id ){

			$loan_application_id = $application_id;
			$this->m_common->update('pas_loan_application', $data, 'loan_application_id', $application_id);		

			if($other_purpose_meta != '' && $purpose =='Others'){

				$purpose_data = array(
						'loan_application_id'	=> $loan_application_id,
						'meta_key'	=> 'other_purpose',
						'meta_value'=> $other_purpose_meta
					);	

				if( $this->m_common->checkMeta($loan_application_id,'other_purpose','loan_application_id','pas_loanmeta') ){
					$this->m_common->deleteMeta($loan_application_id,'other_purpose','loan_application_id','pas_loanmeta');
				}

				$this->m_common->insert('pas_loanmeta', $purpose_data);
				
			}

		} else {
			
			$loan_application_id = $this->m_common->insert('pas_loan_application', $data);			
		// }

		// if($other_purpose_meta != '' && $purpose =='Others'){

		// 	$purpose_data = array(
		// 			'loan_application_id'	=> $loan_application_id,
		// 			'meta_key'	=> 'other_purpose',
		// 			'meta_value'=> $other_purpose_meta
		// 		);	

		// 	$this->m_common->insert('pas_loanmeta', $purpose_data);
			
		// }

		// if($other_desired_meta != '' && $loan_amount == 'others'){

		// 	$desired_data = array(
		// 			'loan_application_id'	=> $loan_application_id,
		// 			'meta_key'	=> 'other_desired',
		// 			'meta_value'=> $other_desired_meta
		// 		);	

		// 	$this->m_common->insert('pas_loanmeta', $desired_data);
			
		}

		echo json_encode($loan_application_id);

	}

	public function ajaxSaveOthers(){

		extract($_POST);

		$return = array();
		$user_id = $this->session->userdata('login_data')['user_id'];

		$data = array(
				'user_id'	=> $user_id,
				'firstname'	=> $firstname,
				'lastname'	=> $lastname,
				'middlename'=> $middlename,
				'relationship'	=> $relationship
			);

		$other_id = $this->m_common->insert( 'pas_others', $data );

		unset($_POST['firstname']);
		unset($_POST['lastname']);
		unset($_POST['middlename']);
		unset($_POST['relationship']);

		foreach( $_POST as $k => $v ){

			if( $v != '' || $v != 0 ){
				$key = str_replace('_meta', '', $k);

				if( $this->m_common->checkMeta($other_id,$key,'other_id','pas_othersmeta') ){
					$this->m_common->deleteMeta($other_id,$key,'other_id','pas_othersmeta');
				}

				if($key=='payroll'||$key=='birthday'){
					$str = explode('/', $v);
					$v = $str[2].$str[1].$str[0];
				}
				$return[] = array(
						'other_id'	=> $other_id,
						'meta_key'	=> $key,
						'meta_value'=> $v
					);
			}

		}

		$this->m_common->insert_batch('pas_othersmeta', $return);

		echo json_encode($other_id);

	}

	public function ajaxSaveMeta(){

		extract($_POST);

		$user_id = $this->session->userdata('login_data')['user_id'];
		$return = array();

		foreach( $_POST as $k => $v ){

			if( $v != '' ){
				$key = str_replace('_meta', '', $k);

				if( $this->m_common->checkMeta($user_id,$key,'user_id','pas_usermetas') ){
					$this->m_common->deleteMeta($user_id,$key,'user_id','pas_usermetas');
				}

				if($key=='payroll'){
					$str = explode('/', $v);
					$v = $str[2].$str[1].$str[0];
				}
				$return[] = array(
						'user_id'	=> $user_id,
						'meta_key'	=> $key,
						'meta_value'=> $v
					);
			}

		}

		$this->m_common->insert_batch('pas_usermetas', $return);

		echo json_encode($return);
	}

	public function ajaxMakePublic(){

		extract( $_POST );
		$user_id = $this->session->userdata('login_data')['user_id'];

		$data = array(
				'user_id'	=> $user_id,
				'meta_key'	=> 'public',
				'meta_value'=> $value
			);

		$public = $this->m_common->getPublic($user_id);

		if( isset( $public->meta_value ) ){

			$insert_id = $this->m_common->deletePublic( $user_id );

		} else {

			$insert_id = $this->m_common->insert( 'pas_usermetas', $data );

		}

		if( $insert_id ){
			$true = true;
		} else {
			$true = false;
		}

		echo json_encode($public);

	}

	public function deactivateAccount(){

		extract($_POST);

		$user_id = ( isset($user_id) ? $user_id : $this->session->userdata('login_data')['user_id'] );

		$data = array(
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> "reason_for_leaving",
					'meta_value'=> $radio
					),
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> "reason_for_leaving_text",
					'meta_value'=> $textarea
					),
			);

		$insert_id = $this->m_common->insert_batch('pas_usermetas', $data);

		if( $insert_id ){

			$update_data = array(
					'active'	=> 1
				);

			$this->m_common->update('pas_users', $update_data, 'user_id', $user_id);

			$true = true;

		} else {

			$true = false;

		}

		echo json_encode( $true );

	}

	public function sendContact(){

		extract($_POST);

		$subject = "PinoyAssist Contact Us";
		$message = "Dear Admin,\n\n";
		$message = "\n\n";
		$message .= "Message: ".$contactMessage."\n\n";
		$message .= "Phone Number: ".$contactNumber."\n\n";

		if( $this->sendEmail( $contactEmail, 'pinoyassist@gmail.com', $contactName, $subject, $message ) ){

			$from = "pinoyassist@gmail.com";
			$name = 'pinoyassist';
			$to = $contactEmail;
			$html = 'Dear '.$name.",\n";
			$html .= "\n";
			$html .= "We have received your email submission, we will get back to you as soon as possible. Thank You!";

			$this->sendEmail( 'pinoyassist@gmail.com', $contactEmail, 'pinoyassist','PinoyAssist Contact Us', $html );
			echo json_encode(true);
		} else {
			echo json_encode(false);
		}

	}

	public function sendEmail( $from, $to, $name, $subject, $message ){

		$this->load->library( 'email' );

		$this->email->from($from, $name);
		$this->email->reply_to($from, $name);
		$this->email->to($to);
		$this->email->subject( $subject );
		$this->email->message($message);
		
		if( $this->email->send() ){
			return true;
		} else {
			return $this->email->print_debugger();
		}
	}

	public function getProfile(){

		$this->load->model( array( 'm_auth','m_members' ) );

		$session = $this->session->userdata('login_data');

		$return = new stdClass();

		$return->profile = $this->m_members->getProfile( $session['session'] );
		$return->metas = $this->m_members->getMetas( $return->profile->user_id, 'pas_usermetas','user_id' );

		echo json_encode($return);

	}

	public function uploadFile(){

		extract($_FILES);

		include dirname( $_SERVER['SCRIPT_FILENAME'] )."/assets/plugins/file-upload/server/php/UploadHandler.php";

		$options = array(
				'upload_dir'	=> dirname( $_SERVER['SCRIPT_FILENAME'] ).'/assets/uploads/',
				'upload_url'	=> site_url('assets/uploads/'),
			);

		$upload_handler = new UploadHandler( $options );

	}

	public function saveRequirements(){

		extract($_POST);

		$user_id = $this->session->userdata('login_data')['user_id'];

		$data = array(
				'user_id'	=> $user_id,
				'meta_key'	=> str_replace('_meta', '', $key),
				'meta_value'=>  $requirement
			);

		if( $this->m_common->checkMeta($user_id,$key,'user_id','pas_usermetas') ){
			$this->m_common->deleteMeta($user_id,$key,'user_id','pas_usermetas');
		}

		echo json_encode( $this->m_common->insert('pas_usermetas',$data) );

	}

	public function saveImage(){

		extract($_POST);

		$data = array(
				'user_id'	=> $this->session->userdata('login_data')['user_id'],
				'meta_key'	=> 'profile_image',
				'meta_value'=> $profile_image
			);

		echo json_encode( $this->m_common->insert('pas_usermetas',$data) );
	}

	public function changePassword(){

		extract($_POST);

		$data = array(
				'password' => sha1(md5($new_pass.".robey"))
			);

		$return = $this->m_common->update( 'pas_users',$data,'session',$this->session->userdata('login_data')['session'] );

		echo json_encode($this->session->userdata('login_data')['session']);

	}

	public function addRefProfile(){

		extract($_POST);

		$data = array(
				'user_id'	=> $this->session->userdata('login_data')['user_id'],
				'email'		=> $email,
				'phone'		=> $phone_number,
				'firstname'	=> $firstname,
				'lastname'	=> $lastname
			);	

		$referral_id = $this->m_common->insert('pas_referrals', $data);

		unset( $_POST['email'] );
		unset( $_POST['phone_number'] );
		unset( $_POST['firstname'] );
		unset( $_POST['lastname'] );

		foreach ($_POST as $key => $value) {
			if( $value != '' ){
				$key = str_replace('_meta', '', $key);
				if($key=='birthday'){
					$str = explode('/', $value);

					$value = $str[2].$str[1].$str[0];
				}
				$refdata[] = array(
						'referral_id'	=> $referral_id,
						'meta_key'	=> $key,
						'meta_value'=> $value
					);
			}
		}
		$return = $this->m_common->insert_batch('pas_refmetas',$refdata);

		echo json_encode($return);

	}

	public function updateRefProfile(){

		extract($_POST);

		$data = array();
		unset( $_POST['referral_id'] );

		foreach ($_POST as $key => $value) {
			if( $value != '' ){
				$key = str_replace('_meta', '', $key);
				if($key=='birthday'){
					$str = explode('/', $value);

					$value = $str[2].$str[1].$str[0];
				}
				$data[] = array(
						'referral_id'	=> $referral_id,
						'meta_key'	=> $key,
						'meta_value'=> $value
					);
			}
		}
		$this->m_common->delete('pas_refmetas','referral_id',$referral_id);
		$return = $this->m_common->insert_batch('pas_refmetas',$data);

		echo json_encode( $return );

	}

	public function updateProfile(){

		extract($_POST);

		$data = array();
		unset( $_POST['user_id'] );

		foreach ($_POST as $key => $value) {
			if( $value != '' ){
				$key = str_replace('_meta', '', $key);

				if( $this->m_common->checkMeta($user_id,$key,'user_id','pas_usermetas') ){
					$this->m_common->deleteMeta($user_id,$key,'user_id','pas_usermetas');
				}

				if($key=='birthday'){
					$str = explode('/', $value);

					$value = $str[2].$str[1].$str[0];
				}
				$data[] = array(
						'user_id'	=> $user_id,
						'meta_key'	=> $key,
						'meta_value'=> $value
					);
			}
		}
		// $this->m_common->delete('pas_usermetas','user_id',$user_id);
		$return = $this->m_common->insert_batch('pas_usermetas',$data);

		echo json_encode( $return );

	}

	public function login(){

		extract($_POST);

		$this->load->model( 'm_auth' );

		$checkUser = $this->m_auth->checkUser( $email,$password );

		$redirect = $this->authentication->redirect_user( $checkUser );

		echo json_encode($redirect);

	}

	public function register()
	{	
		$this->load->model( 'm_auth' );

		extract( $_POST );

		$primary = array();
		$meta = array();
		$referral = array();

		if( $this->m_auth->isExists($email) ){
			echo json_encode( 'exists' );
			die();
		}

		$primary = array(
				'email'	=>$email,
				'password' => sha1(md5($password.".robey")),
				'role'	=> 3
			);

		$user_id = $this->m_common->insert('pas_users', $primary);

		$meta = array(
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> 'firstname',
					'meta_value'=> $firstname_meta
				),
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> 'lastname',
					'meta_value'=> $lastname_meta
				),
				array(
					'user_id'	=> $user_id,
					'meta_key'	=> 'hear',
					'meta_value'=> $hear_meta
				)
			);

		$this->m_common->insert_batch('pas_usermetas', $meta);

		$name = $firstname_meta .' '. $lastname_meta;

		$this->sendReportEmail( $email,$name );

		$checkUser = $this->m_auth->checkUser( $email,$password );
		$redirect = $this->authentication->redirect_user( $checkUser );
		
		if( isset( $redirect_apply ) ){
			$redirect = $redirect.'/loans';
		}

		echo json_encode($redirect);
		
	}

	public function sendReportEmail($email,$name){

		$this->load->library( 'email' );

		$this->email->from('admin@pinoyassist.com', 'PinoyAssist Admin');
		$this->email->to($email);
		$this->email->subject( 'Successful Registration' );
		$html = 'Dear '.$name.",\n";
		$html .= "\n";
		$html .= "You have successfully registered to pinoy assist, thank you";

		$this->email->message($html);
		
		if( $this->email->send() ){
			return true;
		} else {
			return $this->email->print_debugger();
		}

	}

	public function facebookLogin(){

		$this->load->library('facebook');

		$return = $this->facebook->get_login_url();

		echo json_encode( $return );

	}

}