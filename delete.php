<?php

require_once 'conexao.php';

class Delete{

	public function excluir($id){

		//Instância do classe e metodo de banco
		$conexao = new Conexao();
		$getConn = $conexao->novaConexao();

		$query = "DELETE FROM teste Where id = ?";
		//Variavel getConn que representa a classe conexão chamando o metódo do PDO PREPARE
		$stmt = $getConn->prepare($query);
		$stmt->bindValue(1, $id);

		if($stmt->execute()){

			echo "Excluido";

		}else{

			echo "Erro ao excluir";
		}
	}

}