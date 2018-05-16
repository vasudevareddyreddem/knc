<?php

defined('BASEPATH') OR exit('No direct script access allowed');



 

class Home_model extends CI_Model

{

    function __construct()

    {

        // Call the Model constructor

        parent::__construct();

    }    
	public function cart_item_count($cust_id)
	{
	$this->db->select('*')->from('cart');
	$this->db->where('cust_id', $cust_id);
	return $this->db->get()->result_array();
	}
	public function customer_details($cust_id)
	{
	$this->db->select('customers.cust_firstname,customers.cust_lastname,customers.cust_propic')->from('customers');
	$this->db->where('customer_id', $cust_id);
	return $this->db->get()->row_array();
	}
	
	public function get_search_functionality_products($areaid)
	{
	$this->db->select('products.item_id,products.item_name,products.ram,products.colour,products.internal_memeory,products.yes,subcategories.subcategory_id,subcategories.subcategory_name,subcategories.category_id')->from('products');
	$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');
	//$this->db->where('item_name',$areaid);
	$this->db->or_like('item_name', $areaid);
	$this->db->or_like('ram', $areaid);
	$this->db->where('products.item_status',1);
	return $this->db->get()->result_array();
	//echo $this->db->last_query();exit; 

	}
	public function get_search_functionality_sub_category($areaid)
	{
	$this->db->select('category.category_name,subcategories.category_id,subcategories.subcategory_id,subcategories.subcategory_name,subcategories.yes')->from('subcategories');
	$this->db->join('category', 'category.category_id = subcategories.category_id', 'left');
	$this->db->like('subcategory_name', $areaid);
	$this->db->where('subcategories.status',1);
	return $this->db->get()->result_array();
	//echo $this->db->last_query();exit; 
	}
	public function get_search_functionality_category($areaid)
	{
	$this->db->select('*')->from('category');
	$this->db->like('category_name', $areaid);
	return $this->db->get()->result_array();
	//echo $this->db->last_query();exit; 
	}
	
