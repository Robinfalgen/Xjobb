<?php
//include_once(CLASS_DIR . 'inc.class.cart.php');
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
	
	
	
	$date = date("Y\-m\-d");
	if ($_SESSION['users'] == null){
		$user = "ejInloggad";
	}else{
		$user = $_SESSION['users'];
	}

	echo $user;
	if (isset($_POST['checkout']))
	{ 

	$connect = new DBconn;
	$conn = $connect->conn();
	$sql = "INSERT INTO `orders`(`user_id`, `buy_date`, `payment`, `lev_fname`, `lev_lname`, `email`, `phone`, `lev_adress`, `lev_city`, `lec_zip`,  `fraksatt`) 
	VALUES (:paramuid, :paramDate, :paramPay,:paramLevFname,:paramLevLname, :paramEmail, :paramPhone,:paramAdress,:paramZip,:paramCity,:paramFrakt)";

	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':paramuid', $user);
	$stmt->bindParam(':paramDate', $date);
	$stmt->bindParam(':paramLevFname', $_POST['checkout']['fname']);
	$stmt->bindParam(':paramLevLname', $_POST['checkout']['lname']);
	$stmt->bindParam(':paramEmail', $_POST['checkout']['email']);
	$stmt->bindParam(':paramPhone', $_POST['checkout']['phone']);
	$stmt->bindParam(':paramAdress', $_POST['checkout']['adress']);
	$stmt->bindParam(':paramZip', $_POST['checkout']['zip']);
	$stmt->bindParam(':paramCity', $_POST['checkout']['city']);
	$stmt->bindParam(':paramPay', $_POST['checkout']['betalning']);
	$stmt->bindParam(':paramFrakt', $_POST['checkout']['frakt']);
	$stmt->execute();
	var_dump($stmt);
	//var_dump($stmt);
	//echo"<br>";
	//var_dump($_POST);
	/*$cart = new Cart;
	$cart->getCartItems();
	$cart = get_object_vars($cart);*/
	//var_dump($cart);
	$last_id = $conn->lastInsertId();

	/*foreach ($cart['cart']['cartItems'] as $key => $value) {
		$sql ="INSERT INTO `order_items`( `pid`, `qty`, `order_id`, `prod_title`, `prod_price`)
		 VALUES ('".$key."','".$value['qty']."','".$last_id."','".$value['name']."','".$value['price']."')";
		 $conn->exec($sql);
		 }	
	*/
$conn->exec($sql);
var_dump($sql);	
}
}
}

var_dump($_SESSION);

