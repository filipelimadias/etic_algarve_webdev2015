<?php 

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set("display", "on");



	require('conexao.inc');
	require('DAL_v2.php');

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$nomeForm = $_POST['nome'];
		$emailForm = $_POST['email'];
		$passwordForm = $_POST['password'];
		$telefoneForm = $_POST['telefone'];
		$nascimentoForm = $_POST['nascimento'];
		
		insertUsers($nomeForm, $emailForm, $passwordForm, $telefoneForm, $nascimentoForm );
		
	}


 
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 <h3>Users</h3>
 	<br>
 	<form action="" method="POST">
 		
		<input type="text" name="nome" placeholder="Nome: ">
		<br>
		<input type="email" name="email" placeholder="Email: ">
		<br>
		<input type="password" name="password" placeholder="Password: ">
		<br>
		<input type="text" name="telefone" placeholder="Telefone: ">
		<br>
		<input type="date" name="nascimento" placeholder="Data de Nascimento: ">
		<br>
		<input type="submit" name="submit" placeholder="Submeter">

 	</form>
 	
 </body>
 </html>