	public function get_search_top_offers($catid)
	{
		$date = new DateTime("now");
 		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('top_offers.expairdate,top_offers.offer_percentage,products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.offer_expairdate,products.item_image')->from('top_offers');
		$this->db->join('products', 'products.item_id = top_offers.item_id', 'left');
		$this->db->where('products.category_id',$catid);
        $this->db->where('admin_status','0');
		$this->db->order_by('top_offers.offer_percentage desc');
		$this->db->where('top_offers.preview_ok',1);
		$this->db->where('products.item_status',1);
		$this->db->where('top_offers.expairdate >=', $curr_date);
		return $this->db->get()->result_array();

	}
	public function get_search_trending_products($catid)
	{
		$this->db->select('products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.offer_expairdate,products.item_image')->from('products');
		$this->db->where('products.category_id',$catid);
        $this->db->where('admin_status','0');
		$this->db->order_by('products.offer_percentage ASC');
		$this->db->where('products.item_status',1);
		return $this->db->get()->result_array();
	}
	public function get_search_offer_for_you($catid)
	{
		$this->db->select('products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.offer_expairdate,products.item_image')->from('products');
		$this->db->where('products.category_id',$catid);
        $this->db->where('admin_status','0');
		$this->db->order_by('products.offer_percentage desc');
		$this->db->where('products.item_status',1);
		return $this->db->get()->result_array();
	}
	public function get_search_deals_of_the_day($catid)
	{
		$date = new DateTime("now");
 		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('deals_ofthe_day.expairdate,deals_ofthe_day.offer_percentage,products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.offer_expairdate,products.item_image')->from('deals_ofthe_day');
		$this->db->join('products', 'products.item_id = deals_ofthe_day.item_id', 'left');
		$this->db->where('products.category_id',$catid);
        $this->db->where('admin_status','0');
		$this->db->order_by('deals_ofthe_day.offer_percentage desc');
		$this->db->where('deals_ofthe_day.preview_ok',1);
		$this->db->where('products.item_status',1);
		$this->db->where('deals_ofthe_day.expairdate >=', $curr_date);
		return $this->db->get()->result_array();
	}
	public function get_search_season_sales($catid)
	{
		$date = new DateTime("now");
 		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('season_sales.expairdate,season_sales.offer_percentage,products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.offer_expairdate,products.item_image')->from('season_sales');
		$this->db->join('products', 'products.item_id = season_sales.item_id', 'left');
		$this->db->where('products.category_id',$catid);
		$this->db->order_by('season_sales.offer_percentage desc');
		$this->db->where('season_sales.preview_ok',1);
		$this->db->where('products.item_status',1);
		$this->db->where('season_sales.expairdate >=', $curr_date);
		return $this->db->get()->result_array();
	
	}
	public function get_all_products_list($catid)
	{
		$this->db->select('products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.offer_expairdate,products.item_image')->from('products');
		$this->db->where('products.category_id',$catid);
        $this->db->where('admin_status','0');
		$this->db->order_by('products.offer_percentage desc');
		$this->db->where('products.item_status',1);
		return $this->db->get()->result_array();
	}
	public function get_category_name_details($catid)
	{
		$this->db->select('*')->from('category');
		$this->db->where('category_id',$catid);
		return $this->db->get()->row_array();
	}
	public function get_season_offers()
	{
		$date = new DateTime("now");
 		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('season_sales.expairdate,season_sales.offer_percentage,products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.item_image')->from('season_sales');
		$this->db->join('products', 'products.item_id = season_sales.item_id', 'left');
		$this->db->order_by('season_sales.offer_percentage desc');
		$this->db->group_by('products.category_id');
		$this->db->where('season_sales.preview_ok',1);
		$this->db->where('products.item_status',1);
		$this->db->where('season_sales.expairdate >=', $curr_date);
		$return=$this->db->get()->result_array();
		foreach ($return as $lis){
			//echo '<>'
			$season[]=$this->get_season_product_percentages_list($lis['category_id']);
			
		}
		if(!empty($season))
		{
		return $season;
		}

	}
	public function get_season_product_percentages_list($cid)
	{
	
		$sql="SELECT products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,season_sales.offer_percentage,products.offer_amount,products.item_image,category.category_name FROM season_sales LEFT JOIN products ON products.item_id = season_sales.item_id  LEFT JOIN category ON category.category_id = products.category_id WHERE season_sales.category_id ='".$cid."' ORDER BY season_sales.offer_percentage DESC LIMIT 0, 1";
        return $this->db->query($sql)->row_array(); 

	}
	public function get_top_offers()
	{
		$date = new DateTime("now");
 		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.item_image')->from('top_offers');
		$this->db->join('products', 'products.item_id = top_offers.item_id', 'left');
		$this->db->order_by('top_offers.offer_percentage desc');
		$this->db->where('top_offers.preview_ok',1);
		$this->db->group_by('products.category_id');
		$this->db->where('products.item_status',1);
		$this->db->where('top_offers.expairdate >=', $curr_date);
		$return=$this->db->get()->result_array();
		foreach ($return as $lis){
			//echo '<>'
			$top[]=$this->get_topoffer_product_percentages_list($lis['category_id']);
			
		}
		if(!empty($top))
		{
		return $top;
		}

	}
	public function get_topoffer_product_percentages_list($cid)
	{
	
		$sql="SELECT products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,top_offers.offer_percentage,products.offer_amount,products.item_image,category.category_name FROM top_offers LEFT JOIN products ON products.item_id = top_offers.item_id LEFT JOIN category ON category.category_id = products.category_id WHERE top_offers.category_id ='".$cid."' ORDER BY top_offers.offer_percentage DESC LIMIT 0, 1";
        return $this->db->query($sql)->row_array(); 

	}
	public function get_trending_products()
	{
		$this->db->select('products.category_id')->from('products');
		$this->db->order_by('products.offer_percentage desc');
		$this->db->group_by('products.category_id');
		$this->db->where('products.category_id !=','');
		$this->db->where('products.item_status',1);
		$return=$this->db->get()->result_array();
		foreach ($return as $lis){
			//echo '<pre>';print_r($lis);exit;
			$trending[]=$this->get_trending_product_percentages_list($lis['category_id']);
			
		}
		if(!empty($trending))
		{
		return $trending;
		}
		
	}
	public function get_trending_product_percentages_list($cid)
	{
	
		$sql="SELECT products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.item_image,products.offers,products.offer_expairdate,products.discount,category.category_name FROM products  LEFT JOIN category ON category.category_id = products.category_id  WHERE products.category_id ='".$cid."' ORDER BY if(`offer_expairdate`>='DATE(Y-m-d h:i:s A)',`offer_percentage`,`offers`) DESC LIMIT 0, 1";
		//$sql="SELECT products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,products.offer_percentage,products.offer_amount,products.item_image,products.offers,products.offer_expairdate,category.category_name FROM products  LEFT JOIN category ON category.category_id = products.category_id  WHERE products.category_id ='".$cid."' ORDER BY products.offer_percentage DESC LIMIT 0, 1";
        return $this->db->query($sql)->row_array(); 

	}
	public function get_offer_for_you()
	{
		$this->db->select('products.category_id')->from('products');
        $this->db->order_by('products.offer_percentage desc');
		$this->db->order_by('products.item_id desc');
		$this->db->where('products.item_status',1);
		$this->db->group_by('products.category_id');
		$return=$this->db->get()->result_array();
		foreach ($return as $lis){
			//echo '<>'
			$offers[]=$this->get_trending_product_percentages_list($lis['category_id']);
			
		}
		if(!empty($offers))
		{
		return $offers;
		}
		
	}
	
