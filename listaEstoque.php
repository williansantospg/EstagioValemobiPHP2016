<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/easing.js" type="text/javascript"></script>
<script src="js/funcoes.js" type="text/javascript"></script>

<form id="formPesquisa" name="formPesquisa" method="post" action="listaEstoque.php">
Pesquisa:<input type="text" name="filtrar" id="filtrar"><input type="submit" name="button" id="button" value="Pesquisar">
<table id="tabelaEstoque">
</form>

<caption>Lista de produtos no estoque</caption>
<tr>
<td><a href="listaEstoque.php?ordem=Cod_Produto" class="ordenar">Código</td><td><a href="listaEstoque.php?ordem=Produto" class="ordenar">Produto</td><td >Tipo produto</td><td >Quantidade</td><td >Preço</td>
</tr>

<?php

 include_once 'conexao.php';

$ordem = $_GET['ordem'];
//$filtrar = $_GET['filtrar'];

//echo "ordem = ".$ordem;
//echo "filtro =".$_Request['$filtrar'];
//echo "filtro =".$filtrar;

if($ordem == '')
	$ordem = "Cod_Produto";

//$sql_select = "select * from produtos order by ".$ordem;
$sql_select = "select * from produtos where Produto like '".$filtrar."%' order by ".$ordem;

//echo "sql = ".$sql_select;
if($_Request['filtrar'] == '')
	$filtrar = "";
else
	$filtrar = $_Request['filtrar'];

//echo "filtro =".$filtrar;

$resultado = mysql_query($sql_select);//executa o sql

$totalProdutos = mysql_num_rows($resultado);

while($registro = mysql_fetch_array($resultado))
{
?>
<tr>
<td><?php echo $registro['Cod_Produto'];?></td>
<td><?php echo $registro['Produto'];?></td>
<td><?php echo $registro['Tipo_Produto'];?></td>
<td><?php echo $registro['Quantidade'];?></td>
<td><?php echo $registro['Preco'];?></td>
</tr>

<?php  }  ?>

<tr>
<td colspan="5" align="center">Total de produtos: <?php echo $totalProdutos;?></td>
</tr>


</table>
