<?php
class Inventory_model extends MY_Model
{
function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function get_all_categories_list()
	{
		$this->db->select('*')->from('category');
	$query= $this->db->get()->result_array();
		 foreach ($query as $category)
        {
			$return[$category['category_id']] = $category;
			$return[$category['category_id']]['activecount'] = $this->get_activeunreadcounts($category['category_id']);
			$return[$category['category_id']]['inactivecount'] = $this->get_inactiveunreadcounts($category['category_id']);
        }
		if(!empty($return))
		{
		return $return;
		}
	}
	public function get_activeunreadcounts($catid)
	{
		$this->db->select('count(subcategory_id) as count')->from('subcategories');
		$this->db->where('category_id',$catid);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public function get_inactiveunreadcounts($catid)
	{
		$this->db->select('count(subcategory_id) as count')->from('subcategories');
		$this->db->where('category_id',$catid);
		$this->db->where('status',0);
		return $this->db->get()->result_array();
	}
	public function get_categort_details($catid)
	{
		$this->db->select('*')->from('category');
		$this->db->where('category_id',$catid);
		return $this->db->get()->row_array();
	}
	public function get_subcategore_details($subcatid)
	{
		$this->db->select('subcategories.*,category.category_name,customers.cust_firstname,customers.cust_lastname')->from('subcategories');
		$this->db->join('category', 'category.category_id = subcategories.category_id', 'left');
		$this->db->join('customers', 'customers.customer_id = subcategories.created_by', 'left');
		$this->db->where('subcategory_id',$subcatid);
		return $this->db->get()->row_array();
	}
	public function get_all_categort()
	{
		$this->db->select('*')->from('category');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public function get_subcategore_details_category_wise($id)
	{
		$this->db->select('*')->from('subcategories');
		$this->db->where('category_id',$id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public function get_subitem_details($ids)
	{
		$this->db->select('*')->from('sub_items');
		$this->db->where('subitem_id',$ids);
		//$this->db->where('status',1);
		return $this->db->get()->row_array();
	}
	 function get_name_existss($name)
    {
	   $sql = "SELECT * FROM category WHERE category_name ='".$name."' AND status='1'";
        return $this->db->query($sql)->row_array();
     }
	 function get_sub_name_existss($name)
    {
	   $sql = "SELECT * FROM subcategories WHERE subcategory_name ='".$name."'";
        return $this->db->query($sql)->row_array();
     }
	 function get_subname_existss($name)
    {
	   $sql = "SELECT * FROM subcategories WHERE subcategory_name ='".$name."' AND status='1'";
        return $this->db->query($sql)->row_array();
     }
	public function get_subcategort_details()
	{
		$this->db->select('subcategories.*,category.category_name')->from('subcategories');
		$this->db->join('category', 'category.category_id = subcategories.category_id', 'left');
		return $this->db->get()->result_array();
	}
	public function get_subcategort_details_list($cat)
	{
		$this->db->select('subcategories.*,category.category_name')->from('subcategories');
		$this->db->join('category', 'category.category_id = subcategories.category_id', 'left');
		$this->db->where('subcategories.category_id', $cat);
		return $this->db->get()->result_array();
	}
	public function update_category_details($catid,$data)
	{
		$this->db->where('category_id', $catid);
		return $this->db->update('category', $data);
	}
	public function update_subcategory_details($subcatid,$data)
	{
		$this->db->where('subcategory_id', $subcatid);
		return $this->db->update('subcategories', $data);
	}
	public function get_seller_details($sid)
	{
		$this->db->select('sellers.*,locations.location_name')->from('sellers');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = sellers.seller_id', 'left');
		$this->db->join('locations', 'locations.location_id = seller_store_details.area', 'left');
		$this->db->where('sellers.seller_id',$sid);
		return $this->db->get()->row_array();
	}
	public function update_seller_status($sellerid,$data){
		$this->db->where('seller_id', $sellerid);
		return $this->db->update('sellers', $data);
	}
	public function update_subcategory_status($catid,$data){
		$this->db->where('subcategory_id', $catid);
		return $this->db->update('subcategories', $data);
	}
	public function update_category_status($catid,$data){
		$this->db->where('category_id', $catid);
		return $this->db->update('category', $data);
	}
	public function get_category_details($catid){
		$this->db->select('*')->from('category');
		$this->db->where('category_id',$catid);
		return $this->db->get()->row_array();
	}
	function save_sub_categories($data){
		$this->db->insert('subcategories', $data);
		return $insert_id = $this->db->insert_id();
	}
	function insert_cat_data($data){
		$this->db->insert('category', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_all_seller_details(){
		$this->db->select('seller_id,seller_rand_id,seller_name,seller_email,seller_mobile,status,readcount')->from('sellers');		
		return $this->db->get()->result_array();
	}
	public function get_all_seller_notifications(){
		$this->db->select('request_for_services.*,sellers.seller_id,sellers.seller_name,sellers.seller_email,sellers.seller_mobile,')->from('request_for_services');
		$this->db->join('sellers', 'sellers.seller_id = request_for_services.seller_id', 'left');
		return $this->db->get()->result_array();
	}
	public function get_notification_details($service_id){
		$this->db->select('request_for_services.*,sellers.seller_id,sellers.seller_name,sellers.seller_email,sellers.seller_mobile,sellers.seller_rand_id')->from('request_for_services');
		$this->db->join('sellers', 'sellers.seller_id = request_for_services.seller_id', 'left');
		$this->db->where('request_for_services.service_id',$service_id);
		return $this->db->get()->row_array();
	}
	function notification_statuschanges($servoceid,$data){
		$this->db->where('service_id', $servoceid);
		return $this->db->update('request_for_services', $data);
	}
	public function get_seller_categories()
	{
		$this->db->select('*')->from('category');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public function get_categorywiseseller_list($cid){
	$this->db->select('seller_categories.*,sellers.*')->from('seller_categories');
	$this->db->join('sellers', 'sellers.seller_id = seller_categories.seller_id', 'left');
	$this->db->where('seller_category_id', $cid);
	$this->db->where('sellers.status', 1);
    return $this->db->get()->result_array();
	}
	public function get_seller_databaseid()
	{
		$sqll = $this->db->query("SELECT sellers.*,seller_store_details.*,GROUP_CONCAT(seller_categories.category_name ORDER BY seller_categories.category_name SEPARATOR ', ') AS categoryname 
		 FROM seller_categories LEFT JOIN sellers ON seller_categories.seller_id =sellers.seller_id LEFT JOIN seller_store_details ON 
		 	seller_store_details.seller_id = sellers.seller_id GROUP BY sellers.seller_id");
		 return $sqll->result_array();
	}
	public function get_seller_payments()
	{
		$this->db->select('sellers.seller_name,sellers.seller_id,sellers.seller_rand_id,COUNT(order_items.order_item_id) AS orderscount, SUM(order_items.item_price) AS totalamount, SUM(order_items.commission_price) AS commissionamount')->from('order_items');
		$this->db->join('sellers', 'sellers.seller_id = order_items.seller_id', 'left');
		 $this->db->group_by('order_items.seller_id');
		 $this->db->where('sellers.status', 1);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		return $this->db->get()->result_array();
	}
	public function get_seller_all_payment_details($sid)
	{
		$this->db->select('products.item_name,orders.razorpay_payment_id,orders.razorpay_order_id,orders.transaction_id,orders.payment_type,orders.order_status,order_items.*,sellers.seller_name,sellers.seller_id,sellers.seller_rand_id,customers.cust_firstname,customers.cust_lastname')->from('order_items');
		$this->db->join('sellers', 'sellers.seller_id = order_items.seller_id', 'left');
		$this->db->join('customers', 'customers.customer_id = order_items.customer_id', 'left');
		$this->db->join('orders', 'orders.order_id = order_items.order_id', 'left');
		$this->db->join('products', 'products.item_id = order_items.item_id', 'left');
		 $this->db->where('order_items.seller_id',$sid);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		return $this->db->get()->result_array();
	}
	public function get_inventory_management()
	{
		$this->db->select('*')->from('request_for_services');
		$this->db->where('request_for_services.select_plan','Inventory management');
		return $this->db->get()->result();
	}
	public function get_catalog_management()
	{
		$this->db->select('*')->from('request_for_services');
		$this->db->where('request_for_services.select_plan','Catalog Management');
		return $this->db->get()->result();
	}
	public function get_both()
	{
		$this->db->select('*')->from('request_for_services');
		$this->db->where('request_for_services.select_plan','Both');
		return $this->db->get()->result();
	}
	public function get_banner_preview()
	{
		$this->db->select('*')->from('home_banner');
		$this->db->where('status',1);
		$this->db->order_by("created_at", "ASC");
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	/*notification puroose*/
	public function get_sellernotification_list()
	{
		$this->db->select('notifications.*,sellers.seller_id,sellers.seller_rand_id,sellers.seller_name')->from('notifications');
		$this->db->join('sellers','sellers.seller_id = notifications.seller_id', 'left');	
		$this->db->group_by('notifications.seller_id');
		$this->db->order_by('notifications.notification_id', 'DESC'); 
		$query= $this->db->get()->result_array();
		 foreach ($query as $category)
        {
      //echo "<pre>";print_r($category);exit;
			$return[$category['seller_id']] = $category;
			$return[$category['seller_id']]['count'] = $this->get_unreadcount($category['seller_id']);
			$return[$category['seller_id']]['lastone'] = $this->get_latestmessage($category['seller_id']);
        }
		if(!empty($return))
		{
		return $return;
		}
	}
	public function get_unreadcount($sid)
	{
		$this->db->select('count(read_count) as unreadcount')->from('notifications');
		$this->db->where('seller_id',$sid);
		$this->db->where('read_count',1);
		return $this->db->get()->result_array();
	}
	public function get_latestmessage($sid)
	{
		$sql = "SELECT * FROM notifications where seller_id='".$sid."' ORDER BY notification_id DESC LIMIT 1";
		return $this->db->query($sql)->row_array(); 
	}
	public function get_seller_all_notifications_details($sid)
	{
		$this->db->select('notifications.*,sellers.seller_id,sellers.seller_name,sellers.profile_pic,customers.cust_propic,customers.cust_firstname,customers.cust_lastname')->from('notifications');
		$this->db->join('sellers','sellers.seller_id = notifications.seller_id', 'left');
		$this->db->join('customers','customers.customer_id = notifications.replyed_id', 'left');		
		$this->db->where('notifications.seller_id',$sid);
		$this->db->order_by('notifications.created_at', 'ASC'); 
		return $this->db->get()->result_array();
	}
	public function notifciations_read_count($notification_id,$data)
	{
		$sql1="UPDATE notifications SET read_count ='".$data."' WHERE notification_id = '".$notification_id."'";
		return $this->db->query($sql1);
	}
	public function save_categorydata($data)
	{
		$this->db->insert('seller_categories', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_notifciations($data)
	{
		$this->db->insert('notifications', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_all_notifciations_subject($sid)
	{
		$this->db->select('*')->from('notifications');
		$this->db->where('seller_id',$sid);
		$this->db->where('read_count',1);
		return $this->db->get()->result_array();
	}
	public function get_Unread_notification_count()
	{
		$this->db->select('*')->from('notifications');
		$this->db->where('read_count',1);
		return $this->db->get()->result_array();
	}
	public function get_notifciations_subject($sid)
	{
		$sql = "SELECT * FROM notifications where seller_id='".$sid."' AND message_type='REPLY' ORDER BY notification_id DESC LIMIT 1";
		return $this->db->query($sql)->row_array(); 
	}
	/*notification puroose*/
	/* top offers */
	public function get_top_offers_list(){
			$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
	$this->db->select('sellers.seller_name,sellers.seller_id,sellers.seller_rand_id,COUNT(top_offers.item_id) AS itemscount,')->from('top_offers');
		$this->db->join('sellers', 'sellers.seller_id = top_offers.seller_id', 'left');
		 $this->db->group_by('top_offers.seller_id');
		 $this->db->where('sellers.status', 1);
		 $this->db->where('top_offers.expairdate >=', $curr_date);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		$query=$this->db->get()->result_array();
		 foreach ($query as $offers)
        {
      //echo "<pre>";print_r($offers);exit;
			$return[$offers['seller_id']] = $offers;

			$return[$offers['seller_id']]['count'] = $this->get_tophomepage_active_count($offers['seller_id']);
       }
		if(!empty($return))
		{
		return $return;
		}
	}
	public function get_tophomepage_active_count($sid)
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('count(home_page_status) as activecount')->from('top_offers');
		$this->db->where('seller_id',$sid);
		$this->db->where('home_page_status',1);
		$this->db->where('top_offers.expairdate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	public function get_top_offers_details_list($sid){
		$this->db->select('top_offers.*,products.item_name,category.category_name,sellers.seller_rand_id')->from('top_offers');
		$this->db->join('products', 'products.item_id = top_offers.item_id', 'left');
		$this->db->join('sellers', 'sellers.seller_id = top_offers.seller_id', 'left');
		$this->db->join('category', 'category.category_id = top_offers.category_id', 'left');
		 $this->db->where('top_offers.seller_id',$sid);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		return $this->db->get()->result_array();
	}
	public function update_topoffers_status_ok($sid,$pid,$data,$data1)
	{
		$sql1="UPDATE top_offers SET home_page_status ='".$data."',preview_ok ='".$data1."' WHERE seller_id = '".$sid."' AND item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function update_topoffers_status($sid,$pid,$data)
	{
		$sql1="UPDATE top_offers SET home_page_status ='".$data."' WHERE seller_id = '".$sid."' AND item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function seller_new_comming_list($sid,$data)
	{
		$sql1="UPDATE sellers SET readcount ='".$data."' WHERE seller_id = '".$sid."'";
		return $this->db->query($sql1);
	}
	/* offer list purpose*/
	public function get_season_offers_list(){
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('sellers.seller_name,sellers.seller_id,sellers.seller_rand_id,COUNT(season_sales.item_id) AS itemscount,')->from('season_sales');
		$this->db->join('sellers', 'sellers.seller_id = season_sales.seller_id', 'left');
		 $this->db->group_by('season_sales.seller_id');
		 $this->db->where('sellers.status', 1);
		$this->db->where('season_sales.expairdate >=', $curr_date); 
		$query=$this->db->get()->result_array();
		 foreach ($query as $offers)
        {
      //echo "<pre>";print_r($offers);exit;
			$return[$offers['seller_id']] = $offers;

			$return[$offers['seller_id']]['count'] = $this->get_homepage_active_count($offers['seller_id']);
       }
		if(!empty($return))
		{
		return $return;
		}
	}
	public function get_homepage_active_count($sid)
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('count(home_page_status) as activecount')->from('season_sales');
		$this->db->where('seller_id',$sid);
		$this->db->where('home_page_status',1);
		$this->db->where('season_sales.expairdate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	public function get_season_sales_details_list($sid){
		$this->db->select('season_sales.*,products.item_name,category.category_name,sellers.seller_rand_id')->from('season_sales');
		$this->db->join('products', 'products.item_id = season_sales.item_id', 'left');
		$this->db->join('sellers', 'sellers.seller_id = season_sales.seller_id', 'left');
		$this->db->join('category', 'category.category_id = season_sales.category_id', 'left');
		 $this->db->where('season_sales.seller_id',$sid);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		return $this->db->get()->result_array();
	}
	/*---*/
	/* dealsoffer list purpose*/
	public function get_delasoftheday_offers_list(){
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('sellers.seller_name,sellers.seller_id,sellers.seller_rand_id,COUNT(deals_ofthe_day.item_id) AS itemscount,')->from('deals_ofthe_day');
		$this->db->join('sellers', 'sellers.seller_id = deals_ofthe_day.seller_id', 'left');
		 $this->db->group_by('deals_ofthe_day.seller_id');
		 $this->db->where('sellers.status', 1);
		 $this->db->where('deals_ofthe_day.expairdate >=', $curr_date);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		$query=$this->db->get()->result_array();
		 foreach ($query as $offers)
        {
      //echo "<pre>";print_r($offers);exit;
			$return[$offers['seller_id']] = $offers;

			$return[$offers['seller_id']]['count'] = $this->get_delasoftheday_homepage_active_count($offers['seller_id']);
        }
		if(!empty($return))
		{
		return $return;
		}
	}
	public function get_delasoftheday_homepage_active_count($sid)
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('count(home_page_status) as activecount')->from('deals_ofthe_day');
		$this->db->where('seller_id',$sid);
		$this->db->where('home_page_status',1);
		$this->db->where('deals_ofthe_day.expairdate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	public function get_dealsoftheday_details_list($sid){
		$this->db->select('deals_ofthe_day.*,products.item_name,category.category_name,sellers.seller_rand_id')->from('deals_ofthe_day');
		$this->db->join('products', 'products.item_id = deals_ofthe_day.item_id', 'left');
		$this->db->join('sellers', 'sellers.seller_id = deals_ofthe_day.seller_id', 'left');
		$this->db->join('category', 'category.category_id = deals_ofthe_day.category_id', 'left');
		 $this->db->where('deals_ofthe_day.seller_id',$sid);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		return $this->db->get()->result_array();
	}
	public function update_dealsoftheday_status_ok($sid,$pid,$data,$data1)
	{
		$sql1="UPDATE deals_ofthe_day SET home_page_status ='".$data."', preview_ok ='".$data1."' WHERE seller_id = '".$sid."' AND item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function update_dealsoftheday_status($sid,$pid,$data)
	{
		$sql1="UPDATE deals_ofthe_day SET home_page_status ='".$data."' WHERE seller_id = '".$sid."' AND item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	/*---*/
	/* home page banner purpose*/
	public function get_seller_banners(){
	$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
	$this->db->select('sellers.seller_name,sellers.seller_id,sellers.seller_rand_id,COUNT(home_banner.image_id) AS itemscount,')->from('home_banner');
		$this->db->join('sellers', 'sellers.seller_id = home_banner.seller_id', 'left');
		 $this->db->group_by('home_banner.seller_id');
		 $this->db->where('sellers.status', 1);
		 $this->db->where('home_banner.expairydate >=', $curr_date);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		$query=$this->db->get()->result_array();
		 foreach ($query as $offers)
        {
      //echo "<pre>";print_r($offers);exit;
			$return[$offers['seller_id']] = $offers;

			$return[$offers['seller_id']]['count'] = $this->get_homepage_banner_active_count($offers['seller_id']);
        
		}
		if(!empty($return))
			{
			return $return;
		}
		}
	public function get_homepage_banner_active_count($sid)
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('count(home_page_status) as activecount')->from('home_banner');
		$this->db->where('seller_id',$sid);
		$this->db->where('home_page_status',1);
		$this->db->where('home_banner.expairydate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	public function get_homepage_banner_details_list($sid){
		$this->db->select('home_banner.*,sellers.seller_rand_id')->from('home_banner');
		$this->db->join('sellers', 'sellers.seller_id = home_banner.seller_id', 'left');
		 $this->db->where('home_banner.seller_id',$sid);
		//$this->db->order_by('order_items.seller_id', 'ASC'); 
		return $this->db->get()->result_array();
	}
	public function update_banner_status($sid,$imageid,$data)
	{
		$sql1="UPDATE home_banner SET home_page_status ='".$data."' WHERE seller_id = '".$sid."' AND image_id='".$imageid."'";
		return $this->db->query($sql1);
	}
	public function update_banner_status_ok($sid,$imageid,$data,$data1)
	{
		$sql1="UPDATE home_banner SET home_page_status ='".$data."', preview_ok ='".$data1."' WHERE seller_id = '".$sid."' AND image_id='".$imageid."'";
		return $this->db->query($sql1);
	}
	function banner_status_update($id,$sid,$status)
	{
		$sql1="UPDATE home_banner SET status ='".$status."'WHERE image_id  = '".$id."' AND seller_id = '".$sid."'";
		return $this->db->query($sql1);
	}
public function delete_banner($id,$sid)
	{
		$sql1="DELETE FROM home_banner WHERE image_id  = '".$id."' AND seller_id = '".$sid."'";
		return $this->db->query($sql1);
	}
	/* home page banner purpose*/
	/* home page preview purpose*/
	public function get_top_offers_preview()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('top_offers.*,products.item_name,products.item_image,')->from('top_offers');
		$this->db->join('products', 'products.item_id = top_offers.item_id', 'left');
        $this->db->where('home_page_status',1);
		$this->db->order_by('top_offers.offer_percentage desc');
		$this->db->where('top_offers.expairdate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	public function get_deals_of_the_day_preview()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('deals_ofthe_day.*,products.item_name,products.item_image,')->from('deals_ofthe_day');
		$this->db->join('products', 'products.item_id = deals_ofthe_day.item_id', 'left');
        $this->db->where('home_page_status',1);
		$this->db->order_by('deals_ofthe_day.offer_percentage desc');
		$this->db->where('deals_ofthe_day.expairdate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	public function get_season_sales_preview()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('season_sales.*,products.item_name,products.item_image,')->from('season_sales');
		$this->db->join('products', 'products.item_id = season_sales.item_id', 'left');
		$this->db->where('home_page_status',1);
		$this->db->order_by('season_sales.offer_percentage desc');
		$this->db->where('season_sales.expairdate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	public function get_banner_preview_display()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('home_banner.*')->from('home_banner');
		$this->db->where('home_page_status',1);
		$this->db->order_by('home_banner.created_at desc');
		$this->db->where('home_banner.expairydate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	/* home page preview purpose*/
	public function update_seasonsales_status_ok($sid,$pid,$data,$data1)
	{
		$sql1="UPDATE season_sales SET home_page_status ='".$data."',preview_ok ='".$data1."' WHERE seller_id = '".$sid."' AND item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function update_seasonsales_status($sid,$pid,$data)
	{
		$sql1="UPDATE season_sales SET home_page_status ='".$data."' WHERE seller_id = '".$sid."' AND item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	/* preview ok */
	public function get_topoffers_update_preview_ok()
	{
		$this->db->select('*')->from('top_offers');
		$this->db->where('home_page_status',1);
		return $this->db->get()->result_array();
	}
	public function set_topoffers_update_preview_notok($pid,$data)
	{
		$sql1="UPDATE top_offers SET preview_ok ='".$data."' WHERE top_offer_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function update_topoffers_preview_ok($pid,$data)
	{
		$sql1="UPDATE top_offers SET preview_ok ='".$data."' WHERE item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function get_deals_of_the_day_update_preview_ok()
	{
		$this->db->select('*')->from('deals_ofthe_day');
		$this->db->where('home_page_status',1);
		return $this->db->get()->result_array();
	}
	public function set_deals_of_the_day_update_preview_notok($pid,$data)
	{
		$sql1="UPDATE deals_ofthe_day SET preview_ok ='".$data."' WHERE deal_offer_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function update_deals_of_the_day_preview_ok($pid,$data)
	{
		$sql1="UPDATE deals_ofthe_day SET preview_ok ='".$data."' WHERE item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function get_season_sales_update_preview_ok()
	{
		$this->db->select('*')->from('season_sales');
		$this->db->where('home_page_status',1);
		return $this->db->get()->result_array();
	}
	public function set_season_sales_update_preview_notok($pid,$data)
	{
		$sql1="UPDATE season_sales SET preview_ok ='".$data."' WHERE season_sales_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function update_season_sales_preview_ok($pid,$data)
	{
		$sql1="UPDATE season_sales SET preview_ok ='".$data."' WHERE item_id='".$pid."'";
		return $this->db->query($sql1);
	}
	public function get_banner_update_preview_ok()
	{
		$this->db->select('*')->from('home_banner');
		$this->db->where('home_page_status',1);
		return $this->db->get()->result_array();
	}
	public function set_banner_update_preview_notok($imageid,$data)
	{
		$sql1="UPDATE home_banner SET preview_ok ='".$data."' WHERE image_id='".$imageid."'";
		return $this->db->query($sql1);
	}
	public function update_banner_sales_preview_ok($imageid,$data)
	{
		$sql1="UPDATE home_banner SET preview_ok ='".$data."' WHERE image_id='".$imageid."'";
		return $this->db->query($sql1);
	}
	/* product quantity querys */
	public function total_quantity()
	{
		$this->db->select('sellers.seller_name,sellers.seller_id,sellers.seller_rand_id,SUM(products.item_quantity) AS quantity')->from('products');
		$this->db->join('sellers', 'sellers.seller_id = products.seller_id', 'left');
		 $this->db->group_by('sellers.seller_id');
		 $this->db->where('sellers.status', 1);
		 $this->db->where('products.item_status', 1);
		return $this->db->get()->result_array();
	}
	public function categorywise_quantity($id)
	{
		$this->db->select('products.seller_id,products.category_id,sellers.seller_name,sellers.seller_rand_id,category.category_name,subcategories.subcategory_name,sum(products.item_quantity)as qty ,products.item_name')->from('products');
		$this->db->join('sellers', 'sellers.seller_id = products.seller_id', 'left');
		$this->db->join('category', 'category.category_id = products.category_id', 'left');
		$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');
		//$this->db->group_by('subcategories.subcategory_id');
		$this->db->group_by('products.category_id');
		$this->db->where('sellers.seller_id', $id);
		$this->db->where('sellers.status', 1);
		 $this->db->where('products.item_status', 1);
		return $this->db->get()->result_array();
	}
	public function categorywise_product_quantity($categoryid,$seller_id)
	{
		$this->db->select('products.item_name,products.item_quantity,products.product_code,products.item_status,category.category_name')->from('products');
		$this->db->join('category', 'category.category_id = products.category_id', 'left');
		//$this->db->group_by('subcategories.subcategory_id');
		$this->db->where('products.seller_id', $seller_id);
		$this->db->where('products.category_id', $categoryid);
		 $this->db->where('products.item_status', 1);
		return $this->db->get()->result_array();
	}
	function getoldimage($cat_id,$sub_id)
	{
		$this->db->select('*')->from('subcategories');
		$this->db->where('category_id',$cat_id);
		$this->db->where('subcategory_id',$sub_id);
		return $this->db->get()->row_array();
	}
	function get_seller_products_list($seller_id)
	{
		$this->db->select('products.item_id')->from('products');
		$this->db->where('seller_id',$seller_id);
		return $this->db->get()->result_array();
	}
	function activate_product_status($item_id,$seller_id,$data)
	{
		$sql1="UPDATE products SET item_status ='".$data."'WHERE seller_id = '".$seller_id."' AND item_id='".$item_id."'";
		return $this->db->query($sql1);
	}
	
	function save_mobileapp_banners_list($data){
		$this->db->insert('appbanners_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	function get_save_mobileapp_banners_list(){
		$this->db->select('*')->from('appbanners_list');
		//$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	function get_save_subhomepage_banners_list(){
		$this->db->select('seller_store_details.store_name,homepage_banners.*')->from('homepage_banners');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = homepage_banners.seller_id', 'left');
		$this->db->order_by('homepage_banners.updated desc');
		return $this->db->get()->result_array();
	}
	function update_bannerimg_status($item_id,$data)
	{
		$sql1="UPDATE appbanners_list SET status ='".$data."'WHERE id = '".$item_id."'";
		return $this->db->query($sql1);
	}
	function save_homepagemiddle_banners_list($data){
		$this->db->insert('homesubbanners_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	function update_homepagemiddlebannerimg_status($item_id,$data,$date)
	{
		$sql1="UPDATE homepage_banners SET admin_status ='".$data."', updated ='".$date."'WHERE baneer_id = '".$item_id."'";
		return $this->db->query($sql1);
	}
	function get_save_wishlistpage_banners_list(){
		$this->db->select('*')->from('wishlistbanners_list');
		//$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	function save_wishlist_banners_list($data){
		$this->db->insert('wishlistbanners_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	function update_wishlistimg_status($item_id,$data)
	{
		$sql1="UPDATE wishlistbanners_list SET status ='".$data."'WHERE id = '".$item_id."'";
		return $this->db->query($sql1);
	}
	function get_total_orders()
	{
		$this->db->select('order_items.order_id,order_items.order_item_id,order_items.item_id,order_items.qty,order_items.total_price,order_items.payment_type,order_items.create_at,concat(delivery.cust_firstname,delivery.cust_lastname) as d_name,delivery.cust_mobile as d_mob,order_items.delivery_boy_id,order_items.delivery_boy_assign,order_status.status_confirmation,order_status.status_packing,order_status.status_road,order_status.status_deliverd,order_status.status_refund,order_status.reason,seller_store_details.store_name,concat(seller_store_details.addrees1," , ",seller_store_details.addrees2," , ",seller_store_details.pin_code) as seller_location,(billing_address.name) as billingname,(billing_address.mobile) as billingmobile,customers.cust_firstname,customers.cust_lastname,customers.cust_mobile,orders.payment_type')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('billing_address', 'billing_address.order_id = order_items.order_id', 'left');
		$this->db->join('customers', 'customers.customer_id = order_items.customer_id', 'left');
		$this->db->join('orders', 'orders.order_id = order_items.order_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->join('customers as delivery', 'delivery.customer_id = order_items.delivery_boy_id', 'left');
		$this->db->order_by('order_items.order_item_id','desc');

		//$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	function get_delivery_total_orders($d_id)
	{
		$this->db->select('order_items.order_id,order_items.order_item_id,order_items.item_id,order_items.qty,order_items.total_price,order_items.payment_type,order_items.create_at,concat(delivery.cust_firstname,delivery.cust_lastname) as d_name,delivery.cust_mobile as d_mob,order_items.delivery_boy_id,order_items.delivery_boy_assign,order_status.status_confirmation,order_status.status_packing,order_status.status_road,order_status.status_deliverd,order_status.status_refund,order_status.reason,seller_store_details.store_name,(billing_address.name) as billingname,(billing_address.mobile) as billingmobile,customers.cust_firstname,customers.cust_lastname,customers.cust_mobile,orders.payment_type')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('billing_address', 'billing_address.order_id = order_items.order_id', 'left');
		$this->db->join('customers', 'customers.customer_id = order_items.customer_id', 'left');
		$this->db->join('orders', 'orders.order_id = order_items.order_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->join('customers as delivery', 'delivery.customer_id = order_items.delivery_boy_id', 'left');
		$this->db->order_by('order_items.order_item_id','desc');
		$this->db->where('order_items.delivery_boy_id',$d_id);
		return $this->db->get()->result_array();
	}
	function get_delivered_total_orders()
	{
		$this->db->select('order_items.order_id,order_items.order_item_id,order_items.item_id,order_items.qty,order_items.total_price,order_items.payment_type,order_items.create_at,concat(delivery.cust_firstname,delivery.cust_lastname) as d_name,delivery.cust_mobile as d_mob,order_items.delivery_boy_id,order_items.delivery_boy_assign,order_status.status_confirmation,order_status.status_packing,order_status.status_road,order_status.status_deliverd,order_status.status_refund,order_status.reason,seller_store_details.store_name,concat(seller_store_details.addrees1," , ",seller_store_details.addrees2," , ",seller_store_details.pin_code) as seller_location,(billing_address.name) as billingname,(billing_address.mobile) as billingmobile,customers.cust_firstname,customers.cust_lastname,customers.cust_mobile,orders.payment_type')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('billing_address', 'billing_address.order_id = order_items.order_id', 'left');
		$this->db->join('customers', 'customers.customer_id = order_items.customer_id', 'left');
		$this->db->join('orders', 'orders.order_id = order_items.order_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->join('customers as delivery', 'delivery.customer_id = order_items.delivery_boy_id', 'left');
		$this->db->order_by('order_items.order_item_id','desc');
		$where = '(order_status.status_deliverd = "4" OR  order_status.status_refund  is NOT NULL)';
		$this->db->where($where);
		

		//$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	function get_pending_total_orders()
	{
		$this->db->select('order_items.order_id,order_items.order_item_id,order_items.item_id,order_items.qty,order_items.total_price,order_items.payment_type,order_items.create_at,concat(delivery.cust_firstname,delivery.cust_lastname) as d_name,delivery.cust_mobile as d_mob,order_items.delivery_boy_id,order_items.delivery_boy_assign,order_status.status_confirmation,order_status.status_packing,order_status.status_road,order_status.status_deliverd,order_status.status_refund,order_status.reason,seller_store_details.store_name,concat(seller_store_details.addrees1," , ",seller_store_details.addrees2," , ",seller_store_details.pin_code) as seller_location,(billing_address.name) as billingname,(billing_address.mobile) as billingmobile,customers.cust_firstname,customers.cust_lastname,customers.cust_mobile,orders.payment_type')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('billing_address', 'billing_address.order_id = order_items.order_id', 'left');
		$this->db->join('customers', 'customers.customer_id = order_items.customer_id', 'left');
		$this->db->join('orders', 'orders.order_id = order_items.order_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->join('customers as delivery', 'delivery.customer_id = order_items.delivery_boy_id', 'left');
		$this->db->order_by('order_items.order_item_id','desc');
		$this->db->where('order_status.status_deliverd',0);
		$this->db->where('order_status.status_refund  is NULL', NULL, FALSE);
		return $this->db->get()->result_array();
	}
	function get_all_subcategoires($id)
	{
		$this->db->select('subcategories.subcategory_id,subcategories.subcategory_name,')->from('subcategories');
		$this->db->where('category_id',$id);
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	 function get_subitem_name_existss($name,$subcatid)
    {
	   $sql = "SELECT * FROM sub_items WHERE subitem_name ='".$name."' AND subcategory_id ='".$subcatid."'";
        return $this->db->query($sql)->row_array();
     }
	 function save_subitems($data){
		$this->db->insert('sub_items', $data);
		return $insert_id = $this->db->insert_id();
	}
	function delivery_boy_current_locations()
	{
		$this->db->select('customers.*')->from('customers');
		$this->db->where('role_id',6);
		return $this->db->get()->result_array();
	}
	function get_all_subitem_list()
	{
		$this->db->select('sub_items.*,category.category_name,subcategories.subcategory_name')->from('sub_items');
		$this->db->join('category', 'category.category_id = sub_items.category_id', 'left');
		$this->db->join('subcategories', 'subcategories.subcategory_id = sub_items.subcategory_id', 'left');

		return $this->db->get()->result_array();
	}
	function get_all_subitemwise_itemlist()
	{
		$this->db->select('items_list.*,category.category_name,subcategories.subcategory_name,sub_items.category_id,sub_items.subitem_name')->from('items_list');
		$this->db->join('sub_items', 'sub_items.subitem_id = items_list.subitemid', 'left');
		$this->db->join('category', 'category.category_id = sub_items.category_id', 'left');
		$this->db->join('subcategories', 'subcategories.subcategory_id = sub_items.subcategory_id', 'left');


		return $this->db->get()->result_array();
	}
	 function update_subitem_status($subitemid,$data){
		$this->db->where('subitem_id', $subitemid);
		return $this->db->update('sub_items', $data);
	}
	function get_subitemname_existss($name)
    {
	   $sql = "SELECT * FROM sub_items WHERE subitem_name ='".$name."' AND status='1'";
        return $this->db->query($sql)->row_array();
     }
	 function get_status_changed_data($id)
	{
	$sql = "SELECT * FROM sub_items WHERE subitem_id ='".$id."'";
	return $this->db->query($sql)->row_array();
	}
	function get_itemstatus_changed_data($id)
	{
	$sql = "SELECT * FROM items_list WHERE id ='".$id."'";
	return $this->db->query($sql)->row_array();
	}
	
	function get_itemnameinsamesubitem_existss($subitemid,$name)
    {
	   $sql = "SELECT * FROM items_list WHERE item_name ='".$name."' AND subitemid ='".$subitemid."' AND status='1'";
        return $this->db->query($sql)->row_array();
     }
	 function get_itemname_existss($name)
    {
	   $sql = "SELECT * FROM items_list WHERE item_name ='".$name."' AND status='1'";
        return $this->db->query($sql)->row_array();
     }
	function update_item_status($itemid,$data){
		$this->db->where('id', $itemid);
		return $this->db->update('items_list', $data);
	}
	public function get_all_subitems()
	{
		$this->db->select('*')->from('sub_items');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	 function save_items($data){
		$this->db->insert('items_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	function get_item_details($id)
	{
		$this->db->select('*')->from('items_list');
		$this->db->where('id',$id);
		return $this->db->get()->row_array();
	}
	function get_category_banners_list(){
		$this->db->select('category_banners.*,seller_store_details.store_name')->from('category_banners');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = category_banners.seller_id', 'left');
		//$this->db->where('status',1);
		$this->db->order_by('category_banners.updated desc');
		return $this->db->get()->result_array();
	}
	function update_categorypage_status($item_id,$data,$date)
	{
		$sql1="UPDATE category_banners SET admin_status ='".$data."', updated='".$date."' WHERE baneer_id = '".$item_id."'";
		return $this->db->query($sql1);
	}
	function get_all_brnads_list()
	{
		$this->db->select('products.item_id,products.brand,category.category_name,subcategories.subcategory_name')->from('products');
		$this->db->join('category', 'category.category_id = products.category_id', 'left');
		$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');
		$this->db->where('item_status',1);
		$this->db->group_by('products.brand');
		return $this->db->get()->result_array();
	}
	/* brands*/
	function save_brands($data){
		$this->db->insert('brands', $data);
		return $insert_id = $this->db->insert_id();
	}
	function get_all_brand_lists(){
		$this->db->select('*')->from('brands');
		return $this->db->get()->result_array();
	}
	function update_brand_status($itemid,$data){
		$this->db->where('bid', $itemid);
		return $this->db->update('brands', $data);
	}
	public function get_brand_details($ids)
	{
		$this->db->select('*')->from('brands');
		$this->db->where('bid',$ids);
		return $this->db->get()->row_array();
	}
	public function get_allbrand_details($brand)
	{
		$this->db->select('products.category_id')->from('products');
		$this->db->where('brand',$brand);
		return $this->db->get()->row_array();
	}
	public function get_brand_details_withname($name)
	{
		$this->db->select('*')->from('brands');
		$this->db->where('brand',$name);
		return $this->db->get()->row_array();
	}
	/* brands*/
	
	
	/* add  delivery  boy functionality  purpose*/
	public  function check_delivery_boy_exists($email){
		$this->db->select('*')->from('customers');
		$this->db->where('cust_email',$email);
		$this->db->where('role_id',6);
		return $this->db->get()->row_array();
	}
	public  function save_delivery_boy($data){
		$this->db->insert('customers',$data);
		return $this->db->insert_id();
		
	}
	
	public  function get_delivery_boy_list(){
		$this->db->select('customer_id,role_id,cust_firstname,cust_lastname,cust_email,cust_mobile,address1,address2,pincode,status,created_at')->from('customers');
		$this->db->where('role_id',6);
		return $this->db->get()->result_array();
	}
	public  function delivery_update_status($id,$data){
		$this->db->where('customer_id',$id);
		return $this->db->update('customers',$data);
	}
	public  function delivery_boy_delete($c_id){
		$this->db->where('customer_id',$c_id);
		return $this->db->delete('customers');
	}
	public function get_delivery_boy_details($c_id){
		$this->db->select('customer_id,role_id,cust_firstname,cust_lastname,cust_email,cust_mobile,address1,address2,pincode,status,created_at')->from('customers');
		$this->db->where('customer_id',$c_id);
		$this->db->where('role_id',6);
		return $this->db->get()->row_array();
	}
	
	
	/* co-worker functionality*/
	/* add  delivery  boy functionality  purpose*/
	public  function check_co_worker_exists($email){
		$this->db->select('*')->from('customers');
		$this->db->where('cust_email',$email);
		//$this->db->where('role_id',7);
		return $this->db->get()->row_array();
	}
	public  function save_co_worker_boy($data){
		$this->db->insert('customers',$data);
		return $this->db->insert_id();
		
	}
	
	public  function get_coworker_list(){
			$this->db->select('customer_id,role_id,cust_firstname,cust_lastname,cust_email,cust_mobile,address1,address2,pincode,status,created_at')->from('customers');
		$this->db->where('role_id',7);
		return $this->db->get()->result_array();
	}
	public function get_co_worker_details($c_id){
		$this->db->select('customer_id,role_id,cust_firstname,cust_lastname,cust_email,cust_mobile,address1,address2,pincode,status,created_at')->from('customers');
		$this->db->where('customer_id',$c_id);
		//$this->db->where('role_id',7);
		return $this->db->get()->row_array();
	}
	public  function update_co_worker_details($id,$data){
		$this->db->where('customer_id',$id);
		return $this->db->update('customers',$data);
	}
	public  function co_worker_delete($c_id){
		$this->db->where('customer_id',$c_id);
		return $this->db->delete('customers');
	}
	
	/* onventory  changes  purpose*/
	function get_seller_pending_orders($seller_id)
	{
		$this->db->select('order_items.order_id,order_items.order_item_id,order_items.item_id,order_items.qty,order_items.total_price,order_items.payment_type,order_items.create_at,concat(delivery.cust_firstname,delivery.cust_lastname) as d_name,delivery.cust_mobile as d_mob,order_items.delivery_boy_id,order_items.delivery_boy_assign,order_status.status_confirmation,order_status.status_packing,order_status.status_road,order_status.status_deliverd,order_status.status_refund,order_status.reason,seller_store_details.store_name,(billing_address.name) as billingname,(billing_address.mobile) as billingmobile,customers.cust_firstname,customers.cust_lastname,customers.cust_mobile,orders.payment_type')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('billing_address', 'billing_address.order_id = order_items.order_id', 'left');
		$this->db->join('customers', 'customers.customer_id = order_items.customer_id', 'left');
		$this->db->join('orders', 'orders.order_id = order_items.order_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->join('customers as delivery', 'delivery.customer_id = order_items.delivery_boy_id', 'left');
		$this->db->order_by('order_items.order_item_id','desc');
		$this->db->where('seller_store_details.seller_id',$seller_id);
		$this->db->where('order_status.status_deliverd',0);
		$this->db->where('order_status.status_refund  is NULL', NULL, FALSE);
		//$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	function get_seller_delivered_orders($seller_id)
	{
		$this->db->select('order_items.order_id,order_items.order_item_id,order_items.item_id,order_items.qty,order_items.total_price,order_items.payment_type,order_items.create_at,concat(delivery.cust_firstname,delivery.cust_lastname) as d_name,delivery.cust_mobile as d_mob,order_items.delivery_boy_id,order_items.delivery_boy_assign,order_status.status_confirmation,order_status.status_packing,order_status.status_road,order_status.status_deliverd,order_status.status_refund,order_status.reason,seller_store_details.store_name,(billing_address.name) as billingname,(billing_address.mobile) as billingmobile,customers.cust_firstname,customers.cust_lastname,customers.cust_mobile,orders.payment_type')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('billing_address', 'billing_address.order_id = order_items.order_id', 'left');
		$this->db->join('customers', 'customers.customer_id = order_items.customer_id', 'left');
		$this->db->join('orders', 'orders.order_id = order_items.order_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->join('customers as delivery', 'delivery.customer_id = order_items.delivery_boy_id', 'left');
		$this->db->order_by('order_items.order_item_id','desc');
		$where = '(order_status.status_deliverd = "4" OR  order_status.status_refund  is NOT NULL)';
		$this->db->where('seller_store_details.seller_id',$seller_id);
		$this->db->where($where);
		//$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public function get_seller_products()
	{
		$this->db->select('products.item_id,category.category_name,subcategories.subcategory_name,products.seller_id,products.category_id,products.subcategory_id,products.item_name,products.item_status,products.item_cost,products.special_price,products.item_quantity,products.product_code,products.created_at,seller_store_details.store_name as s_name,concat(seller_store_details.addrees1," , ",seller_store_details.addrees2," , ",seller_store_details.pin_code) as s_address,')->from('products');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = products.seller_id', 'left');
		$this->db->join('category', 'category.category_id = products.category_id', 'left');
		$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');
		//$this->db->where('seller_id',$sid);
		$this->db->where('products.item_status',1);
		$this->db->order_by('products.item_id','desc');
        return $this->db->get()->result_array();
	}
	/* onventory  changes  purpose*/
	
	/* dashboard  graph purpose*/
	public  function get_yearly_orders_list(){
		$this->db->select('order_item_id,create_at')->from('order_items');
        $this->db->where('order_status',1);
		//$this->db->group_by("DATE_FORMAT(create_at,'%Y')");
		$this->db->order_by('create_at', 'asc'); 
        return  $this->db->get()->result_array();
	}
	public  function get_month_orders_list($date){
		$this->db->select('order_item_id,create_at')->from('order_items');
        $this->db->where('order_status',1);
		$this->db->where("DATE_FORMAT(create_at,'%Y')",$date);
		//$this->db->group_by("DATE_FORMAT(create_at,'%m')");
		//$this->db->order_by('create_at', 'asc'); 
        return  $this->db->get()->result_array();
	}
	public  function get_daily_orders_list($date,$year){
		$this->db->select("order_item_id,create_at")->from('order_items');
        $this->db->where('order_status',1);
		$this->db->where("DATE_FORMAT(create_at,'%Y-%m')",$year);
		$this->db->where("DATE_FORMAT(create_at,'%d')",$date);
		//$this->db->group_by("DATE_FORMAT(create_at,'%Y-%m-%d %h')");
		$this->db->order_by('create_at', 'asc'); 
        return  $this->db->get()->result_array();
		
	}
	/* dashboard  graph purpose*/
}
?>	