	public function get_deals_of_the_day()
	{
		$date = new DateTime("now");
 		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('deals_ofthe_day.*,products.*')->from('deals_ofthe_day');
		$this->db->join('products', 'products.item_id = deals_ofthe_day.item_id', 'left');
		$this->db->order_by('deals_ofthe_day.offer_percentage desc');
		$this->db->group_by('products.category_id');
		$this->db->where('deals_ofthe_day.preview_ok',1);
		$this->db->where('products.item_status',1);
		$this->db->where('deals_ofthe_day.expairdate >=', $curr_date);
			$return=$this->db->get()->result_array();
		foreach ($return as $lis){
			//echo '<>'
			$deals[]=$this->get_deals_product_percentages_list($lis['category_id']);
			
		}
		if(!empty($deals))
		{
		return $deals;
		}

	}
	public function get_deals_product_percentages_list($cid)
	{
	
		$sql="SELECT products.item_id,products.category_id,products.item_cost,products.item_name,products.special_price,products.item_quantity,products.item_status,deals_ofthe_day.offer_percentage,products.offer_amount,products.item_image,category.category_name FROM deals_ofthe_day LEFT JOIN products ON products.item_id = deals_ofthe_day.item_id  LEFT JOIN category ON category.category_id = products.category_id WHERE deals_ofthe_day.category_id ='".$cid."' ORDER BY deals_ofthe_day.offer_percentage DESC LIMIT 0, 1";
        return $this->db->query($sql)->row_array(); 

	}

	public function get_home_pag_banner()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('*')->from('home_banner');
		$this->db->order_by('home_banner.image_id desc');
		$this->db->where('home_banner.home_page_status',1);
		$this->db->where('home_banner.expairydate >=', $curr_date);
		$this->db->where('home_banner.preview_ok',1);
		return $this->db->get()->result_array();

	}
	public function get_season_sales()
	{
		$date = new DateTime("now");
 		$curr_date = $date->format('Y-m-d h:i:s A');
		$this->db->select('season_sales.*,products.*')->from('season_sales');
		$this->db->join('products', 'products.item_id = season_sales.item_id', 'left');
		$this->db->order_by('season_sales.offer_percentage ASC');
		$this->db->where('season_sales.preview_ok',1);
		$this->db->where('season_sales.expairdate >=', $curr_date);
		return $this->db->get()->result_array();

	}
	
	public function Search_functionality($searchvalue)
	{
		$this->db->select('*')->from('products');
        $this->db->where('admin_status','0');
		$this->db->order_by('products.offer_percentage ASC');
		$this->db->limit(5);
		return $this->db->get()->result_array();

	}
		
		
		
		public function getcatsubcat()
	{
		
		$query=$this->db->get('category');
		//return $data->result();
		
		foreach ($query->result() as $category)
        {
            $return[$category->category_id] = $category;

        
      $return[$category->category_id]->subcat = $this->get_subcat($category->category_id);
      

        
    }
		
	if(!empty($return))
    {
    return $return;

	}	
		
		
		
	}
	
	
	public function get_subcat($category_id)
{
    
	$this->db->select('*');
	$this->db->from('subcategories');
    $this->db->where('category_id', $category_id);
	$this->db->group_by('subcategory_name');
    $query = $this->db->get();
    
    return $query->result();
}
	
