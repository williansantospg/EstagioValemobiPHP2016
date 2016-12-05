<?php

include_once ("conexao.php");

$produto = $_POST['produto'];/*os dois nome tem que ser iguais ao input*/
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$tipoProduto = $_POST['tipoProduto'];

/*aqui embaixo primeiro nome igual do banco depois nome dos input*/
$sql = mysql_query("INSERT INTO produtos (Produto, Preco, Quantidade, Tipo_Produto)
VALUES ('$produto','$preco','$quantidade','$tipoProduto')");

echo "<center><h1>Registro inserido com sucesso!!!</h1></center>";
//echo "<script>window.location='CadProdutos.php'</script>";
//echo $sql;
?>