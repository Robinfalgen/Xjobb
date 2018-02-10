<?php
require_once (INCLUDES_FOLDER.'db.conn.inc.php');


	$cart = array();
	if(isset($_SESSION['cart'])) {
	
	$idsInCart = array_keys($_SESSION['cart']);

	$idsInCart = implode($idsInCart, ',');
	$connect = new DBconn;
	$conn = $connect->conn();
	$sql = "SELECT products.product_id, products.product_price, products.product_title, products.product_thumb AS img FROM products
	WHERE product_id IN (:idsInCart)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':idsInCart', $idsInCart);
	$stmt->execute();
	$result = $stmt->fetchAll();


$totalSum = 0;

if(isset($result)) {
	foreach ($result as $product) {
		$prod = array();
		$prod['qty'] = $_SESSION['cart'][$product['product_id']];
		$prod['img'] = $product['img'];
		$prod['price'] = $product['product_price'];
		$prod['name'] = $product['product_title'];
		$prod['sum'] = $prod['price'] * $prod['qty'];
		$totalSum += $prod['sum'];
		
		$cart['cartItems'][$product['product_id']] = $prod;

	}
}

$cart['total'] = $totalSum;


}

