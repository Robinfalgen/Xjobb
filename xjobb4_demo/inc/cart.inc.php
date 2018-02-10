<?php
include (INCLUDES_FOLDER.'db.conn.inc.php');
Class CartInt {
	public function GetCartDb(){

	$cart = array();
	if(isset($_SESSION['cart'])) {
	$cart = new CartController;
	$cart->cart();
	$idsInCart = array_keys($_SESSION['cart']);

	$idsInCart = implode($idsInCart, ',');
	$connect = new DBconn;
	$conn = $connect->conn();
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
		$prod['qty'] = $_SESSION['cart'][$product['prod_id']];
		$prod['img'] = $product['img'];
		$prod['price'] = $product['price'];
		$prod['name'] = $product['name'];
		$prod['sum'] = $prod['price'] * $prod['qty'];
		$totalSum += $prod['sum'];
		
		$cart['cartItems'][$product['prod_id']] = $prod;

	}
}

$cart['total'] = $totalSum;


}
return $cart;

	}
}
$CartGet = new CartInt;
$cart= $CartGet->GetCartDb();
var_dump($prod);
echo "cart.inc körs";
include('templates/cart.tpl.php');