public function getproductdatacount($cat_id,$subcat_id)
{
	
$this->db->select('*');
	$this->db->from('products');
	$this->db->join('category', 'category.category_id = products.category_id');
    $this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id');
	$this->db->where('category.category_name', $cat_id);
	$this->db->where('subcategories.subcategory_name', $subcat_id);
	$this->db->where('products.item_status', 1);
		$query=$this->db->get();	
	
return $query->num_rows();	
	
}
	
public function getproductdata($cat_id,$subcat_id,$limit,$offset)

{
	$location = $this->session->userdata('location_name');
$this->db->select('*');
	$this->db->from('products');
	$this->db->join('category', 'category.category_id = products.category_id');
    $this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id');
	$this->db->join('sellers', 'sellers.seller_id = products.seller_id');
	$this->db->where('category.category_name', $cat_id);
	$this->db->where('subcategories.subcategory_name', $subcat_id);
	$this->db->where('products.item_status', 1);
	$this->db->where('sellers.seller_location', $location);
	$this->db->limit( $limit, $offset );
		$query=$this->db->get();
		return $query->result();	
	
	
	
	

}	

public function getcategories()	
{
	$this->db->select('*')->from('category');
		return $this->db->get()->result_array();
}
public function getsubcategories($subcatid)	
{
		$this->db->select('subcategories.*,category.category_name')->from('subcategories');
		$this->db->join('category', 'category.category_id = subcategories.category_id', 'left');

		$this->db->where('subcategories.subcategory_id', $subcatid);

		return $this->db->get()->result_array();
}
public function getproducts($subid)	
{
		$this->db->select('products.*,category.category_name,subcategories.subcategory_name')->from('products');
		$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');
		$this->db->join('category', 'category.category_id = subcategories.category_id', 'left');

		$this->db->where('products.subcategory_id', $subid);

		return $this->db->get()->result_array();
}
	
	public function get_all_category_with_products()
	{
	
		$this->db->select('category.category_name,category.category_id,')->from('products');
		$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');	
		$this->db->join('category', 'category.category_id =products.category_id', 'left');
		$this->db->group_by('category.category_id');
		$this->db->order_by('category.category_id', 'ASC');
		$this->db->where('category.status', 1);		
		return $this->db->get()->result_array();
	}
	public function get_sidebar_category_list()
	{
		$this->db->select('category.category_name,category.category_id,,category.category_image')->from('products');
		$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');	
		$this->db->join('category', 'category.category_id =products.category_id', 'left');
		$this->db->group_by('category.category_id');
		$this->db->order_by('category.category_id', 'ASC');
		$this->db->where('category.status', 1);		
		return $this->db->get()->result_array();
	}
	
	
	public function getcatsubcatpro()
	{
	
		$this->db->select('category.category_name,category.category_id,')->from('products');
		$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');	
		$this->db->join('category', 'category.category_id =products.category_id', 'left');

		$this->db->group_by('category.category_id');
		$this->db->order_by('category.category_id', 'ASC');
		$this->db->where('category.status', 1);		
		$this->db->where('products.item_status', 1);		
		$query=$this->db->get()->result_array();
		
		//echo '<pre>';print_r($query);exit;
		 foreach($query as $category)
        {
         
		 $return[$category['category_name']] = $category;
		 $return[$category['category_name']]['subcat'] = $this->get_catedata($category['category_id']);


        
		}
		if(!empty($return))
    {
    return $return;
}
	
	}
