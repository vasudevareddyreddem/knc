<?php

defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/seller/Seller_adddetails.php');

class Adddetails extends Seller_adddetails{

	public function __construct() {
		parent::__construct();
		$this->load->model('seller/adddetails_model');
		$this->load->model('seller/products_model');
		$this->load->model('seller/sellercat_model');
		$this->load->model('seller/Personnel_details_model');
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
		$this->load->helper('security');
		$this->load->library(array('form_validation','session'));
	}

	 public function index() {
	 	if($this->session->userdata('seller_id'))
	 	{
		$data['sellerdata']=$this->adddetails_model->get_seller_data($this->session->userdata('seller_id'));		 
	// echo '<pre>';print_r($data);exit;
	  $this->load->view('seller/layouts/header');
	  $this->load->view('seller/adddetails/index',$data);
	}else{
		redirect('seller/login');
	}
	}
 
  //store 
	public function updatebasicdetails()
	{  
		
		$post=$this->input->post();
		//echo "<pre>";print_r($post);
		$editform=$this->adddetails_model->check_email_editing($this->session->userdata('seller_id'));
		//echo "<pre>";print_r($editform);exit;
		if($editform['seller_email']==$post['seller_email']){
			$data = array(

				'seller_id' => $this->session->userdata('seller_id'),
				'seller_name' => $post['seller_name'],
				'seller_email' => $post['seller_email'],
				//'seller_address' => $this->input->post('seller_address'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s')

				);
				$res=$this->adddetails_model->insertseller_basic($data);
				if(count($res)>0)
				{
				$this->session->set_flashdata('sucess','personal data successfully added');
				redirect('seller/adddetails/categories');
				}else{

				$this->session->set_flashdata('error','Some error are occured.');
				redirect('seller/adddetails/updatebasicdetails'); 
				}	
			
		}else{
				$checkemail=$this->adddetails_model->check_email_exits($post['seller_email']);
				if(count($checkemail)==''){
				$data = array(

				'seller_id' => $this->session->userdata('seller_id'),
				'seller_name' => $post['seller_name'],
				'seller_email' => $post['seller_email'],
				//'seller_address' => $this->input->post('seller_address'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s')

				);
				$res=$this->adddetails_model->insertseller_basic($data);
				if(count($res)>0)
				{
				$this->session->set_flashdata('sucess','personal data successfully added');
				redirect('seller/adddetails/categories');
				}else{

				$this->session->set_flashdata('error','Some error are occured.');
				redirect('seller/adddetails/updatebasicdetails'); 
				}

				}else{
				$this->session->set_flashdata('error','Email Id Aready Exits. Please use another Email Id');
				redirect('seller/adddetails'); 
				}
		}
		
			
		
	}

