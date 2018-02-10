<?php

Class CartController{


	public function Cart()
	{
		if(isset($_SERVER['HTTP_REFERER'])) {
			$referer_url = $_SERVER['HTTP_REFERER'];
			} else {
			$referer_url = "";
	}

		$_SESSION['cart'] === $pid = 0;	
		if (isset($_GET['action']) && $_GET['action'] == 'addtocart') {
			$pid = $_POST['pid'];
			$qty = $_POST['qty'];

		if (array_key_exists($pid, $_SESSION['cart']) ){
			$_SESSION['cart'][ $pid ] += $qty;
			header("location:".$referer_url);
		} else {
			$_SESSION['cart'][ $pid ] = $qty;
			header("location:".$referer_url);
		}
		}

		if (isset($_GET['action']) && $_GET['action'] == 'removecartitem' && isset($_GET['pid']) ) {

			unset($_SESSION['cart'][$_GET['pid']] );
			header("location:".$referer_url);

		}
		if ($_GET['action'] == 'updatecart') {

			foreach ($_POST['cartitems'] as $pid => $qty) {
				
				if ($qty < 1) {
					unset( $_SESSION['cart'][$pid] );
				} else {
					$_SESSION['cart'][ $pid ] = $qty;
					header("location:".$referer_url);
				}
			}



		}
	}
}
$cart = new CartController;
var_dump($cart->cart());
echo "Cart controller kör";
require(INCLUDES_FOLDER.'cart.inc.php');