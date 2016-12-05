<?php
    error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	$host = "localhost";//local do banco de dados
	$usuario = "root";//nome do usuario do banco de dados
	$senha = "";//senha do usuario
	//$dbname = "estoque";//nome do banco de dados
	
	//Criar a conexao
	$conn = mysql_connect($host, $usuario, $senha);//, $dbname
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error().mysql_errno());
	}else{
		//echo "Conexao realizada com sucesso";
	}	


	$conecta_banco = mysql_select_db("estoque",$conn);

	if($conecta_banco){
		//echo "Conexao com o banco OK";
	}
	else{
		echo "não connectou n erro".mysql_errno()."nome erro".mysql_error();
	}
	
?>