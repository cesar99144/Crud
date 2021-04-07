<?php

class Conexao{

    function novaConexao(){

        $servidor = 'localhost';
        $usuario = 'root';
        $password ='';
        $banco = 'php_banco';
        try{
           
            $conexao = new \PDO('mysql:host=localhost;dbname=crudteste', $usuario, $password);
            
            return $conexao;
        
        }
        catch(PDOExeption $e){
            die('Erro: ' . $e->getMessage() );
        }
    }

}


/*Métodos do PDO para estudar

*Prepare
*bindValue
*execute
*RowCount */