public function get_catedata($category_id)
{
  
	$this->db->select('subcategories.subcategory_name,subcategories.subcategory_id,category.category_name')->from('products');
	$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');	
	$this->db->join('category', 'category.category_id =products.category_id', 'left');
	$this->db->group_by('subcategories.subcategory_id');
	$this->db->order_by('subcategories.subcategory_id', 'ASC'); 
	$this->db->where('subcategories.category_id', $category_id);	
	$this->db->where('subcategories.subcategory_id !=', '');
	$this->db->where('products.item_status', 1);	
	$query=$this->db->get()->result_array();
	//echo '<pre>';print_r($query);exit;
	 foreach($query as $subcategory)
	{
	 $return[$subcategory['subcategory_name']] = $subcategory;
	 $return[$subcategory['subcategory_name']]['subitem_list'] = $this->get_subcatedata($subcategory['subcategory_id']);

	}
	if(!empty($return))
    {
    return $return;
}
}

public function get_subcatedata($subcategory_id)
{
	
	//echo '<pre>';print_r($subcategory_id);exit;
	$this->db->select('sub_items.*')->from('products');
	$this->db->join('sub_items', 'sub_items.subitem_id = products.subitemid', 'left');	
    $this->db->where('products.subcategory_id', $subcategory_id);
    $this->db->where('products.subitemid !=', '');
    $this->db->where('sub_items.subitem_id !=', '');
	$this->db->group_by('products.subitemid');
	$this->db->where('products.item_status', 1);	
	 return $this->db->get()->result_array();
}
	
public function getsubcatdata($cat_id)

{


$this->db->select('*');
	$this->db->from('subcategories');
	$this->db->join('category', 'category.category_id = subcategories.category_id');
  
	$this->db->where('category.category_name', $cat_id);
	
		$query=$this->db->get();
		return $query->result();	

}	
	public function getlocations()

	{
	$this->db->select('*')->from('locations');
	return $this->db->get()->result_array();
	}
	public function getlocations_insession($data)

	{
		
		$this->db->select('*')->from('locations');
		$this->db->where_in('location_name',$data);
		return $this->db->get()->row_array();
	}	
	
/*    login and signup      */	


public function checkuserEmail($email)
    {
    $this->db->where('user_email',$email);
	//$this->db->where('user_type',$user_type);
    $query = $this->db->get('user');
    if ($query->num_rows() > 0){
        return 1;
    }
    else{
        return 0;
    }
}

public function userinsert($obj)
{

 $this->db->insert('user',$obj);

    return $this->db->insert_id();


}

public function authenticate($username, $password) {
        //$encrypted_password = ($password);

          $this->db->where('user_email',$username);
      $this->db->where('user_password',$password);
	  //$this->db->where('status', 1);
       $user=$this->db->get('user');
       //print_r($user->result()); exit;
        if (!is_null($user)) {
            return $user->row();

        }
        return FALSE;
    }

public function updatetime($user_id,$updated)
{
$this->db->where('user_id',$user_id);

    $query=$this->db->update('user',$updated);

    return $query; 


}

public function sendEmail($to_email)
    {
		//echo $to_email; exit;
         //$x=$this->encrypt->encode($to_email);
		//$x=str_replace(array('+', '/', '='), array('-', '_', '~'), $x);
        $from_email = 'mails@dev2.kateit.in'; //change this to yours
        $subject = 'Verify Your Email Address';
   		$message = "Dear User,<br>                
		Your Successfully registered<br><br>  Thanks,<br>Cart in hour"; 
        //send mail
		//$this->email->set_mailtype("html");
        $this->email->from($from_email, 'Cart in hour');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();	
		
		
			
    } 
	
public function verifyEmailID($key1)
    {
		//print_r($key1); exit;
        $data = array('status' => 1);
        $this->db->where('user_email', $key1);
        return $this->db->update('user', $data);
    }
	
