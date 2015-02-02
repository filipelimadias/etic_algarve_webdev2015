<?php 

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set("display", "on");



	require('conexao.inc');
	require('DAL_v2.php');

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$idvivendasForm = $_POST['idvivendas'];
		$iddistritoForm = $_POST['iddistrito'];
		$idconcelhoForm = $_POST['idconcelho'];
		$idlocalidadeForm = $_POST['idlocalidade'];
		$totalimpressoesForm = $_POST['totalimpressoes'];
		
		insertDestaques( $idvivendas, $iddistrito, $idconcelho, $idlocalidade,  $totalimpressoes, $contagem, $valor, $datainicio, $datafim )
		
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
 		
		<input type="text" name="idvivendas" placeholder="Vivenda: ">
		<br>
		<input type="text" name="iddistrito" placeholder="Distrito: ">
		<br>
		<input type="text" name="idconcelho" placeholder="Concelho: ">
		<br>
		<input type="text" name="idlocalidade" placeholder="Localidade: ">
		<br>
		<input type="text" name="totalimpressoes" placeholder="Total de Impressões: ">
		<br>
	
		
		<input type="submit" name="submit" placeholder="Submeter">

 	</form>
 	
 </body>
 </html>