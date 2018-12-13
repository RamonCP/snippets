<?php

class Conexao {

	private $host = 'localhost';
	private $dbname = 'paginacao';
	private $user = 'root';
	private $pass = '';

	public function conectar () {

		try {
			$conn = new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->user", "$this->pass");
			return $conn;
		} catch ( PDOException $e ) {
			echo "<p>".$e->getMessage()."</p>";
		}

	}

}

class ProdutoModel {

	public function __construct(Conexao $conexao) {
		$this->conexao = $conexao->conectar();
	}

	public function get() {
		$query = "SELECT * FROM cursos";
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->rowCount();
	}

	public function getProduct($limit1, $limit2) {
		$query = "SELECT * FROM cursos LIMIT ".$limit1.",".$limit2;
		$stmt  = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

}

$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
$conexao = new Conexao();
$produto = new ProdutoModel($conexao);
$count = $produto->get();
$limite = 6;

$num_pagina = ceil($count/$limite);

$inicio = ($limite*$pagina)-$pagina;

$num_produto = $produto->getProduct($inicio,$limite);

echo "<pre>";
// print_r($num_produto);
echo "</pre>";
