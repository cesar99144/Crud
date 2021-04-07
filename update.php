<?php

require_once 'conexao.php';

class Update{

	public function atualizar($nome, $id){

		//Instância do classe e metodo de banco
		$conexao = new Conexao();
		$getConn = $conexao->novaConexao();

		$query = "UPDATE teste SET nome = ? where id = ?";
		//Variavel getConn que representa a classe conexão chamando o metódo do PDO PREPARE
		$stmt = $getConn->prepare($query);
		$stmt->bindValue(1, $nome);
		$stmt->bindValue(2, $id);

		if($stmt->execute()){

			echo "Atualizado";

		}else{

			echo "Erro ao atualizar";
		}
	}
}