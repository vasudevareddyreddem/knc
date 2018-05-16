<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deliveryboyapi_model extends MY_Model 

{
	public function __construct()
	{

	parent::__construct();

	}

	public function login_customer($username,$password){

	$sql = "SELECT * FROM customers WHERE (cust_email ='".$username."' AND cust_password ='".md5($password)."') OR (cust_mobile ='".$username."' AND cust_password ='".md5($password)."')";
	return $this->db->query($sql)->row();
	}
	public function get_deliveryboy_details($cust_id,$role){

		$this->db->select('*')->from('customers');
		$this->db->where('customer_id',$cust_id);
		$this->db->where('role_id',$role);
		return $this->db->get()->row_array();
	}
	public function update_deliveryboy_address($cust_id,$add){

		//$sql1="UPDATE customers SET deliveryboy_current_location ='".$add."' WHERE customer_id = '".$cust_id."'";
       	//return $this->db->query($sql1);
		$this->db->where('customer_id', $cust_id);
		return $this->db->update('customers', $add);
	}
	public function order_status_updated($cust_id,$order_item_id,$status,$status1){

		$sql1="UPDATE order_items SET  deliveryboy_status ='".$status."',delivery_boy_assign ='".$status1."' WHERE order_item_id = '".$order_item_id."'";
       	return $this->db->query($sql1);
	}
	public function order_Packing_status_updated($order_item_id,$status){

		$sql1="UPDATE order_status SET status_packing ='".$status."' WHERE order_item_id = '".$order_item_id."'";
       	return $this->db->query($sql1);
	}
	public function order_road_status_updated($order_item_id,$status){

		$sql1="UPDATE order_status SET status_road ='".$status."' WHERE order_item_id = '".$order_item_id."'";
       	return $this->db->query($sql1);
	}
	public function order_delivered_status_updated($order_item_id,$status){

		$sql1="UPDATE order_status SET status_deliverd ='".$status."' WHERE order_item_id = '".$order_item_id."'";
       	return $this->db->query($sql1);
	}
	public function check_login_customer($customer_id,$status){

		$sql1="UPDATE customers SET current_login ='".$status."' WHERE customer_id = '".$customer_id."'";
       	return $this->db->query($sql1);
	}
	public function get_deliver_boy_orders_list($cust_id){
		$this->db->select('orders.payment_type,orders.amount_status,(order_items.order_item_id) as orderid,order_items.amount_status_paid,order_items.delivery_boy_id,order_items.customer_email,order_items.customer_phone,order_items.customer_address,order_items.landmark,order_items.pincode,(seller_store_details.addrees1) as selleradd1,(seller_store_details.addrees2) as selleradd2,(seller_store_details.pin_code) as sellerpincode,sellers.seller_mobile,order_status.status_refund as cancelstatus')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('sellers', 'sellers.seller_id = order_items.seller_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->join('orders', 'orders.order_id = order_items.order_id', 'left');
		$this->db->where('order_items.delivery_boy_id',$cust_id);
		$this->db->where('order_status.status_deliverd !=',1);
		$this->db->where('order_status.status_deliverd !=',4);
		$this->db->order_by('order_status.order_item_id', 'desc'); 

		return $this->db->get()->result_array();
	}
	
	public function get_deliver_boy_orders_reject_orderlist($cust_id){
		$this->db->select('order_items.order_item_id as orderid,order_items.customer_email,order_items.customer_phone,order_items.customer_address,order_items.landmark,order_items.pincode,(seller_store_details.addrees1) as selleradd1,(seller_store_details.addrees2) as selleradd2,(seller_store_details.pin_code) as sellerpincode,sellers.seller_mobile')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('sellers', 'sellers.seller_id = order_items.seller_id', 'left');
		$this->db->join('rejected_orders_list', 'rejected_orders_list.order_item_id = order_items.order_item_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->where('rejected_orders_list.delivery_boy_id',$cust_id);
		return $this->db->get()->result();
	}
	public function get_deliver_boy_orders_reject_list($cust_id){
		$this->db->select('rejected_orders_list.order_item_id as orderid,rejected_orders_list.delivery_boy_id')->from('rejected_orders_list');
		$this->db->where('rejected_orders_list.delivery_boy_id',$cust_id);
		return $this->db->get()->result_array();
	
	}
	
	public function insertrected_order_id($data){
		$this->db->insert('rejected_orders_list', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function rejected_lists(){
		$this->db->select('*')->from('rejected_orders_list');
		return $this->db->get()->result_array();
	}
	public function get_order_details($id){
		$this->db->select('(order_items.order_item_id) as orderid,order_items.customer_id,order_items.item_price,order_items.qty,order_items.total_price,order_items.delivery_amount,order_items.payment_type,order_items.amount_status_paid,order_items.delivery_boy_id,order_items.customer_email,order_items.customer_phone,order_items.customer_address,order_items.landmark,order_items.pincode,(seller_store_details.addrees1) as selleradd1,(seller_store_details.addrees2) as selleradd2,(seller_store_details.pin_code) as sellerpincode,sellers.seller_mobile,sellers.seller_name')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('sellers', 'sellers.seller_id = order_items.seller_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->where('order_items.order_item_id',$id);
		return $this->db->get()->row_array();
	}
	public function get_order_details_status($order_item_id,$amount,$status,$payment,$date,$signatur){
		$sql1="UPDATE order_items SET amount_status_paid ='".$status."', payment_type ='".$payment."', completed_date ='".$date."', singature ='".$signatur."' WHERE order_item_id = '".$order_item_id."'";
       	return $this->db->query($sql1);
	}
	
	public function get_delivered_orders_list($cust_id){
		$this->db->select('order_items.order_item_id as orderid,order_items.completed_date,order_items.create_at as created_date,order_items.customer_email,order_items.customer_phone,order_items.customer_address,order_items.landmark,order_items.pincode,(seller_store_details.addrees1) as selleradd1,(seller_store_details.addrees2) as selleradd2,(seller_store_details.pin_code) as sellerpincode,sellers.seller_mobile')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('sellers', 'sellers.seller_id = order_items.seller_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->where('order_status.status_deliverd',4);
		$this->db->where('order_items.delivery_boy_id',$cust_id);
		return $this->db->get()->result_array();
	}
	public function get_order_item_details($ordeitemid){
		$this->db->select('order_items.*,products.item_name,products.colour,products.ram,products.internal_memeory')->from('order_items');
		$this->db->join('products', 'products.item_id = order_items.item_id', 'left');
		$this->db->where('order_items.order_item_id',$ordeitemid);
		return $this->db->get()->row_array();
	}
	public function customer_active_status($cid,$status){

		$sql1="UPDATE customers SET active_status ='".$status."' WHERE customer_id = '".$cid."'";
       	return $this->db->query($sql1);
	}
	
	public function get_deliver_boy_orders_return_orderlist($cust_id){
		$this->db->select('order_items.order_item_id as orderid,order_items.customer_email,order_items.customer_phone,order_items.customer_address,order_items.landmark,order_items.pincode,(seller_store_details.addrees1) as selleradd1,(seller_store_details.addrees2) as selleradd2,(seller_store_details.pin_code) as sellerpincode,sellers.seller_mobile')->from('order_items');
		$this->db->join('seller_store_details', 'seller_store_details.seller_id = order_items.seller_id', 'left');
		$this->db->join('sellers', 'sellers.seller_id = order_items.seller_id', 'left');
		$this->db->join('order_status', 'order_status.order_item_id = order_items.order_item_id', 'left');
		$this->db->where('order_items.return_deliveryboy_id',$cust_id);
		return $this->db->get()->result();
	}
	
	public function order_payment_status($orderid,$status){
		$sql1="UPDATE orders SET payment_type ='".$status."' WHERE order_id = '".$orderid."'";
       	return $this->db->query($sql1);
	}
	public function get_orderitem_details($id){
		$this->db->select('order_items.total_price,order_items.delivery_amount,order_items.order_id')->from('order_items');
		$this->db->where('order_item_id',$id);
		return $this->db->get()->row_array();
	}
	
	
	


}