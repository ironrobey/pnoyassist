<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

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

class facebook{

	public $ci;
	public $session;
	public $helper;
	public $appID = "909628655732665";
	public $appPassword = "9bd1102f38fd71ef0cb056c4f6e90eb5";
	public $redirect = "http://pinoyassist.tektile.com.ph/login/fbLogin";

	public function __construct(){

		$this->ci =& get_instance();

		FacebookSession::setDefaultApplication( $this->appID, $this->appPassword );
		$this->helper = new FacebookRedirectLoginHelper( $this->redirect );

		try {
			$this->session = $this->helper->getSessionFromRedirect();
		} catch(FacebookRequestException $ex) {
			// When Facebook returns an error
		} catch(\Exception $ex) {
			// When validation fails or other local issues
		}

		if ( $this->session ) {

			$this->ci->session->set_userdata( 'fb_token', $this->session->getToken() );

			$this->session = new FacebookSession( $this->session->getToken() );

		}

	}

	public function get_login_url() {
		return $this->helper->getLoginUrl( array( 'email' ) );
	} 

	public function get_user() {

		if ( $this->session ) {
			try {
				$request = (new FacebookRequest( $this->session, 'GET', '/me' ))->execute();

				$user = $request->getGraphObject()->asArray();

				return $user;
				
			} catch(FacebookRequestException $e) {
				// return false;

				echo "Exception occured, code: " . $e->getCode();
				echo " with message: " . $e->getMessage();
			}
		}
	}

}