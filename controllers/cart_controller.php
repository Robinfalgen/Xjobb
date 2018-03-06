<?php

require INCLUDES_FOLDER.'cart.inc.php';
include(CLASS_DIR . 'inc.class.cart.php');
	
	$currentcart = new Cart;
	$currentcart->cartController();

	