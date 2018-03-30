<?php
//include(CLASS_DIR . 'inc.class.cart.php');
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
}