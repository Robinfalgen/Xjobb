<?php
session_start();
//Robin
//echo "<pre>";
//var_dump($_SESSION);
//var_dump($_SESSION);

//echo "</pre>";
//session_unset();
require('config.php');
require_once(INCLUDES_FOLDER.'settings_inc.php');


class StartIndex{
	public function routes(){

		$routes = array( 
		// Standard
		'default' => 'start_controller.php',
		'about' => 'about_controller.php',
		
		// Produkter 
		'product' => 'product_controller.php',
		'products' => 'products_controller.php',
		'search' => 'search_controller.php',
		
		// Kundvagn
		'placeorder' => 'create_order_controller.php',
		'addtocart' => 'cart_controller.php',
		'removecartitem'  => 'cart_controller.php',
		'updatecart'  => 'cart_controller.php',
		'checkout' => 'checkout.controller.php',
		'purchase' => 'checkout_final_controller.php',
		
		// Kundrelaterat
		'signup' => 'signup_controller.php',
		'signin' => 'signin_controller.php',
		'signout' => 'signout_controller.php',
		'account' => 'account_controller.php',
		'orders' => 'order_controller.php',
		);
		/*

		*/
		if (isset($_GET['action'])) {
			if(!array_key_exists($_GET['action'], $routes)) {
			require(CONTROLLERS_FOLDER.'404.php');
			} else {
				if (is_file(CONTROLLERS_FOLDER . $routes[$_GET['action']])) {
					require(CONTROLLERS_FOLDER . $routes[$_GET['action']]);
				} else {
					echo "Filen finns inte";
				}
			}
		} else if (isset($_GET['q'])) {
			require(CONTROLLERS_FOLDER.$routes['search']);
		}
		else {
			require(CONTROLLERS_FOLDER.$routes['default']);
		}
	}
}

$start = new StartIndex;
$start->routes();

if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
} 

include(INCLUDES_FOLDER.'cart.inc.php');
require(TEMPLATES_FOLDER.'cart.tpl.php');
