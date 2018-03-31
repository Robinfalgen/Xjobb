<?php
include_once(CLASS_DIR . 'inc.class.cart.php');
require_once(INCLUDES_FOLDER.'db.conn.inc.php');

class checkoutClass
 
{
	public $user_id;
	public $fname;
	public $lname;
	public $email;
	public $address;
	public $zip;
	public $city;
	public $phonenr;

	public function checkout()
	{

	$connect = new DBconn;
	$conn = $connect->conn();
	$sql = "SELECT * FROM users WHERE user_id=:uid";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":uid", $_SESSION["users"]);
	$stmt->execute();

	$userData = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$member = array();
	foreach($userData as $userInfo) {
		$this->user_id = $userInfo['user_id'];
		$this->fname = $userInfo['fname'];
		$this->lname = $userInfo['lname'];
		$this->email = $userInfo['email'];
		$this->address = $userInfo['address'];
		$this->zip = $userInfo['zip'];
		$this->city = $userInfo['city'];
		$this->phonenr = $userInfo['phone'];
	}
	}
	public function setOrderData()
	{
	
	
	
	
	if ($_SESSION['users'] == null){
		$user = "ejInloggad";
	}else{
		$user = $_SESSION['users'];
	}

	
	if (isset($_POST['checkout']))
	{ 

	$connect = new DBconn;
	$conn = $connect->conn();
	$sql = "INSERT INTO `orders`( `user_id`,  `payment`, `lev_fname`, `lev_lname`, `email`, `phone`, `lev_adress`, `lev_city`, `lec_zip`, `fraktsatt`) VALUES (:paramUsrId, :paramPay, :paramLevFname, :paramLevLname, :paramEmail, :paramPhone, :paramAdress, :paramCity, :paramZip, :paramFrakt)"	;
	


	
	

	$orderfname = $_POST['checkout']['fname'];
	$orderlname = $_POST['checkout']['lname'];
	$orderemail = $_POST['checkout']['email'];
	$orderphone = $_POST['checkout']['phone'];
	$orderadress = $_POST['checkout']['adress'];
	$orderzip = $_POST['checkout']['zip'];
	$ordercity = $_POST['checkout']['city'];
	$orderpay = $_POST['checkout']['betalning'];
	$orderfrakt =  $_POST['checkout']['frakt'];
	
	$orderuserid = $user;


	




	


	$stmt = $conn->prepare($sql);
		
	$stmt->bindParam(':paramUsrId', $orderuserid);
	
	$stmt->bindParam(':paramLevFname', $orderfname);
	$stmt->bindParam(':paramLevLname', $orderlname);
	$stmt->bindParam(':paramEmail', $orderemail);
	$stmt->bindParam(':paramPhone', $orderphone);
	$stmt->bindParam(':paramAdress', $orderadress);
	$stmt->bindParam(':paramZip', $orderzip);
	$stmt->bindParam(':paramCity', $ordercity);
	$stmt->bindParam(':paramPay', $orderpay);
	$stmt->bindParam(':paramFrakt', $orderfrakt);
	$stmt->execute();









	
	
	$cart = new Cart;
	$cart->getCartItems();
	$cart = get_object_vars($cart);
	
	$last_id = $conn->lastInsertId();
	





foreach ($cart['cart']['cartItems'] as $key => $value) {
		$sql ="INSERT INTO `order_item`(`pid`, `qty`, `order_id`, `product_title`, `product_price`)
			VALUES ('".$key."','".$value['qty']."','".$last_id."','".$value['name']."','".$value['price']."')";
		 $conn->exec($sql);
		 }




		


}
}
}



