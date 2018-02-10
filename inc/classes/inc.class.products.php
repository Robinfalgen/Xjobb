<?php
include(INCLUDES_FOLDER . 'db.conn.inc.php');

class products{
	function MultiProducts(){
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


		//CATEGORY
		if(isset($_GET['category']) && $_GET['category'] == 1) {
			echo "<h1>Gitarrer</h1>";
		}else if(isset($_GET['category']) && $_GET['category'] == 2){
			echo "<h1>Fender</h1>";
		}else if(isset($_GET['category']) && $_GET['category'] == 3){
			echo "<h1>Bass</h1>";
		}else if(isset($_GET['category']) && $_GET['category'] == 4){
			echo "<h1>Ibanez</h1>";
		}else if(isset($_GET['category']) && $_GET['category'] == 5){
			echo "<h1>Tillbehör</h1>";
		}else{
			echo "<h1>Våra Produkter</h1>";
		}


		$pagecontent = $result;
		foreach($pagecontent as $product) {
			require(TEMPARTS . 'product_list_item.tpl.php');
		}
	}
}