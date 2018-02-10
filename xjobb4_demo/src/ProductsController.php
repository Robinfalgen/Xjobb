<?php

class ProductsController extends startIndexController

{
	public function Products()
	{	//Hämtar data från databasen returnar $result
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
	public function execute()
	{	
		$result = $this->Products(); //Resultet från products metoden
		$this->register('RESULT', $result); //$result skickas med och sparas globalt, till register
		$viewer = new Viewer;
		$viewer
		->setTemplate('products.tpl.php') //instansierar viewer som sätter templte
		->render();

	}

}

