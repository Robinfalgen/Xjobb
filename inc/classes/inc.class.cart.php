<?php
require_once (INCLUDES_FOLDER.'db.conn.inc.php'); 
class Cart {
	
	//public $prod;
	public $cart;
	public $totalSum;
	
	public function getCartItems(){
		$cart = array();
		if(isset($_SESSION['cart'])) {

			$idsInCart = array_keys($_SESSION['cart']);
			$idsInCart = implode($idsInCart, ',');
	
			$connect = new DBconn;
			$conn = $connect->conn();
			$sql = "SELECT products.product_id, products.product_price, products.product_title, products.product_thumb AS img FROM products
			WHERE product_id IN (" .$idsInCart . ")";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			
			$totalSum = 0;
			if(isset($result)) {
				foreach ($result as $product) {
					$prod = array();
					$prod['qty'] = $_SESSION['cart'][$product['product_id']];
					$prod['img'] = $product['img'];
					$prod['price'] = $product['product_price'];
					$prod['name'] = $product['product_title'];
					$prod['sum'] = $prod['price'] * $prod['qty'];
					$totalSum += $prod['sum'];
					
					$cart['cartItems'][$product['product_id']] = $prod;
				}
			}

			$cart['total'] = $totalSum;
			//$this->prod = $prod;
			$this->cart = $cart;
			$this->totalSum = $totalSum;
		}
	}
	public function cartController()
	{
		if(isset($_SERVER['HTTP_REFERER'])) {
			$referer_url = $_SERVER['HTTP_REFERER'];
		}else{
			$referer_url = "";
		}
		$_SESSION['cart'] === $pid = 0;	

		if (isset($_GET['action']) && $_GET['action'] == 'addtocart') {
			$pid = $_POST['pid'];
			$qty = $_POST['qty'];
			if (array_key_exists($pid, $_SESSION['cart']) ){
				$_SESSION['cart'][ $pid ] += $qty;
				header("location:".$referer_url);
			}else{
				$_SESSION['cart'][ $pid ] = $qty;
				header("location:".$referer_url);
			}
		}

		if (isset($_GET['action']) && $_GET['action'] == 'removecartitem' && isset($_GET['pid']) ) {
			unset($_SESSION['cart'][$_GET['pid']] );
			header("location:".$referer_url);
		}
	
		if ($_GET['action'] == 'updatecart'){
			foreach ($_POST['cartitems'] as $pid => $qty) {
				if($qty < 1) {
					unset( $_SESSION['cart'][$pid] );
				}else{
					$_SESSION['cart'][ $pid ] = $qty;
					header("location:".$referer_url);
				}
			}
		}
	}
}