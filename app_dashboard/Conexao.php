<?php

class Conexao {

	private $host = 'localhost';
	private $dbname = 'dashboard';
	private $user = 'root';
	private $pass = '';

	public function conectar() {
		try {
			$conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user, $this->pass);
			$conn->exec('set charset set utf8');
			return $conn;
		} catch (PDOException $e) {
			echo "<p>".$e->getMessage()."</p>";
		}
	}

}