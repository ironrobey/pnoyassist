<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->authentication->validate_user();
		$sess_login = $this->session->userdata('login_data');

		if( in_array ( $sess_login['role'], array( 2, 3 ) ) ){
			redirect( '/unauthorised' );
		}
		
		$this->authentication->set_userMetas( $this->m_auth->getUser( $sess_login['session'] ) );

		$this->data['headerData']['css'][] 		= 'css/font-awesome.min.css';
		$this->data['footerData']['js'][] 		= 'js/jquery.cookies.js';
		$this->data['footerData']['js'][] 		= 'js/custom.js';

		$this->load->model( 'm_common' );

	}

	public function index()
	{

		$this->load->model('m_admin');

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Admin';
		$this->data['pageData']['applications'] = $this->m_admin->getApplications();
		$this->data['footerData'][] 			= null;

		$this->data['pageView'] = 'dashboard/dashboard';
		$this->load->view('master-layout', $this->data);
	}

	public function profile(){

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Admin';

		$this->data['headerData']['css'][] 		= 'plugins/file-upload/css/jquery.fileupload.css';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		
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

	public function users(){

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Admin';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		
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

		$session = $this->session->userdata('login_data');

		$this->data['pageData']['users'] 		= $this->m_common->getUsers();

		$this->data['pageView'] = 'dashboard/tables';
		$this->load->view('master-layout', $this->data);

	}

	public function pending(){

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Admin';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		
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

		$session = $this->session->userdata('login_data');

		$this->data['pageData']['users'] 		= $this->m_common->getPending();

		$this->data['pageView'] = 'dashboard/tables2';
		$this->load->view('master-layout', $this->data);

	}

	public function borrowers(){

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Admin';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		
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

		$session = $this->session->userdata('login_data');

		$this->data['pageData']['users'] 		= $this->m_common->getBorrowers();

		$this->data['pageView'] = 'dashboard/tables2';
		$this->load->view('master-layout', $this->data);

	}

	public function view(){

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Admin';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		
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
		$this->data['footerData']['js'][] 		= 'template-js/admin-user-profile.js';

		$session = $this->session->userdata('login_data');

		$user_id = $this->uri->segment(3);

		$this->data['pageData']['user'] 		= $this->m_common->getProfile( $user_id, 'user_id' );

		$this->data['pageView'] = 'dashboard/view';
		$this->load->view('master-layout', $this->data);

	}

	public function loan(){

		$this->load->model('m_admin');

		$this->data['headerData']['pageTitle'] 	= 'Pinoy Assist - Admin';

		$this->data['headerData']['css'][] 		= 'plugins/shadowbox/shadowbox.css';
		
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		$this->data['footerData']['js'][] 		= 'plugins/shadowbox/shadowbox.js';
		
		$this->data['footerData']['js'][] 		= 'js/jquery.validate.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.tagsinput.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.autogrow-textarea.js';
		
		$this->data['footerData']['js'][] 		= 'js/charCount.js';
		$this->data['footerData']['js'][] 		= 'js/chosen.jquery.min.js';
		$this->data['footerData']['js'][] 		= 'js/bootstrap-timepicker.min.js';
		$this->data['footerData']['js'][] 		= 'js/elements.js';
		$this->data['footerData']['js'][] 		= 'js/forms.js';
		$this->data['footerData']['js'][] 		= 'template-js/admin-user-profile.js';

		$session = $this->session->userdata('login_data');

		$application_id = $this->uri->segment(3);

		$this->data['pageData']['application'] = $this->m_admin->getApplication( $application_id );

		$this->data['pageData']['member']	= $this->m_admin->getMember( $this->data['pageData']['application']->user_id );

		$this->data['pageView'] = 'dashboard/loan-details';
		$this->load->view('master-layout', $this->data);

	}

}