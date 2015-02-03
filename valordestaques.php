<?php

	require('conexao.inc');
	require('DAL_v2.php');

	if( $_SERVER['REQUEST_METHOD'] == "POST" )
	{
		$ativoForm = $_POST["ativo"];
		$nomeForm = $_POST["nome"];
		$impressoesForm = $_POST["impressoes"];
		$valorForm = $_POST["valor"];

		insertValordestaques( $ativoForm, $nomeForm, $impressoesForm, $valorForm );
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Valor Destaques</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="">
		<form action="" method="POST">
			<select id="idvivendas" name="idvivendas">
			  <option value="1">Ativo</option>
			  <option value="0">Inativo</option>
			</select>
			<input type="text" id="nome" name="nome" placeholder="Nome" required>
			<input type="text" id="impressoes" name="impressoes" placeholder="Impressões" required>
			<input type="text" id="valor" name="valor" placeholder="Valor" required>
			<input type="submit" id="submit" name="submit" value="submit">
		</form>
	</div>
</body>
</html>