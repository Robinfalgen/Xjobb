<?php
include (INCLUDES_FOLDER.'db.conn.inc.php');
class ProductsController 

{
	public function Products()
	{	
		$pagecontent = new \stdClass();
		$pagecontent->success = false;
		$connect = new DBconn;
		$conn = $connect->conn();
		$sql = "SELECT * FROM products, category, prod_cat
			WHERE category.category_id = prod_cat.category_id
			AND products.product_id = prod_cat.product_id
			AND category.category_id = :cid;";

			$stmt = $conn->prepare($sql);
			$stmt->bindParam('cid', $_GET['category']);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$pagecontent->title = $result[0]['category_title'];
			$pagecontent->products = $result;
			return $result;
	}

}
include('templates/products.tpl.php');
