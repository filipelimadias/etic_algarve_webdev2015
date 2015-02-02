<?php 

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set("display", "on");



	require('conexao.inc');
	require('DAL_v2.php');

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$nomeTitulo = $_POST['titulo'];
		
		insertFacilities($nomeTitulo);
		
	}


 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 <h3>INSERT</h3>
 	<br>
 	<form action="" method="POST">
 		
		<input type="text" name="titulo" placeholder="Titulo: ">
		<br>
		<input type="submit" name="submit" placeholder="Submeter">

 	</form>
 	
 </body>
 </html>
