<?php
	//default lägge
	class CategoryModel {
		
		public function getCategories(){
			$connect = new DBconn;
			$conn = $connect->conn();
			$sql = "SELECT * FROM startpage ORDER BY id DESC LIMIT 3" ;
			$stmt=$conn->prepare($sql);
			$stmt->execute();
			$startpagetext = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $startpagetext;
		}

	}

//$categoryModel = new CategoryModel;
//$result = $categoryModel->getCategories();
//include(TEMPLATES_FOLDER.'startPage.tpl.php');