	public function categories() {	 
	if($this->session->userdata('seller_id'))
	 	{
		$data['getcat'] = $this->products_model->getcatdata();
		$this->load->view('seller/layouts/header');
		$this->load->view('seller/adddetails/sellercategory', $data);
		}else{
		redirect('seller/login');
	}
	}
	public function updateseeler_details()
	{  
			$post=$this->input->post();
		//echo "<pre>";print_r($post); exit;
			/*for add category purpose*/
			
			if($post['caregoryname']!=''){
			$categorys=$this->adddetails_model->get_oldcategoreis_seller_categories($this->session->userdata('seller_id'));
			
			foreach($categorys as $delcatid){
				
				$this->adddetails_model->delet_get_cat_seller_categories($delcatid['category_id']);
			}
			
			foreach($post['caregoryname'] as $decatid){
				
				if($decatid!=''){
					$addcat= array(
						'seller_id'=>$this->session->userdata('seller_id'),
						'category_name'=>$decatid,
						'status'=>0,
						'first_time'=>1,
						'ip_address'=>$this->input->ip_address(),
						'created_at'=>date('Y-m-d H:i:s'),
						'updated_at'=>date('Y-m-d H:i:s'),
						);
					//echo "<pre>";print_r($addcat); exit;
						$save_catrgore=$this->adddetails_model->save_catrgore($addcat);
					if(count($save_catrgore)>0 && $post['seller_cat']=='')
					{
					$this->session->set_flashdata('success','category details updated');
					return redirect('seller/adddetails/storedetails');
					}
						
						
				}
				//echo "<pre>";print_r($delcatid); 
			}
			
		}
			$result = array_unique($post['seller_cat']);
			$catresult=$this->Personnel_details_model->get_old_seller_categories($this->session->userdata('seller_id'));
			foreach($catresult as $delcats){
				
				$this->Personnel_details_model->delet_get_old_seller_categories($delcats['seller_cat_id']);
			}
			foreach($result as $subcats){
			$carname=$this->adddetails_model->get_categories_name($subcats);
			$data = array(
			'seller_id' => $this->session->userdata('seller_id'),
			'seller_category_id'=> $subcats,
			'category_name'=> $carname['category_name'],
			'ip_address'=>$this->input->ip_address(),
			'created_at'=> date('Y-m-d h:i:s'),
			'updated_at'=>  date('Y-m-d h:i:s'),
			);
			//echo "<pre>";print_r($data); exit;
			if($subcats!=''){
			$res=$this->adddetails_model->insertseller_cat($data);
			}
			
			}
			
			if(count($res)>0)
			{
			$this->session->set_flashdata('success','category details updated');
			return redirect('seller/adddetails/storedetails');
			}

		
			/*--------------*/
			


    }
	public function storedetails()
	{  
		if($this->session->userdata('seller_id'))
	 	{
		$this->load->view('seller/layouts/header');
		$data['selectareas']=$this->adddetails_model->get_seleted_areas();		 
		$data['select_areas']=$this->adddetails_model->get_seletedareas();
		$data['sellerdata']=$this->adddetails_model->get_seller_storedetails_data($this->session->userdata('seller_id'));		 
		$this->load->view('seller/adddetails/storedetails',$data);
		}else{
		redirect('seller/login');
	}
	}
	public function personaldetails()
	{  
		if($this->session->userdata('seller_id'))
	 	{
		$this->load->view('seller/layouts/header');
		$data['sellerdata']=$this->adddetails_model->get_seller_data($this->session->userdata('seller_id'));		 
		$this->load->view('seller/adddetails/personaldetails',$data);
	}else{
		redirect('seller/login');
	}
	}
	
	
	public function seller_storedetails()
	{  
		
		$post=$this->input->post();
		//echo '<pre>';print_r($_FILES);
		
		
		$seller_upload_file=$this->Personnel_details_model->get_upload_file($this->session->userdata('seller_id'));
		//echo '<pre>';print_r($seller_upload_file);
			if($_FILES['timimages']['name']!=''){
			$tinimg=$_FILES['timimages']['name'];
			move_uploaded_file($_FILES['timimages']['tmp_name'], "assets/sellerfile/" . $_FILES['timimages']['name']);

			}else{
			$tinimg=$seller_upload_file['tinvatimage'];
			}

			if($_FILES['tanimages']['name']!=''){
			$tanimg=$_FILES['tanimages']['name'];
			move_uploaded_file($_FILES['tanimages']['tmp_name'], "assets/sellerfile/" . $_FILES['tanimages']['name']);

			}else{
			$tanimg=$seller_upload_file['tanimage'];
			}
			if($_FILES['cstimag']['name']!=''){
			$cetimg=$_FILES['cstimag']['name'];
				move_uploaded_file($_FILES['cstimag']['tmp_name'], "assets/sellerfile/" . $_FILES['cstimag']['name']);

			}else{
			$cetimg=$seller_upload_file['cstimage'];
			}
			if($_FILES['gstimag']['name']!=''){
			$gstimg=$_FILES['gstimag']['name'];
				move_uploaded_file($_FILES['gstimag']['tmp_name'], "assets/sellerfile/" . $_FILES['gstimag']['name']);

			}else{
			$gstimg=$seller_upload_file['gstinimage'];
			}
			if(isset($post['other_shops_location']) && $post['other_shops_location']!=''){
			$location_name = $post['other_shops_location'];
			//echo '<pre>';print_r($location_name);exit;
			$lock_string = implode(",", $location_name);
			//echo '<pre>';print_r($lock_string);exit;
			$locations_list = explode(";",$lock_string);
			$location_array = array();
			foreach($locations_list as $store_locations)
			{
			    $location_array[] = array('other_shops_location' =>$store_locations);
			}
			
			}
		
		//echo '<pre>';print_r($location_array);exit;
			$data = array(
			'store_name' => $post['storename'], 
			'addrees1' => $post['address1'],    
			'addrees2' => $post['address2'],    
			'area' => $post['areacode'],    
			'pin_code' => $post['pincode'],    
			'other_shops'  =>$post['other_shops'],
			'other_shops_location'  =>isset($store_locations)?$store_locations:'',
			//'deliveryes'  =>$post['deliveryes'],
			'weblink'  =>$post['weblink'],
			'tin_vat'  =>$post['tin'],
			'tinvatimage'  =>$tinimg,
			'tan'  =>$post['tan'],
			'tanimage'  =>$tanimg,
			'cst'  =>$post['cst'],
			'cstimage'  =>$cetimg,
			//'gstin'  =>$post['gstin'],
			'gstinimage'  =>$gstimg,
			'created_at'  => date('Y-m-d H:i:s'),
			);
			//echo '<pre>';print_r($data);exit;
			$addstoredetails=$this->adddetails_model->storedetails_adding($this->session->userdata('seller_id'),$data);
			
			if(count($addstoredetails)>0)
			{
			$this->session->set_flashdata('success','category details updated');
			return redirect('seller/adddetails/personaldetails');
			}
			//echo '<pre>';print_r($data);exit;


    }
	
