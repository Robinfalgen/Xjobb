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


include(CLASS_DIR . 'inc.class.index.php');

$start = new StartIndex;
$start->routes();

if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
} 

require_once(CLASS_DIR .'inc.class.cart.php');



$getCartItems = new Cart;

$getCartItems->getCartItems();
$prod = $getCartItems->prod;
$cart = $getCartItems->cart;
$totalSum = $getCartItems->totalSum;

require(TEMPLATES_FOLDER.'cart.tpl.php');