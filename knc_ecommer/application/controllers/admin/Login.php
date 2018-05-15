<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct() {

		parent::__construct();
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->model('admin/login_model');
		
}


 public function index() {
	 $seller_id=$this->session->userdata('seller_id');
		if($seller_id!=''){
			redirect('seller/dashboard');
		}
		if($this->session->userdata('userdetails')){
		$customerdetails=$this->session->userdata('userdetails');
		if($customerdetails['role_id']==1){
			redirect('');
		}else if($customerdetails['role_id']==5){
			redirect('inventory/dashboard');
		}else if($customerdetails['role_id']==2){
			redirect('admin/dashboard');
		}else if($customerdetails['role_id']==6){
			redirect('deliveryboy/dashboard');
		}
	}

 $this->load->view('admin/login'); 
  


  }

public function loginpost()

{

       $post = $this->input->post();
	    $this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
		if ($this->form_validation->run() == FALSE) {
		$data['change_errors'] = validation_errors();
		$this->load->view('admin/login');
		}else{
			 $result   = $this->login_model->authenticate($post['email'],$post['password']);
			 if(count($result)>0){				 
				 $data = array(
				'admin_id'    => $result['customer_id'],
				'admin_email' => $result['cust_email'],
				'loggedin'   => TRUE,
				);
				$this->session->set_userdata($data);
				$this->session->set_userdata('userdetails',$result);
				if( $result['role_id']==2){
				redirect('admin/dashboard');	
				}else if($result['role_id']==5){
					redirect('inventory/dashboard');
				}else if($result['role_id']==6){
					redirect('deliveryboy/dashboard');
				}
				 
			}else{
				$this->session->set_flashdata('loginerror',"Invalid Email Address or Password!");
				redirect('admin/login');
			}
			
		}
}
public function logout() {
	$data = array(
	'admin_id'        => '',
	'admin_name'  => '',
	'user_email'     => '',
	'seller_id'        => '',
	'seller_name'  => '',
	'seller_email'     => '',
	'loggedin'  => FALSE,
	);
	
	$userinfo = $this->session->userdata('userdetails');
	$this->session->set_userdata($data);
	$this->session->unset_userdata($userinfo);
	$this->session->sess_destroy('userdetails');
	$this->session->unset_userdata('userdetails');
	$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	$this->output->set_header("Pragma: no-cache");
	$this->session->sess_destroy();	
	$this->session->unset_userdata($userinfo);
	$this->session->unset_userdata($beforecart);
	$this->session->unset_userdata('location_area');
	redirect('admin/login');
 }


public function forgot()
{
$this->load->view('admin/forgot_view');

}

public function forgotpassword()
{		
	$post=$this->input->post();
	//echo '<pre>';print_r($post);exit;
	$email=$post['emailaddress'];
	$users = $this->login_model->forgot_password($email);
	//echo '<pre>';print_r($users);exit;
	if(count($users)>0)
	{
		$this->load->library('email');
		$this->email->from('admin@cartinhours.com', 'CartInHours');
		$this->email->to($email);
		$this->email->subject('CartInHours - Forgot Password');
		$html = "Click this link to reset your password. ".site_url('admin/login/changepwd?code='.base64_encode($email).'__'.base64_encode($users['customer_id']));
		//echo $html;exit;
		$this->email->message($html);
		if($this->email->send())
		{	
		$this->session->set_flashdata('success','Check Your Email to reset your password!');
		redirect('admin/login');
		}else{
		$this->session->set_flashdata('loginerror','sending email from localhost not working');
		redirect('admin/login');
		}			
	}else{
		
		$this->session->set_flashdata('error','The email you entered is not a registered email. Please try again. ');
		redirect('admin/login/forgot');
	}
	

	}

	public function changepwd(){
		
		$code= $_GET['code'];
		$arr = explode('__',$code);
		$data['email'] = base64_decode($arr[0]);
		$data['userid'] = base64_decode($arr[1]);
		// echo '<pre>';print_r($data);exit;
		$this->load->view('admin/changepwd_view',$data);
	 }
	
public function changepassword()
{
	
	
	$reset_pass = $this->input->post();
	//echo '<pre>';print_r($reset_pass);exit;
		if(isset($reset_pass['npassword']) && $reset_pass['cpassword'] !='' )
		{
			if(!empty($reset_pass['npassword']) && $reset_pass['npassword']== $reset_pass['cpassword'])
			{
				$this->load->model('users_model');
				$users = $this->login_model->update_password($reset_pass);
				if(count($users)>0)
				{
					$this->session->set_flashdata("success","Your password changed successfully. please login and continue");
					redirect('admin/login');
				}
			}
			else
			{
				$this->session->set_flashdata("error","New Password and confirm password are Not matched!");
				redirect('admin/login/changepwd?code='.base64_encode($reset_pass['email']).'__'.base64_encode($reset_pass['userid']));
			}
		}else{
			
			$this->session->set_flashdata("error","Please enter Passwords and Confirm password");
				redirect('admin/login/changepwd?code='.base64_encode($reset_pass['email']).'__'.base64_encode($reset_pass['userid']));
				
		}
	
	
	
}	
	
	
	public function change() 
{
 $z=$this->uri->segment('4');
 $dec_username=str_replace(array('-', '_', '~'), array('+', '/', '='), $z);
 $db_password =$this->encrypt->decode($dec_username);
$fixed_pw = $this->input->post('npassword');
     $update = $this->db->query("Update admin_users SET admin_password='$fixed_pw' WHERE admin_email='$db_password '")or die(mysql_error()); 
if($update)
   
$this->session->set_flashdata('msg1', '<div class="alert alert-success" style="color: #7BAE52;">
<strong>Your Password Updated! Please <a href="'.base_url().'admin/login">Login</a> to Continue</strong></div>');
//return redirect(base_url('home/changepwd_view'));
return false; 

	

}
    



















}