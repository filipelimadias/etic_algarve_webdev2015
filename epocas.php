<?php
	
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set("display_error", "off");

	ob_start();

	require ('conexao.inc');
	require ('DAL_v2.php');


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$datainicioForm = $_POST["datainicio"];
		$datafimForm = $_POST["datafim"];
		$valorForm = $_POST["valor"];

		insertEpocas( $datainicio, $datafim, $valor );

	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Epocas</title>
</head>
<body>

<form action="" method="POST">

		<input type="date" id="datainicio" name="datainicio" placeholder="Data de Inicio:">
		<br>

		<input type="date" id="datafim" name="datafim" placeholder="Data de Fim:">
		<br>

		<input type="number" id="valor" name="valor" placeholder="Valor:">
		<br>

		<input type="submit" id="submit" name="submit" placeholder="Submeter">
		
		</form>

</body>
</html>
