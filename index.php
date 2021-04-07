<?php

require_once 'cadastrar.php';
require_once 'leitura.php';
require_once 'update.php';
require_once 'delete.php';


//Funcão isset vai esperar que o formulario seja enviado para poder chamar a classe cadastro
if(isset($_POST['nome'])):

	//Instância e chama metodo de cadastro
	$cadastrar = new Create();
	$cadastra = $cadastrar->criar($_POST['nome']);

endif;

//Funcão isset vai esperar que o formulario de atualização seja enviado para poder chamar a classe cadastro
if(isset($_POST['nomeNovo'])):

	//Instância e chama metodo de atualizar
	$atualizarClass = new Update();
	//Informa por parametro o nome e o id do where
	$atualizarDado = $atualizarClass->atualizar($_POST['nomeNovo'], $_POST['id']);

endif;

//Funcão isset vai esperar que o formulario de excluir seja enviado para poder chamar a classe cadastro
if(isset($_POST['idDelete'])):

	//Instância e chama metodo de atualizar
	$classExcluir = new Delete();
	//Informa por parametro o nome e o id do where
	$deleteDado = $classExcluir->excluir($_POST['idDelete']);

endif;

//Instância e chamado do metodo de leitura
$leitura = new Read();
$listar = $leitura->ler();





?>

<!-- Form para cadastro -->
<h3>Cadastrar dados</h3>
<form action="#" method="POST">
	<label>Nome: </label><input type="text" name="nome"><br>
	<input type="submit" name="" value="Enviar">
</form>
<hr>

<!-- Form para atualizar -->
<h3>Atualizar dados</h3>
<form action="#" method="POST">
	<label>Novo nome: </label><input type="text" name="nomeNovo"><br>
	<label>Id que do dado a atualizar: </label><input type="number" name="id"><br>
	<input type="submit" name="" value="Atualizar">
</form>
<hr>

<!-- Form para excluir -->
<h3>Excluir dados</h3>
<form action="#" method="POST">
	<label>Id que do dado a ser excluído: </label><input type="number" name="idDelete"><br>
	<input type="submit" name="" value="excluir">
</form>
<hr>
<!-- Lista com nome das pessoas -->
<ul>
  <!-- Renderiza o conteudo da variavel da linha 14 -->
  <?php foreach($listar as $nomes): ?>
  		<li>id: <?php echo $nomes['id']; ?> nome: <?php echo $nomes['nome']; ?></li>
  <?php endforeach; ?>
</ul>