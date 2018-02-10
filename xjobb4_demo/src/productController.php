<?php
include (INCLUDES_FOLDER.'db.conn.inc.php');
class productController extends startIndexController
{
	public function SingelProduct(){
		$connect = new DBconn;
		$conn = $connect->conn();
		$sql = "SELECT * FROM products WHERE product_id=:pid";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam('pid', $_GET['id']);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$pagecontent = new stdClass;
		$pagecontent->title = $result[0]['product_title'];

		if (count($result) < 1) {
		$pagecontent->title = "Ingen produkt hittades";
		} else {
		
			$pagecontent->pid = $result[0]['product_id'];
			$pagecontent->title = "Visar produkten ".$result[0]['product_title'];
		}


			$produkt = array();
			foreach ($result as $currentItem){
				$produkt['product_id'] = $currentItem['product_id'];
				$produkt['product_title'] = $currentItem['product_title'];
				$produkt['product_price'] = $currentItem['product_price'];
				$produkt['product_description'] = $currentItem['product_description'];
				//$produkt['img'] = $currentItem['thumb_nail'];
				//$produkt['sku'] = $currentItem['sku'];
}
				return $produkt;



	}
	public function execute()
	{	
		$result = $this->SingelProduct(); //Resultet från product metoden
		$this->register('RESULT', $result); //$result skickas med och sparas globalt, till register
		$viewer = new Viewer;
		$viewer
		->setTemplate('product.tpl.php') //instansierar viewer som sätter templte
		->render();

	}


}
