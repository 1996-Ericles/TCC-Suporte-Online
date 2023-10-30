<?php
//servidor xampp
	$servidor= "localhost";
	$usuario = "root";
	$senha   = "";
	
//banco de dados criado
	$bd = "tcc";

$mysqli = new mysqli($servidor, $usuario, $senha, $bd);

?>
<?php
//servidor xampp
	$servidor= "localhost";
	$usuario = "root";
	$senha   = "";
	
//banco de dados criado
	$nome_bd   = "tcc";

	if (!mysql_connect($servidor, $usuario, $senha)) {
		echo ("SE APARECER ESTA MENSAGEM, NAO CONECTOU SERVER XAMPP" .mysql_error());
	}

	if(!mysql_select_db($nome_bd)){
		echo ("SE APARECER ESTA MENSAGEM, NAO CONECTOU NO TEU BANCO CRIADO".mysql_error());
	}
?>