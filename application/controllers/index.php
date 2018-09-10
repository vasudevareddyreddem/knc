<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_Controller.php');

class Home extends Front_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->model('customer_model');
		$this->load->model('home_model');
		$this->load->model('category_model');
		$this->load->library('cart');
        $this->load->library('session');
		//$this->load->library('Instamojo');
		 if($this->session->userdata('location_area')=='')  {
	
	//echo "dfdf";exit;
	}
	}

public function index()

 {
		
	if($this->session->userdata('seller_id')!=''){
		redirect('seller/dashboard');
	}
	  if($this->session->userdata('userdetails'))
		{
		$customerdetails=$this->session->userdata('userdetails');
		if($customerdetails['role_id']==5){
			redirect('inventory/dashboard');
		}else if($customerdetails['role_id']==2){
			redirect('admin/dashboard');
		}else if($customerdetails['role_id']==6){
			redirect('deliveryboy/dashboard');
		}
	 }
	 
	 $post=$this->input->post();
	 
	 if(isset($post['locationid']) && $post['locationid']!=''){
		 
			//echo '<pre>';print_r($post);exit;
			$locationdata= $this->home_model->getlocations();
			$loacationname=array();
				foreach ($locationdata as $list){
					if ($list['location_id']==$post['locationid']) {
						$loacationname[]=$list['location_name'];
						$loacationidslist[]=$list['location_id'];
					}
				}
			$locationdatadetails=implode(", ",$loacationname);
			$this->session->set_userdata('location_area',$locationdatadetails);
			$this->session->set_userdata('location_ids',$loacationidslist);
			$data['locationnames']=$locationdatadetails;
			$data['seemore']=$post['locationid'];
			if($this->session->userdata('userdetails'))
			{
			$customerdetails=$this->session->userdata('userdetails');
			$updatearea = $this->customer_model->update_sear_area($customerdetails['customer_id'],$post['locationid']);	
			}
				$data['topoffers'] = $this->home_model->get_top_offers($post['locationid']);
				$data['trending_products'] = $this->home_model->get_trending_products($post['locationid']);
				$data['offer_for_you'] = $this->home_model->get_offer_for_you($post['locationid']);
				$data['deals_of_the_day'] = $this->home_model->get_deals_of_the_day($post['locationid']);
				$data['season_sales'] = $this->home_model->get_season_offers($post['locationid']);
				$data['homepage_banner'] = $this->home_model->get_home_pag_banner();
				
		 
	 }else{
			$id='';
			$data['topoffers'] = $this->home_model->get_top_offers($id);
			$data['trending_products'] = $this->home_model->get_trending_products($id);
			$data['offer_for_you'] = $this->home_model->get_offer_for_you($id);
			$data['deals_of_the_day'] = $this->home_model->get_deals_of_the_day($id);
			$data['season_sales'] = $this->home_model->get_season_offers($id);
			$data['homepage_banner'] = $this->home_model->get_home_pag_banner();
			$data['seemore']=$id;
	 }
	 //echo '<pre>';print_r($post);exit;
		
	
		
	
	$wishlist_ids= $this->category_model->get_all_wish_lists_ids();
	$cartitemids= $this->category_model->get_all_cart_lists_ids();
	if(count($cartitemids)>0){
		foreach($cartitemids as $list){
			$cust_ids[]=$list['cust_id'];
			$cart_item_ids[]=$list['item_id'];
			$cart_ids[]=$list['id'];
			
		}
		$data['cust_ids']=$cust_ids;
		$data['cart_item_ids']=$cart_item_ids;
		$data['cart_ids']=$cart_ids;
		
	}else{
		$data['cust_ids']=array();
		$data['cart_item_ids']=array();
		$data['cart_ids']=array();
	}
	if(count($wishlist_ids)>0){
	foreach ($wishlist_ids as  $list){
		$customer_ids_list[]=$list['cust_id'];
		$whishlist_item_ids_list[]=$list['item_id'];
		$whishlist_ids_list[]=$list['id'];
	}
		
	//echo '<pre>';print_r($data);exit;
	$data['customer_ids_list']=$customer_ids_list;
	$data['whishlist_item_ids_list']=$whishlist_item_ids_list;
	$data['whishlist_ids_list']=$whishlist_ids_list;
	
	}
	$banners_list= $this->home_model->get_home_pag_middle_banner();
	$data['banners_list']=array_chunk($banners_list, 3);
	//echo '<pre>';print_r($data);exit;
	$this->template->write_view('content', 'home/index',$data);
	$this->template->render();
}



public function search_functionality(){
	
	$post=$this->input->post();
	$data1 = $this->home_model->get_search_functionality_products($post['searchvalue']);
	$data2 = $this->home_model->get_search_functionality_sub_category($post['searchvalue']);
	$data['detail']=array_merge($data1,$data2);
	//echo "<pre>";print_r($data);exit;
	$this->load->view('customer/search',$data);
}



 	 
		 
	
	
public function location()
{

$session=array('location_name'=>$this->input->post('location_name'));

$this->session->set_userdata($session);

 echo "1";
}





	 
 
}