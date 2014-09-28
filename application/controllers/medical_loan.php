<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medical_loan extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->data['headerData']['css'][] 		= 'css/font-awesome.min.css';
		$this->data['headerData']['css'][] 		= 'css/style.css';
		$this->data['footerData']['js'][] 		= 'js/jquery-1.10.2.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery-migrate-1.2.1.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery-ui-1.10.3.min.js';
		$this->data['headerData']['js'][] 		= 'js/bootstrap.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.jgrowl.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.alerts.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.slimscroll.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.cookies.js';
		$this->data['footerData']['js'][] 		= 'prettify/prettify.js';

		$this->data['footerData']['js'][] 		= 'js/jquery.autogrow-textarea.js';
		$this->data['footerData']['js'][] 		= 'js/bootstrap-timepicker.min.js';

		$this->data['footerData']['js'][] 		= 'js/custom.js';
		$this->data['footerData']['js'][] 		= 'js/elements.js';
		
	}

	public function index()
	{

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist - Medical Loan';
		$this->data['pageData'][] = null;

		$this->data['pageView'] = 'medical-loan';
		$this->load->view('master-layout', $this->data);

	}

}