<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products_model extends MY_Model 
{

	protected $_table="products";

		protected $primary_key="item_id";

		protected $soft_delete = FALSE;

		//public $before_create = array( 'created_at', 'updated_at' );

		//public $before_update = array( 'updated_at' );
		
	public function __construct()

	{
	parent::__construct();

	}
	public function get_typeahead_products()
	{
		$this->db->select('products.item_name')->from('products');
		$this->db->where('item_status',1);
        return $this->db->get()->result_array();
	}
	function get_sae_product_details($name,$catid,$subcat)
    {
	   $sql = "SELECT * FROM products WHERE category_id ='".$catid."' AND subcategory_id='".$subcat."' AND item_name='".$name."' ORDER BY item_id DESC LIMIT 1";
        return $this->db->query($sql)->row_array();
     }
	 function get_name_existss($name)
    {
	   $sql = "SELECT * FROM category WHERE category_name ='".$name."' AND status='1'";
        return $this->db->query($sql)->row_array();
     }
	 function get_subcatname_existss($name)
    {
	   $sql = "SELECT * FROM subcategories WHERE subcategory_name ='".$name."' AND status='1'";
        return $this->db->query($sql)->row_array();
     }
	 function insert_cat_data($data){
		$this->db->insert('category', $data);
		return $insert_id = $this->db->insert_id();
	}
	function save_sub_categories($data){
		$this->db->insert('subcategories', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public function get_seller_catdata($sid)
	{
		$this->db->select('seller_categories.*,category.documetfile')->from('seller_categories');
		$this->db->join('category', 'category.category_id = seller_categories.seller_category_id', 'left');
		$this->db->where('seller_categories.seller_id',$sid);
        return $this->db->get()->result_array();
	}
	
	public function update_product_status($pid,$data){
		$this->db->where('item_id', $pid);
		return $this->db->update('products', $data);
	}
	public function get_seller_products($sid)
	{
		$this->db->select('*')->from('products');
		$this->db->where('seller_id',$sid);
		$this->db->where('item_status',1);
        return $this->db->get()->result_array();
	}
	public function get_seller_details($sid)
	{
		$this->db->select('sellers.seller_id,sellers.status')->from('sellers');
		$this->db->where('seller_id',$sid);
        return $this->db->get()->row_array();
	}
	public function get_subcategoies($cid)
	{
		$this->db->select('*')->from('subcategories');
		$this->db->where('category_id',$cid);
		$this->db->where('status',1);
        return $this->db->get()->result_array();
	}
	public function get_colores()
	{
		$this->db->select('*')->from('colorslist');
		$this->db->where('status',1);
        return $this->db->get()->result_array();
	}
	public function get_sizes_list()
	{
		$this->db->select('*')->from('sizes_list');
		$this->db->where('status',1);
        return $this->db->get()->result_array();
	}
	public function get_uksizes_list()
	{
		$this->db->select('*')->from('uk_sizes_list');
		$this->db->where('status',1);
        return $this->db->get()->result_array();
	}
	public function save_prodcts($data)
	{
		
		$this->db->insert('products', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function update_deails($pid,$data){
		$this->db->where('item_id', $pid);
		return $this->db->update('products', $data);
	}
	public function insert_product_sizes($data)
	{
		
		$this->db->insert('product_size_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function insert_product_uksizes($data)
	{
		
		$this->db->insert('product_uksize_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function insert_product_colors($data)
	{
		
		$this->db->insert('product_color_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function insert_product_descriptions($data)
	{
		
		$this->db->insert('descrotion_list', $data);
		return $insert_id = $this->db->insert_id();
	} 
	public function get_producr_details($id)
	{
		$this->db->select('*')->from('products');
		$this->db->where('item_id',$id);
        return $this->db->get()->row_array();
	}
	public function get_subcategory_document($id)
	{
		$this->db->select('subcategories.document')->from('subcategories');
		$this->db->where('subcategory_id',$id);
        return $this->db->get()->row_array();
	}
	public function get_skuid_exists($skuid)
	{
		$this->db->select('*')->from('products');
		$this->db->where('skuid',$skuid);
        return $this->db->get()->row_array();
	} 
	public function getcatdata()
	{
		
		$this->db->select('*')->from('category');
		$this->db->where('status',1);
        return $this->db->get()->result_array();

		
	}
	public function auto_items()
	{
		
		$query=$this->db->get('items');
		return $query->result_array();

		
	}
	public function getcateditdata()
	{
		
		$query=$this->db->get('category');
		return $query->result();
		
	}
	
	
	public function getitems($cat_id,$subcat_id)
	{
		$sid = $this->session->userdata('seller_id');  
		
	$this->db->select('*');
	$this->db->from('products');
    $this->db->where('category_id', $cat_id);
	$this->db->where('subcategory_id', $subcat_id);
	$this->db->where('seller_id', $sid);
	
    $query = $this->db->get();
    
    return $query->result();
		
		
	}
	

	public function get_areas($term){
    $this->db->like('item_name', $term, 'after');
    $query = $this->db->get('items');
    return $query->result(); 
}	
public function get_store_location($sid){
   $this->db->select('seller_store_details.area')->from('seller_store_details');
   $this->db->where('seller_id',$sid);
return $this->db->get()->row_array();
}
	
	
public function getsubcatdata($cat_id)
	{
	$sid = $this->session->userdata('seller_id');
	$this->db->select('*');
	$this->db->from('products');
	$this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
	$this->db->where('products.category_id', $cat_id);
	$this->db->group_by('products.subcategory_id');
	$query=$this->db->get();
	return $query->result();
		
	}
		
	
	
	// item data
	public function getsubitemdata($subcat_id)
 {
  
  $this->db->select('*');
 $this->db->from('sub_items');
 $this->db->where('sub_items.subcategory_id', $subcat_id);
  $query=$this->db->get();
  return $query->result();
  
 }
 


public function getproductdata($id)
{
	$sid = $this->session->userdata('seller_id');
	$this->db->select('products.*,subcategories.subcategory_name');
	$this->db->from('products');
	$this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
	$this->db->join('category', 'category.category_id =products.category_id');
	$this->db->where('products.item_id', $id);
	$this->db->where('products.seller_id', $sid);
	$query=$this->db->get();
	return $query->row_array();
	
}
function remove_desc($id){
		$sql1="DELETE FROM descrotion_list WHERE desc_id = '".$id."'";
		return $this->db->query($sql1);
	}
	function delete_product_colors($id){
		$sql1="DELETE FROM product_color_list WHERE p_color_id = '".$id."'";
		return $this->db->query($sql1);
	}
	function delete_product_sizes($id){
		$sql1="DELETE FROM product_size_list WHERE p_size_id = '".$id."'";
		return $this->db->query($sql1);
	}
	function product_uksize_list($id){
		$sql1="DELETE FROM product_uksize_list WHERE p_size_id = '".$id."'";
		return $this->db->query($sql1);
	}
	function delete_product_spc($id){
		$sql1="DELETE FROM product_spcifications WHERE specification_id = '".$id."'";
		return $this->db->query($sql1);
	}
public function get_product_colors($pid){
		$this->db->select('*')->from('product_color_list');
		$this->db->where('item_id',$pid);
		return $this->db->get()->result_array();
	}
	public function get_product_sizes($pid){
		$this->db->select('*')->from('product_size_list');
		$this->db->where('item_id',$pid);
		return $this->db->get()->result_array();
	}
	public function get_product_uksizes($pid){
		$this->db->select('*')->from('product_uksize_list');
		$this->db->where('item_id',$pid);
		return $this->db->get()->result_array();
	}
	public function get_product_desc($pid){
		$this->db->select('*')->from('descrotion_list');
		$this->db->where('item_id',$pid);
		return $this->db->get()->result_array();
	}
	public function delete_oldproducts_desc($id){
		$sql1="DELETE FROM descrotion_list WHERE desc_id = '".$id."'";
		return $this->db->query($sql1);
	}
	

public function getcatname($cat_id)
{
	
	$this->db->select('category_name');
	$this->db->from('category');
	$this->db->where('category_id', $cat_id);
	$query=$this->db->get();
	return $query->row();
	
	
	
	
}

public function getsubcatname($subcat_id)
{
	
	$this->db->select('subcategory_name');
	$this->db->from('subcategories');
	$this->db->where('subcategory_id', $subcat_id);
	$query=$this->db->get();
	return $query->row();
}

function search($match,$cat_id,$subcat_id)	
{
    $sid = $this->session->userdata('seller_id');
	$this->db->select('*');
	$this->db->from('products');
	
	$this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
   
   
	//$this->db->like('subcategories.subcategory_name',$match);
	//$this->db->or_like('category.category_name',$match);
       $this->db->where('products.seller_id',$sid);
		$this->db->where('products.category_id', $cat_id);
	$this->db->where('products.subcategory_id', $subcat_id);
	$this->db->like('products.item_name',$match);
	//$this->db->or_like('products.item_code',$match);
	$query = $this->db->get();
	return $query->result();
}


public function getcatsubcatpro()

{
	
	$sid = $this->session->userdata('seller_id');
	$this->db->select('category.*');
    $this->db->from('products');
	$this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
	$this->db->join('category', 'category.category_id =products.category_id');
	$this->db->where('products.seller_id',$sid);
	$this->db->group_by('category.category_name');
	$query = $this->db->get();
	//echo '<pre>';print_r($query);exit;
	
	
	
	
	 foreach ($query->result() as $category)
        {
            $return[$category->category_id] = $category;

        $return[$category->category_id]->docs = $this->get_catedata($category->category_id);
        

        
    }
    //print "<pre>";
//print_r($return); 
//print "<pre>"; exit;
     if(!empty($return))
    {
    return $return;
}
	
	
}

public function get_catedata($category_id)
{
  $sid = $this->session->userdata('seller_id');
    $this->db->select('subcategories.*');
    $this->db->from('products');
    $this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
   $this->db->where('products.category_id', $category_id);
    $this->db->where('products.seller_id', $sid);
	$this->db->group_by('subcategories.subcategory_name');
    $query = $this->db->get();
    
    //return $query->result();
	
	
	 foreach ($query->result() as $subcategory)
        {
            $return[$subcategory->subcategory_id] = $subcategory;

        $return[$subcategory->subcategory_id]->docs12 = $this->get_subcatedata($subcategory->subcategory_id);
        

        
    }
    //print "<pre>";
//print_r($return); 
//print "<pre>"; exit;
     if(!empty($return))
    {
    return $return;
}	
}


public function get_subcatedata($subcategory_id)
{
	
	$sid = $this->session->userdata('seller_id');
    $this->db->select('*');
    $this->db->from('products');
    $this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
   $this->db->where('products.subcategory_id', $subcategory_id);
    $this->db->where('products.seller_id', $sid);    
	//$this->db->group_by('subcategories.subcategory_name');
    $query = $this->db->get();
    
    return $query->result();
	
	
	
	
	
	
	
	
}

public function returns()

{
	$sid = $this->session->userdata('seller_id');
	$this->db->select('order_status.status_confirmation,order_status.status_packing,order_status.status_road,order_status.status_deliverd,order_status.status_refund,order_items.*,products.item_name,customers.cust_firstname,customers.cust_lastname,customers.cust_email,customers.cust_mobile,customers.address1,billing_address.name')->from('order_items');
	$this->db->join('products', 'products.item_id = order_items.item_id','left');
	$this->db->join('customers', 'customers.customer_id = order_items.customer_id','left');
	$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
	$this->db->join('billing_address', 'billing_address.order_id = order_items.order_id','left');

	$this->db->where('order_items.seller_id',$sid);
	//$this->db->where('order_status.status_deliverd=',4);
	$this->db->where('order_status.status_refund is NOT NULL', NULL, False);
	$this->db->order_by('order_items.order_item_id','desc');
	return $this->db->get()->result();
}

public function getproductapproval()
{
	$sid = $this->session->userdata('seller_id');
	$this->db->select('*');
	$this->db->from('products');
	$this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
	$this->db->where('products.seller_id', $sid);
	 
		$query=$this->db->get();
		return $query->result();
	
}
 function save_imageurl_data($data){
		$this->db->insert('image_urls', $data);
		return $insert_id = $this->db->insert_id();
	} 
	function get_images_list($id){
		$this->db->select('*')->from('image_urls');
		$this->db->where('seller_id',$id);
		return $this->db->get()->result_array();
	}
	public function get_subitem_list_subcategorywise($subcat_id)
	{
		$this->db->select('*')->from('sub_items');
		$this->db->where('status',1);
		$this->db->where('subcategory_id',$subcat_id);
		return $this->db->get()->result_array();
		
	}
	public function get_subitem_wise_item_list($subitemid)
	{
		$this->db->select('*')->from('items_list');
		$this->db->where('status',1);
		$this->db->where('subitemid',$subitemid);
		return $this->db->get()->result_array();
		
	}
	public function get_product_details($pid){
		$this->db->select('products.item_id,products.item_cost,products.special_price,products.subcategory_id,products.name,products.colour,products.ram,products.internal_memeory')->from('products');
		$this->db->where('item_id',$pid);
		return $this->db->get()->row_array();
	}
	public function get_related_products_names_list($name){
		$this->db->select('products.item_name')->from('products');
		$this->db->like('item_name',$name);
		return $this->db->get()->result_array();
	}
	
}