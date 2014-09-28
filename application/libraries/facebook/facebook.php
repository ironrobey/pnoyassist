<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( session_status() == PHP_SESSION_NONE ) {
  session_start();
}

require_once( APPPATH . 'libraries/facebook/Facebook/GraphObject.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/Entities/AccessToken.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/Entities/SignedRequest.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/GraphSessionInfo.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookSession.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookCurl.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookHttpable.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookCurlHttpClient.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookResponse.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookSDKException.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookRequestException.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookAuthorizationException.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookRequest.php' );
require_once( APPPATH . 'libraries/facebook/Facebook/FacebookRedirectLoginHelper.php' );

use Facebook\GraphSessionInfo;
use Facebook\FacebookSession;
use Facebook\FacebookCurl;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;

use Facebook\Entities\AccessToken;
use Facebook\Entities\SignedRequest;

use Facebook\FacebookResponse;
use Facebook\FacebookAuthorizationException;
use Facebook\FacebookRequestException;
use Facebook\FacebookRequest;
use Facebook\FacebookSDKException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphObject;

class Facebook{

	public $ci;
	public $helper;
	public $session;

	public function __construct($params) {
		$this->ci =& get_instance();

		FacebookSession::setDefaultApplication( '909628655732665', '9bd1102f38fd71ef0cb056c4f6e90eb5' );

		$this->helper = new FacebookRedirectLoginHelper( site_url( $params['redirect_url'] ) );

		if ( $this->ci->session->userdata('fb_token') ) {
			$this->session = new FacebookSession( $this->ci->session->userdata('fb_token') );

			try {
				if ( ! $this->session->validate() ) {
					$this->session = false;
				}
			} catch ( Exception $e ) {

				$this->session = false;
			}

		} else {

			try {
				$this->session = $this->helper->getSessionFromRedirect();
			} catch(FacebookRequestException $ex) {
				// var_dump($ex);
			} catch(\Exception $ex) {
				// var_dump($ex);
			}

		}


		if ( $this->session ) {

			$this->ci->session->set_userdata( 'fb_token', $this->session->getToken() );

			$this->session = new FacebookSession( $this->session->getToken() );

		}

	} 

	public function get_login_url() {
		return $this->helper->getLoginUrl( array( 'email' ) );
	} 

	public function get_logout_url() {
		if ( $this->session ) {
			return $this->helper->getLogoutUrl( $this->session, site_url( 'logout' ) );
		}
		return false;
	}

	public function get_user() {

		if ( $this->session ) {

			try {
				$request = (new FacebookRequest( $this->session, 'GET', '/me' ))->execute();

				$user = $request->getGraphObject()->asArray();

				return $user;
				
			} catch(FacebookRequestException $e) {
				return false;

				// echo "Exception occured, code: " . $e->getCode();
				// echo " with message: " . $e->getMessage();
			}
		} 
	}

	public function get_image(){

		if( $this->session ){

			$request = (new FacebookRequest( $this->session, 'GET', '/me/picture?type=large&redirect=false' ))->execute();
			 
			return $request->getGraphObject()->asArray();

		}

	}
}