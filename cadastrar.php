<?php

require_once 'conexao.php';

class Create{

	public function criar($nome){

		//Instância do classe e metodo de banco
		$conexao = new Conexao();
		$getConn = $conexao->novaConexao();

		$query = "INSERT INTO teste (nome) VALUES (?)";
		//Variavel getConn que representa a classe conexão chamando o metódo do PDO PREPARE
		$stmt = $getConn->prepare($query);
		$stmt->bindValue(1, $nome);

		if($stmt->execute()){

			echo "Cadastrou";

		}else{

			echo "Erro";
		}
	}

	
}