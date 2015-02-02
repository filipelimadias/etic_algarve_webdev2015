<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 <?php 

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set("display", "off");

	ob_start();

	$servername="localhost";
	$username="root";
	$password="root";
	$dbname="renting";

	$link=mysql_connect($servername, $username, $password);
	if(!$link){
		die("Not connected : ".mysql_error());
	}

	$db_selected=mysql_select_db($dbname, $link);
	if(!$db_selected){
		die("Can't use".$dbname." : ".mysql_error());
	}

	if ($_SERVER['REQUEST_METHOD']=="POST"){
		$nomeForm=$_POST['nome'];
		$emailForm=$_POST['email'];
		$passwordForm=$_POST['password'];
		$telefoneForm=$_POST['telefone'];
		$nascimentoForm=$_POST['nascimento'];
	
		$query="INSERT INTO users(id, nome, email, password, telefone, nascimento) VALUES (null, '{$nomeForm}', '{$emailForm}', '{$passwordForm}'), '{$telefoneForm}','{$nascimentoForm}' )";
		$res=mysql_query($query);

		if($res==1){
			header("Location: connexao.inc");
		}
	}


 
 ?>

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