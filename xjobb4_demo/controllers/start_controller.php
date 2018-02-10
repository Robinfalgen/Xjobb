<?php
	include (INCLUDES_FOLDER.'db.conn.inc.php');
	class StartClass {
		
		public function start(){
			$connect = new DBconn;
			$conn = $connect->conn();
			$sql = "SELECT * FROM category";
			$stmt=$conn->prepare($sql);
			$stmt->execute();
			$fetchCat = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $fetchCat;
		}

	}

$start = new StartClass;
$result = $start->start();
include(TEMPLATES_FOLDER.'startPage.tpl.php');