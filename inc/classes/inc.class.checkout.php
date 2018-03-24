<?php 
class checkoutController
{
	public function checkout()
	{
		foreach ($cart['cartItems'] as $key => $value) {
		$sql ="INSERT INTO `order_items`( `pid`, `qty`, `order_id`, `prod_title`, `prod_price`)
		 VALUES ('".$key."','".$value['qty']."','".$last_id."','".$value['name']."','".$value['price']."')";
		 $conn->exec($sql);
		}	
	}
}
?>