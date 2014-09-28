<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->data['headerData']['css'][] 		= 'css/style.css';
		$this->data['footerData']['js'][] 		= 'js/jquery.tagsinput.min.js';
		$this->data['footerData']['js'][] 		= 'js/charCount.js';
		$this->data['footerData']['js'][] 		= 'js/chosen.jquery.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.autogrow-textarea.js';
		$this->data['footerData']['js'][] 		= 'js/bootstrap-timepicker.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.cookies.js';
		$this->data['footerData']['js'][] 		= 'js/custom.js';
		$this->data['footerData']['js'][] 		= 'js/forms.js';

	}

	public function index()
	{

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist';
		$this->data['pageData'][] = null;

		$this->data['pageView'] = 'homepage';
		$this->load->view('master-layout', $this->data);

	}

}