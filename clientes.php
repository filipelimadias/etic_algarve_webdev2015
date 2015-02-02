<?php

	include 'conexao.inc';
	include 'DAL_v2.php';

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$iddistrito = $_POST["iddistrito"];
		$idconcelho = $_POST["idconcelho"];
		$idlocalidade = $_POST["idlocalidade"];
		$nome = $_POST["nome"];
		$nascimento = $_POST["nascimento"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$morada = $_POST["morada"];
		$nif = $_POST["nif"];
		$telefone = $_POST["telefone"];

		insertClientes( $iddistrito, $idconcelho, $idlocalidade, $nome, $nascimento, $email, $password, $morada, $nif, $telefone );

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inserir Cliente</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="">
		<form action="" method="POST">
			<select id="iddistrito" name="iddistrito">
			  <option value="">ID Distrito</option>
			</select>
			<select id="idconcelho" name="idconcelho">
			  <option value="">ID Concelho</option>
			</select>
			<select id="idlocalidade" name="idlocalidade">
			  <option value="">ID Localidade</option>
			</select>
			<input type="text" id="nome" name="nome" placeholder="Nome" required>
			<input type="date" id="nascimento" name="nascimento" placeholder="Nascimento" required>
			<input type="email" id="email" name="email" placeholder="Email" required>
			<input type="password" id="password" name="password" placeholder="Password" required>
			<input type="morada" id="morada" name="morada" placeholder="Morada" required>
			<input type="text" id="nif" name="nif" placeholder="NIF" required>
			<input type="text" id="telefone" name="telefone" placeholder="Telefone" required>
			<input type="submit" id="submit" name="submit" value="submit">
		</form>
	</div>
</body>
</html>