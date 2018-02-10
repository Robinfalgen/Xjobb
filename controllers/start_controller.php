<?php
include (INCLUDES_FOLDER.'db.conn.inc.php');

class StartClass {
	
	public function start()
	{
		$connect = new DBconn;
		$conn = $connect->conn();
		$sql = "SELECT * FROM startpage ORDER BY id DESC LIMIT 3" ;
		$stmt=$conn->prepare($sql);
		$stmt->execute();
		$startpagetext = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $startpagetext;
	}
}

$start = new StartClass;
$result = $start->start();

include(TEMPLATES_FOLDER.'startPage.tpl.php');