<?php
	//PRODUCT CONTROLLER
	include(CLASS_DIR . 'inc.class.product.php');
	
	$currentItem = new product;
	$currentItem->SingleProduct();

	include(TEMPLATES_FOLDER . 'product.tpl.php');

