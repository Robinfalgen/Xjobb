<?php

include(CLASS_DIR . 'inc.class.checkout.php');


$check = new checkoutClass;
$check->checkout();


require(TEMPLATES_FOLDER.'checkout.tpl.php');