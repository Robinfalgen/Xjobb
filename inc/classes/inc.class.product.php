<?php
include(INCLUDES_FOLDER . 'db.conn.inc.php'); //EXTENDA ISTÄLLET ??

	class product{

		public $id;
		public $title;
		public $price;
		public $descript;
		public $imgurl;
		public $sku;
		
		function SingleProduct(){
			$connect = new DBconn;
			$conn = $connect->conn();
			$sql = "SELECT * FROM products WHERE product_id=:pid";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam('pid', $_GET['id']);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			foreach($result as $product_prop){
				$this->id = $product_prop['product_id'];
				$this->title = $product_prop['product_title'];
				$this->price = $product_prop['product_price'];
				$this->descript = $product_prop['product_description'];
				$this->imgurl = $product_prop['product_img'];
				$this->sku = $product_prop['product_sku'];
			}
		}
	}
?>