<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->data['headerData']['css'][] 		= 'css/style.css';
		$this->data['footerData']['js'][] 		= 'js/custom.js';
		$this->data['footerData']['js'][] 		= 'js/forms.js';

	}

	public function index()
	{

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist- About Us';
		$this->data['pageData'][] = null;

		$this->data['pageView'] = 'about';
		$this->load->view('master-layout', $this->data);

	}

}