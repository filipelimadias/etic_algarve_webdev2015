<?php

/**
	Clientes
*/
	function insertClientes( $validado, $iddistrito, $idconcelho, $idlocalidade, $nome, $nascimento, $email, $password, $morada, $nif, $telefone )
	{
		$stringSQL = " INSERT INTO clientes ( id, validado, iddistrito, idconcelho, idlocalidade, datainsert, nome, nascimento, email, password, morada, nif, telefone ) VALUES ( null, '{$ativo}', '{$validado}', '{$iddistrito}', '{$idconcelho}', '{$idlocalidade}', now(), '{$nome}', '{$nascimento}', '{$email}', '{$password}', '{$morada}', '{$nif}', '{$telefone}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateClientes( $id, $ativo, $validado, $iddistrito, $idconcelho, $idlocalidade, $nome, $nascimento, $email, $password, $morada, $nif, $telefone)
	{
		$stringSQL = " UPDATE clientes SET validado = '{$validado}', iddistrito = '{$iddistrito}', idconcelho = '{$idconcelho}', idlocalidade = '{$idlocalidade}', nome = '{$nome}', nascimento = '{$nascimento}', email = '{$email}', password = '{$password}', morada = '{$morada}', nif = '{$nif}', telefone = '{$telefone}' ) ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Destaques
*/
	function insertDestaques( $idvivendas, $iddistrito, $idconcelho, $idlocalidade, $validado, $totalimpressoes, $contagem, $valor, $datainicio, $datafim )
	{
		$stringSQL = " INSERT INTO destaques ( id, idvivendas, iddistrito, idconcelho, idlocalidade, validado, totalimpressoes, contagem, valor, datainicio, datafim ) VALUES ( null, '{$idvivendas}', '{$iddistrito}', '{$idconcelho}', '{$idlocalidade}', '{$validado}', '{$totalimpressoes}', '{$contagem}', '{$valor}', '{$datainicio}', '{$datafim}' )";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateDestaques( $id, $idvivendas, $iddistrito, $idconcelho, $idlocalidade, $validado, $totalimpressoes, $contagem, $valor, $datainicio, $datafim )
	{
		$stringSQL = " UPDATE destaques SET idvivendas = '{$idvivendas}', iddistrito = '{$iddistrito}', idconcelho = '{$idconcelho}', idlocalidade = '{$idlocalidade}', validado = '{$validado}', totalimpressoes = '{$totalimpressoes}', contagem = '{$contagem}', valor = '{$valor}', datainicio = '{$datainicio}', datafim = '{$datafim}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Epocas
*/
	function insertEpocas( $ativo, $dateinsert, $datainicio, $datafim, $valor )
	{
		$stringSQL = " INSERT INTO epocas ( id, ativo, dateinsert, datainicio, datafim, valor ) VALUES ( null, '{$ativo}', '{$dateinsert}', '{$datainicio}', '{$datafim}', '{$valor}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateEpocas( $id, $ativo, $dateinsert, $datainicio, $datafim, $valor )
	{
		$stringSQL = " UPDATE epocas SET ativo = '{$ativo}', dateinsert = '{$dateinsert}', datainicio = '{$datainicio}', datafim = '{$datafim}', valor = '{$valor}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Facilities
*/
	function insertFacilities( $titulo )
	{
		$stringSQL = " INSERT INTO facilities ( id, datainsert, titulo ) VALUES ( null, now(), '{$titulo}' ) ";
		$res = mysql_query($stringSQL);
		return $stringSQL;
	}

	function updateFacilities( $id, $ativo, $dateinsert, $titulo )
	{
		$stringSQL = " UPDATE facilities SET ativo = '{$ativo}', dateinsert = '{$dateinsert}', titulo = '{$titulo}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Reservas
*/
	function insertReservas( $ativo, $validado, $idvivenda, $idcliente, $datainicio, $datafim, $valor )
	{
		$stringSQL = " INSERT INTO reservas ( id, ativo, validado, idvivenda, idcliente, datainsert, datainicio, datafim, valor ) VALUES ( null, '{$ativo}', '{$validado}', '{$idvivenda}', '{idcliente}', now(), '{$datainicio}', '{$datafim}', '{$valor}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateReservas( $id, $ativo, $validado )
	{
		$stringSQL = " UPDATE reservas SET ativo = '{$ativo}', validado = '{$validado}', idvivenda = '{$idvivenda}', idcliente = '{$idcliente}'', datainicio = '{$datainicio}', datafim = '{$datafim}', valor = '{$valor}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Tipologia
*/
	function insertTipologia( $ativo, $nome )
	{
		$stringSQL = " INSERT INTO tipologia ( id, ativo, datainsert, nome ) VALUES ( null, '{$ativo}', now(), '{$nome}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateTipologia( $id, $ativo, $nome )
	{
		$stringSQL = " UPDATE tipologia SET ativo = '{$ativo}', nome = '{$nome}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Users
*/
	function insertUsers( $ativo, $validado, $nome, $email, $password, $telefone, $nascimento )
	{
		$stringSQL = " INSERT INTO users ( id, validado, datainsert, nome, email, password, telefone, nascimento ) VALUES ( null, '{$validado}', now(), '{$nome}', '{$email}', '{$password}', '{$telefone}', '{$nascimento}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateUsers( $id, $ativo, $validado, $nome, $email, $password, $telefone, $nascimento )
	{
		$stringSQL = " UPDATE users SET ativo = '{$ativo}', validado = '{$validado}', nome = '{$nome}', email = '{$email}', password = '{$password}', telefone = '{$telefone}', nascimento = '{$nascimento}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Valordestaques
*/
	function insertValordestaques( $ativo, $nome, $impressoes, $valor )
	{
		$stringSQL = " INSERT INTO valordestaques ( id, ativo, nome, impressoes, valor ) VALUES ( null, '{$ativo}', '{$nome}', '{$impressoes}', '{$valor}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateValordestaques( $id, $ativo, $nome, $impressoes, $valor )
	{
		$stringSQL = " UPDATE valordestaques SET ativo = '{$ativo}', nome = '{$nome}', impressoes = '{$impressoes}', valor = '{$valor}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Vivendaepocas
*/
	function insertVivendaepocas( $ativo, $idvivenda, $idepoca, $valor )
	{
		$stringSQL = " INSERT INTO vivendaepocas ( id, ativo, idvivenda, idepoca, valor ) VALUES ( null, '{$ativo}', '{$idvivenda}', '{$idepoca}', '{$valor}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateVivendaepocas( $id, $ativo, $idvivenda, $idepoca, $valor )
	{
		$stringSQL = " UPDATE vivendaepocas SET ativo = '{$ativo}', idvivenda = '{$idvivenda}', idepoca = '{$idepoca}', valor = '{$valor}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Vivendas
*/
	function insertVivendas( $ativo, $validado, $iduser, $idtipologia, $iddistrito, $idconcelho, $localidade, $titulo, $morada, $codigopostal, $latitude, $longitude, $observacao )
	{
		$stringSQL = " INSERT INTO vivendas ( id, ativo, validado, iduser, idtipologia, iddistrito, idconcelho, idlocalidade, datainsert, titulo, morada, codigopostal, latitude, longitude, observacao ) VALUES ( null, '{$ativo}', '{$validado}', '{$iduser}', '{$idtipologia}', '{$iddistrito}', '{$idconcelho}', '{$idlocalidade}', now(), '{$titulo}', '{$morada}', '{$codigopostal}', '{$latitude}', '{$longitude}', '{$observacao}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateVivendas( $id, $ativo, $validado, $iduser, $idtipologia, $iddistrito, $idconcelho, $localidade, $titulo, $morada, $codigopostal, $latitude, $longitude, $observacao )
	{
		$stringSQL = " UPDATE vivendas SET ativo = '{$ativo}', validado = '{$validado}', iduser = '{$iduser}', idtipologia = '{$idtipologia}', iddistrito = '{$iddistrito}', idconcelho = '{$idconcelho}', idlocalidade = '{$idlocalidade}', titulo = '{$titulo}', morada = '{$morada}', codigopostal = '{$codigopostal}', latitude = '{$latitude}', longitude = '{$longitude}', observacao = '{$observacao}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Vivendasfacilities
*/
	function insertVivendasfacilities( $idvivendas, $idfacilities )
	{
		$stringSQL = " INSERT INTO vivendasfacilities ( id, idvivendas,  idfacilities ) VALUES ( null, '{$idvivendas}', '{$idfacilities}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateVivendasfacilities( $id, $idvivendas, $idfacilities )
	{
		$stringSQL = " UPDATE vivendasfacilities SET idvivendas = '{$idvivendas}', idfacilities = '{$idfacilities}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

/**
	Vivendasimagens
*/
	function insertVivendasimagens( $ativo, $idvivenda, $titulo, $path )
	{
		$stringSQL = " INSERT INTO vivendasimagens ( id, ativo,  idvivenda, titulo, path ) VALUES ( null, '{$ativo}', '{$idvivenda}', '{$titulo}', '{$path}' ) ";
		$res = mysql_query($stringSQL);
		return $res;
	}

	function updateVivendasimagens( $id, $ativo, $idvivenda, $titulo, $path )
	{
		$stringSQL = " UPDATE vivendasimagens SET ativo = '{$ativo}', idvivenda = '{$idvivenda}', titulo = '{$titulo}', path = '{$path}' ";
		$stringSQL .= " WHERE id = '{$id}' ";
		$res = mysql_query($stringSQL);
		return $res;
	}

?>