public function getregstatus($email)
{
	
	$this->db->where('user_email',$email);
		$query = $this->db->get('user');
		//print_r($query->result()); exit;
		return $query->row();
	
	
}	
public function checkEmailExits($email)
	{
	$query = $this->db->query("select * from user where user_email='$email' and status=1");
	//echo  $this->db->last_query();
	return $query->result_array();
	}
	
public function updateforgotstatus($email)
{
	$data = array('forgot_status' => 1);
	$this->db->where('user_email', $email);
     return $this->db->update('user', $data);
	
	
	
}	

public function get_prodcut_id($name)
{
	$this->db->select('products.item_id')->from('products');
	$this->db->like('item_name', $name);
	return $this->db->get()->row_array();
}
public function get_prodcut_id1($name)
{
	$this->db->select('subcategories.subcategory_id,subcategories.subcategory_name,subcategories.category_id')->from('subcategories');
	$this->db->where('subcategory_name', $name);
	$this->db->where('status',1);
	return $this->db->get()->row_array();
}
public function get_prodcut_id2($name,$colour)
{
	$this->db->select('products.item_id')->from('products');
	$this->db->where('item_name', $name);
	$this->db->where('colour', $colour);
	return $this->db->get()->row_array();
}
public function updateforgotstatus1($email)
{
	$data = array('forgot_status' => 0);
	$this->db->where('user_email', $email);
     return $this->db->update('user', $data);
	
	
	
}	

public function getforgotstatus($email)
{
	
	$this->db->where('user_email',$email);
		$query = $this->db->get('user');
		//print_r($query->result()); exit;
		return $query->row();
	
	
}


public function getsingleproduct($id)
{
	
	
	$this->db->where('item_id',$id);
		$query = $this->db->get('products');
		//print_r($query->result()); exit;
		return $query->row();
	
	
	
	
	
	
	
	
	
}


public function getmultipleimag($id)
{
	
$this->db->where('product_id',$id);
		$query = $this->db->get('products_imgs');
		//print_r($query->result()); exit;
		return $query->result();	
	
}


public function getsubcategoryid($id)
{
	//$this->db->select('subcategory_id');
	$this->db->where('item_id',$id);
		$query = $this->db->get('products');
		//print_r($query->result()); exit;
		return $query->row();	
	
	
	
	
	
	
}




public function getsimilarproducts($id)
{
	
$this->db->where('subcategory_id',$id);
		$query = $this->db->get('products');
		//print_r($query->result()); exit;
		return $query->result();
	
}

