<?php

include(CLASS_DIR . 'inc.class.cart.php');


/*$check = new checkoutClass;
$check->checkout();*/
$cart = new Cart;

$cart->getCartItems();


require(TEMPLATES_FOLDER.'checkout.tpl.php');