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
	
	public function getcatdata()
	{
		
		$query=$this->db->get('category');
		return $query->result();
		
	}
	
	
public function getsubcatdata($cat_id)
	{
		$sid = $this->session->userdata('seller_id');
		$this->db->select('*');
	$this->db->from('subcategories');
	
	
	$this->db->where('subcategories.category_id', $cat_id);
		$query=$this->db->get();
		return $query->result();
		
	}	
	
	
public function getproductdata($id)
{
	$sid = $this->session->userdata('seller_id');
	$this->db->select('*');
	$this->db->from('products');
	$this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
	$this->db->where('products.item_id', $id);
	
	$this->db->where('products.seller_id', $sid);
		$query=$this->db->get();
		return $query->row();
	
	
	
	
	
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
	$this->db->from('products');
	$this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
	$this->db->where('products.seller_id',$sid);
	$this->db->group_by('category.category_name');
	$query = $this->db->get();
	
	
	
	
	
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
    $this->db->select('*');
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
	$this->db->from('products');
	//$this->db->join('orders', 'orders.seller_id = products.seller_id');
	$this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
	$this->db->where('products.seller_id',$sid);
	//$this->db->where('orders.order_status','4');
	$this->db->group_by('category.category_name');
	$query = $this->db->get();
	
	
	
	
	
	 foreach ($query->result() as $category)
        {
            $return[$category->category_id] = $category;

        $return[$category->category_id]->returndocs = $this->get_returncatedata($category->category_id);
        

        
    }
    //print "<pre>";
//print_r($return); 
//print "<pre>"; exit;
     if(!empty($return))
    {
    return $return;
}

}
public function get_returncatedata($category_id)
{
  $sid = $this->session->userdata('seller_id');
    $this->db->select('*');
    $this->db->from('products');
	//$this->db->join('orders', 'orders.seller_id = products.seller_id');
    $this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
   //$this->db->where('orders.order_status','4');
   $this->db->where('products.category_id', $category_id);
    $this->db->where('products.seller_id', $sid);
	$this->db->group_by('subcategories.subcategory_name');
    $query = $this->db->get();
    
    //return $query->result();
	
	
	 foreach ($query->result() as $subcategory)
        {
            $return[$subcategory->subcategory_id] = $subcategory;

        $return[$subcategory->subcategory_id]->returndocs12 = $this->get_returnsubcatedata($subcategory->subcategory_id);
        

        
    }
    //print "<pre>";
//print_r($return); 
//print "<pre>"; exit;
     if(!empty($return))
    {
    return $return;
}
	
	
	
	
	
	
	
	
}


public function get_returnsubcatedata($subcategory_id)
{
	
	$sid = $this->session->userdata('seller_id');
    $this->db->select('*');
    $this->db->from('products');
	$this->db->join('orders', 'orders.seller_id = products.seller_id');
    $this->db->join('subcategories', 'subcategories.subcategory_id =products.subcategory_id');
   $this->db->join('category', 'category.category_id =products.category_id');
   $this->db->where('orders.order_status','4');
   $this->db->where('products.subcategory_id', $subcategory_id);
    $this->db->where('orders.seller_id', $sid);
	//$this->db->group_by('subcategories.subcategory_name');
    $query = $this->db->get();
    
    return $query->result();
	
	
	
	
	
	
	
	
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
	
public function insertmultiimages($images,$res){
	$sid= $this->session->userdata('seller_id');
	for($i=0; $i<count($images); $i++)
	{
	$data=array('seller_id'=>$sid,'product_id'=>$res,'image_name'=>$images[$i]);
	$this->db->insert('products_imgs',$data);
	}
	return true;
	}




	
}