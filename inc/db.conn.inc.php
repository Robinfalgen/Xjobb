<?php

	class DBconn extends DBSettings{
		public function conn(){
			$conn = new PDO( "mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
			return $conn;
			}
		}
//$test = new DBconn;
//$test->conn();