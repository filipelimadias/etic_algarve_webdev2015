<?php 

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set("display", "on");



	require('conexao.inc');
	require('DAL_v2.php');

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$nomeNome = $_POST['nome'];
		
		insertTipologia($nomeNome);
		
	}


 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 <h3>Inserir Nome</h3>
 	<br>
 	<form action="" method="POST">
 		
		<input type="text" name="nome" placeholder="Nome: ">
		<br>
		<input type="submit" name="submit" placeholder="Submeter">

 	</form>
 	
 </body>
 </html>
