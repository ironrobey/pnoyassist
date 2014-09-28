<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->authentication->validate_user();
		$sess_login = $this->session->userdata('login_data');

		if( in_array ( $sess_login['role'], array( 1, 2 ) ) ){
			redirect( '/unauthorised' );
		}

		$this->authentication->set_userMetas( $this->m_auth->getUser( $sess_login['session'] ) );

		$this->data['headerData']['css'][] 		= 'css/font-awesome.min.css';
		$this->data['footerData']['js'][] 		= 'js/jquery.cookies.js';
		$this->data['footerData']['js'][] 		= 'js/custom.js';
		

		$this->load->model( array( 'm_auth','m_common' ) );

	}

	public function index()
	{

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Members';
		$this->data['pageData'][] 				= null;
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		
		$this->data['footerData']['js'][] 		= 'js/jquery.validate.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.tagsinput.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.autogrow-textarea.js';
		$this->data['footerData']['js'][] 		= 'template-js/members.js';

		$this->data['pageView'] = 'dashboard/dashboard';
		$this->load->view('master-layout', $this->data);
	}

	public function profile(){

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Members';

		$this->data['headerData']['css'][] 		= 'plugins/file-upload/css/jquery.fileupload.css';
		$this->data['headerData']['css'][] 		= 'plugins/shadowbox/shadowbox.css';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		$this->data['footerData']['js'][] 		= 'plugins/shadowbox/shadowbox.js';
		
		$this->data['footerData']['js'][] 		= 'js/jquery.validate.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.tagsinput.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.autogrow-textarea.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/vendor/jquery.ui.widget.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/jquery.iframe-transport.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/jquery.fileupload.js';
		
		$this->data['footerData']['js'][] 		= 'js/charCount.js';
		$this->data['footerData']['js'][] 		= 'js/chosen.jquery.min.js';
		$this->data['footerData']['js'][] 		= 'js/bootstrap-timepicker.min.js';
		$this->data['footerData']['js'][] 		= 'js/elements.js';
		$this->data['footerData']['js'][] 		= 'js/forms.js';
		$this->data['footerData']['js'][] 		= 'template-js/profile.js';

		$session = $this->session->userdata('login_data');

		$this->data['pageData']['profile'] 		= $this->m_common->getProfile( $session['session'] );
		$this->data['pageData']['metas'] 		= $this->m_common->getMetas( $this->data['pageData']['profile']->user_id,'pas_usermetas','user_id' );

		$this->data['pageView'] = 'dashboard/profile';
		$this->load->view('master-layout', $this->data);

	}

	public function loans(){

		$this->load->model('m_members');

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Members';

		$this->data['headerData']['css'][] 		= 'plugins/file-upload/css/jquery.fileupload.css';
		$this->data['headerData']['css'][] 		= 'plugins/shadowbox/shadowbox.css';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		$this->data['footerData']['js'][] 		= 'plugins/shadowbox/shadowbox.js';
		
		$this->data['footerData']['js'][] 		= 'js/jquery.validate.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.tagsinput.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.autogrow-textarea.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/vendor/jquery.ui.widget.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/jquery.iframe-transport.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/jquery.fileupload.js';
		
		$this->data['footerData']['js'][] 		= 'js/charCount.js';
		$this->data['footerData']['js'][] 		= 'js/chosen.jquery.min.js';
		$this->data['footerData']['js'][] 		= 'js/bootstrap-timepicker.min.js';
		$this->data['footerData']['js'][] 		= 'js/elements.js';
		$this->data['footerData']['js'][] 		= 'js/forms.js';
		$this->data['footerData']['js'][] 		= 'template-js/loans.js';

		$session = $this->session->userdata('login_data');

		$this->data['pageData']['profile'] 		= $this->m_common->getProfile( $session['session'] );
		$this->data['pageData']['comaker'] 		= $this->m_common->getBorrower( $session['user_id'] );
		$this->data['pageData']['loan_application'] = $this->m_members->loan_application( $session['user_id'] );

		$this->data['pageView'] = 'dashboard/loans';
		$this->load->view('master-layout', $this->data);

	}

	public function coborrower(){

		$this->load->model('m_members');

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Members';

		$this->data['headerData']['css'][] 		= 'plugins/file-upload/css/jquery.fileupload.css';
		$this->data['headerData']['css'][] 		= 'plugins/shadowbox/shadowbox.css';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		$this->data['footerData']['js'][] 		= 'plugins/shadowbox/shadowbox.js';
		
		$this->data['footerData']['js'][] 		= 'js/jquery.validate.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.tagsinput.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.autogrow-textarea.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/vendor/jquery.ui.widget.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/jquery.iframe-transport.js';
		$this->data['footerData']['js'][] 		= 'plugins/file-upload/js/jquery.fileupload.js';
		
		$this->data['footerData']['js'][] 		= 'js/charCount.js';
		$this->data['footerData']['js'][] 		= 'js/chosen.jquery.min.js';
		$this->data['footerData']['js'][] 		= 'js/bootstrap-timepicker.min.js';
		$this->data['footerData']['js'][] 		= 'js/elements.js';
		$this->data['footerData']['js'][] 		= 'js/forms.js';
		$this->data['footerData']['js'][] 		= 'template-js/loans.js';

		$session = $this->session->userdata('login_data');

		$this->data['pageData']['profile'] 		= $this->m_common->getProfile( $session['session'] );
		$this->data['pageData']['metas'] 		= $this->m_common->getMetas( $this->data['pageData']['profile']->user_id,'pas_usermetas','user_id' );

		$this->data['pageView'] = 'dashboard/coborrower';
		$this->load->view('master-layout', $this->data);

	}
}