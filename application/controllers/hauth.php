<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* @property hybridauthlib $hybridauthlib */
@include_once( APPPATH . 'controllers/Front_Controller.php');
class Hauth extends Front_Controller {

	public function __construct()
	{
		// Constructor to auto-load HybridAuthLib
		parent::__construct();
		$this->load->library('HybridAuthLib');
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->model('customer_model'); 
	}

	public function index()
	{
		// Send to the view all permitted services as a user profile if authenticated
		$login_data['providers'] = $this->hybridauthlib->getProviders();
		foreach($login_data['providers'] as $provider=>$d) {
			if ($d['connected'] == 1) {
				$login_data['providers'][$provider]['user_profile'] = $this->hybridauthlib->authenticate($provider)->getUserProfile();
			}
		}
		//echo '<pre>';print_r($login_data);exit;
		
			
		$this->load->view('content/home', $login_data);
	
	}

	public function login($provider)
	{
		
		
		$linklogin=$this->uri->segment('2');
		$link=$this->uri->segment('3');
		//print_r($link);exit;
		if(isset($link) && $link=='LinkedIn' && $linklogin=='login'){
			//redirect('customer');
			
		}
		log_message('debug', "controllers.HAuth.login($provider) called");

		try
		{
			log_message('debug', 'controllers.HAuth.login: loading HybridAuthLib');
			$this->load->library('HybridAuthLib');
			if ($this->hybridauthlib->providerEnabled($provider))
			{
				log_message('debug', "controllers.HAuth.login: service $provider enabled, trying to authenticate.");
				$service = $this->hybridauthlib->authenticate($provider);
				
				//echo '<pre>';print_r($service);exit;

				if ($service->isUserConnected())
				{
					log_message('debug', 'controller.HAuth.login: user authenticated.');

					$users = $service->getUserProfile();
						 if(isset($users->email) && $users->email!=''){
							$emailcheck = $this->customer_model->email_check($users->email);
							if(count($emailcheck)==0){
								
									$fbdetails=array(
										'cust_firstname'=>$users->firstName,	 	
										'cust_lastname'=>$users->lastName,
										'cust_email'=>$users->email,
										'address1'=>$users->region,
										'address2'=>$users->city,
										'role_id'=>1,
										'status'=>0,
										'create_at'=>date('Y-m-d H:i:s'),
										);
										$fbcustomerdetails = $this->customer_model->save_customer($fbdetails);
										if(count($fbcustomerdetails)>0){
											$fbgetdetails = $this->customer_model->get_customer_details($fbcustomerdetails);
											//echo '<pre>';print_r($fbgetdetails);exit;
											redirect( 'customer/password/'.base64_encode($fbgetdetails['customer_id']).'/'.base64_encode($fbgetdetails['cust_email']).'/'.base64_encode('fb')); 

										}
								
								}else{
									$this->hybridauthlib->logoutAllProviders();
									//$this->session->sess_destroy();			
									$this->session->set_flashdata('loginerror',"E-mail already exists.Please login with Your credentials");
									redirect('customer', 'refresh');	
								}
						}else{
								$this->hybridauthlib->logoutAllProviders();
								//$this->session->sess_destroy();
								$this->session->set_flashdata('loginerror',"Social logins unavailable please login with your own credentials");
								redirect('customer', 'refresh');						
							}

					
				}
				else // Cannot authenticate user
				{
					show_error('Cannot authenticate user');
				}
			}
			else // This service is not enabled.
			{
				log_message('error', 'controllers.HAuth.login: This provider is not enabled ('.$provider.')');
				show_404($_SERVER['REQUEST_URI']);
			}
		}
		catch(Exception $e)
		{
			$error = 'Unexpected error';
			switch($e->getCode())
			{
				case 0 : $error = 'Unspecified error.'; break;
				case 1 : $error = 'Hybriauth configuration error.'; break;
				case 2 : $error = 'Provider not properly configured.'; break;
				case 3 : $error = 'Unknown or disabled provider.'; break;
				case 4 : $error = 'Missing provider application credentials.'; break;
				case 5 : log_message('debug', 'controllers.HAuth.login: Authentification failed. The user has canceled the authentication or the provider refused the connection.');
				         //redirect();
				         if (isset($service))
				         {
				         	log_message('debug', 'controllers.HAuth.login: logging out from service.');
				         	$service->logout();
				         }
				         show_error('User has cancelled the authentication or the provider refused the connection.');
				         break;
				case 6 : $error = 'User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.';
				         break;
				case 7 : $error = 'User not connected to the provider.';
				         break;
			}

			if (isset($service))
			{
				$service->logout();
			}

			log_message('error', 'controllers.HAuth.login: '.$error);
			show_error('Error authenticating user.');
		}
	}

	public function endpoint()
	{

		//redirect('customer');
		log_message('debug', 'controllers.HAuth.endpoint called.');
		log_message('info', 'controllers.HAuth.endpoint: $_REQUEST: '.print_r($_REQUEST, TRUE));

		if ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			log_message('debug', 'controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.');
			$_GET = $_REQUEST;
		}

		log_message('debug', 'controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.');
		require_once APPPATH.'/third_party/hybridauth/index.php';

	}

	function logout(){
		$this->hybridauthlib->logoutAllProviders();
		$this->session->sess_destroy();
		redirect('hauth');
	}
}

/* End of file hauth.php */
/* Location: ./application/controllers/hauth.php */