public function get_quickjump(){
	$this->db->select('COUNT(order_items.item_id) as count,products.item_id,products.category_id,products.subcategory_id,category.category_name,subcategories.subcategory_name')->from('order_items');
	$this->db->join('products', 'products.item_id = order_items.item_id', 'left');	
	$this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id', 'left');	
	$this->db->join('category', 'category.category_id = products.category_id', 'left');	
	$this->db->where('products.item_status',1);
	$this->db->group_by('order_items.item_id');
	$this->db->order_by("COUNT(order_items.item_id)", "DESC");

	$this->db->limit(8);
	return $this->db->get()->result_array();
		/*$sql="SELECT COUNT(item_id), item_id FROM order_items GROUP BY item_id ORDER BY COUNT(item_id) DESC";
        return $this->db->query($sql)->result_array();*/
	
}
public function get_quickjump_details($subcatid){
	$this->db->select('*')->from('subcategories');
	$this->db->where('subcategory_id',$subcatid);
	return $this->db->get()->row_array();
		/*$sql="SELECT COUNT(item_id), item_id FROM order_items GROUP BY item_id ORDER BY COUNT(item_id) DESC";
        return $this->db->query($sql)->result_array();*/
	
}
public function get_homepage_position_two_banner($position){
	$date = new DateTime("now");
 	$curr_date = $date->format('Y-m-d h:i:s A');
	$this->db->select('*')->from('homepage_banners');
	$this->db->where('position',$position);
	$this->db->where('homepage_banners.expirydate >=', $curr_date);
	$this->db->where('status',1);
	$this->db->where('admin_status',1);
	return $this->db->get()->result_array();
}
public function get_homepage_position_three_banner($position){
	$date = new DateTime("now");
 	$curr_date = $date->format('Y-m-d h:i:s A');
	$this->db->select('*')->from('homepage_banners');
	$this->db->where('position',$position);
	$this->db->where('homepage_banners.expirydate >=', $curr_date);
	$this->db->where('status',1);
	$this->db->where('admin_status',1);
	return $this->db->get()->result_array();
}public function get_homepage_position_four_banner($position){
	$date = new DateTime("now");
 	$curr_date = $date->format('Y-m-d h:i:s A');
	$this->db->select('*')->from('homepage_banners');
	$this->db->where('position',$position);
	$this->db->where('homepage_banners.expirydate >=', $curr_date);
	$this->db->where('status',1);
	$this->db->where('admin_status',1);
	return $this->db->get()->result_array();
}
public  function recently_viewed_producrs(){
	$this->db->select('products.item_id,products.category_id,products.subcategory_id,products.subitemid,products.itemwise_id,products.item_name,products.item_status,products.item_cost,products.special_price,products.item_quantity,products.offer_percentage,products.offer_amount,products.offer_expairdate,products.offer_type,products.discount,products.offers,products.item_image')->from('vewed_products');
	$this->db->join('products', 'products.item_id = vewed_products.item_id', 'left'); //
	$this->db->where('products.item_id !=','');
	$this->db->group_by('vewed_products.item_id');
	return $this->db->get()->result_array(); 
}
public function get_subcategory_list(){
	$this->db->select('*')->from('subcategories');
	$this->db->where('status',1);
	return $this->db->get()->result_array();
		
	
}
public function get_all_namechanges_list_products(){
	$this->db->select('products.item_id,products.item_name,products.colour,products.internal_memeory,products.ram,products.name')->from('products');
	$this->db->where('item_status',1);
	$this->db->where('category_id',20);
	return $this->db->get()->result_array();
		
	
}
public function update_names($id,$name)
	{
	$sql1="UPDATE products SET item_name ='".$name."' WHERE item_id = '".$id."'";
       	return $this->db->query($sql1);

	}
	public function get_all_percentage_list_products(){
	$this->db->select('products.item_id,products.item_name,products.item_cost,products.special_price,products.offer_expairdate,products.discount,products.offers')->from('products');
	$this->db->where('item_status',1);
	//$this->db->where('category_id',20);
	return $this->db->get()->result_array();
	}
	public function update_discount($id,$dis,$off)
	{
	$sql1="UPDATE products SET offers ='".$off."',discount ='".$dis."' WHERE item_id = '".$id."'";
       	return $this->db->query($sql1);

	}
	
	
	/* category wise products list*/
	public function get_category_wise_products_list()
	{
	
		$this->db->select('category.category_name,category.category_id,category.category_image')->from('products');
		$this->db->join('category', 'category.category_id =products.category_id', 'left');
		$this->db->group_by('category.category_id');
		$this->db->order_by('category.category_id', 'asc');
		$this->db->where('category.status', 1);		
		$return= $this->db->get()->result_array();
		foreach ($return as $li){
			//echo '<pre>';print_r($lists);
		$catdata[$li['category_id']]=$li;
		$catdata[$li['category_id']]['plist']=$this->get_products_lists($li['category_id']);
			
		}
		
		//echo '<pre>';print_r($catdata);
			if(!empty($catdata))
			{
			return $catdata;
			}

	}
	public function get_products_lists($catid){
		
		$this->db->select('products.item_id,products.item_name,products.item_cost,products.special_price,products.offer_expairdate,products.discount,products.offers,products.item_quantity,products.item_status,products.offer_amount,products.category_id,products.offer_percentage,products.item_image')->from('products');
        $this->db->where('products.category_id',$catid);
		return $this->db->get()->result_array();
		
	}
	















	
	
}
	