	 public function updatepersonaldetails()
	{  

   $post=$this->input->post();
 
   $data = array(
    'seller_bank_account' => $post['bank_account'], 
    'seller_account_name' => $post['account_name'],
    'seller_aaccount_ifsc_code' => $post['ifsccode'],    
    'created_at'  => date('Y-m-d H:i:s'),
    'updated_at'  => date('Y-m-d H:i:s')
  
  );
   //echo '<pre>';print_r($data);exit;
    $result=$this->adddetails_model->seller_personal_details($data,$this->session->userdata('seller_id'));
   //echo '<pre>';print_r($result);exit;
    if(count($result)>0)
      {
      	$status =1;
       	$bank_account = $this->adddetails_model->update_seller_account_link($this->session->userdata('seller_id'),$status);

		 $this->session->set_flashdata('succes','');
		 return redirect('seller/adddetails/setpassword');

      }


    }
	public function setpassword()
	{  
		$this->load->library('session');
		$data['seller_id'] = $this->session->userdata('seller_id');
		if($this->session->userdata('seller_id'))
	 	{
			//echo '<pre>';print_r($seller_id);exit;
			$this->load->view('seller/layouts/header');
			$this->load->view('seller/adddetails/setpassword',$data);
		}else{
		redirect('seller/login');
	}

    }
	public function setpasswordpost()
	{  
		$post = $this->input->post();
		$seller_id = base64_decode($post['seller_id']);
		//echo '<pre>';print_r($post);exit;
		$this->form_validation->set_rules('password', 'New password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword', 'conformpassword', 'required|min_length[6]');

		if ($this->form_validation->run() == FALSE) {
		$data['change_errors'] = validation_errors();
		$$this->load->view('seller/layouts/header');
		$this->load->view('seller/adddetails/setpassword');
		
		}else{
			//echo '<pre>';print_r($post);exit;
			$newpassword=md5($post['password']);
			$conpassword=md5($post['confirmpassword']);
			if($newpassword == $conpassword){
				$changedata=array('seller_password'=>$conpassword,'org_password'=>$post['confirmpassword']);
				$passwordchange = $this->adddetails_model->setpassword($seller_id,$changedata);
				if(count($passwordchange)>0){
					$sellerdetails = $this->adddetails_model->getseller_details($seller_id);
					/* for notification purpose*/
						$addnotifications = array(
						'seller_id' => $seller_id,
						'subject'=>'New seller',
						'seller_message'=>$sellerdetails['seller_name'].' was successfully Registered.',
						'message_type' =>'REPLY',
						'created_at' => date('Y-m-d H:i:s'),
						);
						//echo '<pre>';print_r($addnotifications);exit;
						$contact = $this->adddetails_model->save_notifciations($addnotifications);
						
						/* for notification purpose*/
					$completeregistration = $this->adddetails_model->update_seller_competed($seller_id,1);
					$sellerdetails = $this->adddetails_model->getseller_details($seller_id);
					$sellerlogindetails  = array(
					'seller_id'    => $sellerdetails['seller_id'],
					'seller_name'  => $sellerdetails['seller_name'],
					'seller_email' => $sellerdetails['seller_email'],
					'loggedin'   => TRUE,
					);
					//echo '<pre>';print_r($sellerlogindetails);exit;
					$this->session->set_userdata($sellerlogindetails);
					$this->session->set_flashdata('updatpassword',"Password successfully changed!");
					redirect('seller/dashboard');	
				}
				
			}else{
				$this->session->set_flashdata('matchpassworderror',"New password and confirm password do not match");
				redirect('seller/adddetails/setpassword');
			}
		}


    }

	
	


}