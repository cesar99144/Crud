<?php

require_once 'conexao.php';

class Read{

	public function ler(){

		//Instância do classe e metodo de banco
		$conexao = new Conexao();
		$getConn = $conexao->novaConexao();


		$query = "SELECT * FROM teste";
		$stmt = $getConn->prepare($query);
		$stmt->execute();

		//Pesquisa se o resultado da pesquisa foi maior que 0
		if($stmt->rowCount() > 0){

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			//Retorna o resultado da pesquisa em um array
			return $resultado;

		}else{

			return [];
		}
	}
}