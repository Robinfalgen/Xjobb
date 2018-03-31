<?php
include(CLASS_DIR . 'inc.class.checkout.php');


$setData = new checkoutClass;
$setData->setOrderData();

include(TEMPLATES_FOLDER . 'purchase.tpl.php');
?>
