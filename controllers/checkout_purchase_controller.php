<?php
include(CLASS_DIR . 'inc.class.checkout.php');

echo "purchase controller";
echo "<br>";
var_dump(date("Y\-m\-d"));
$setData = new checkoutClass;
$setData->setOrderData();

include(TEMPLATES_FOLDER . 'purchase.tpl.php');
?>
