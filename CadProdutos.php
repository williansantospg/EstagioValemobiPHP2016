<form id="formCadProdutos" method="post" action="cadastroAlteracaoProdutos.php">
<fieldset id="pedido"><legend>Cadastro de produtos:</legend>

<label class="lbl">Produto:<input type="text" id="texto" name="produto" placeholder="Nome do produto" size="50" maxlength="50" /></label>
<label class="lbl">Tipo:<input type="text" name="tipoProduto" placeholder="Tipo do produto" size="30" maxlength="30" /></label>
<label class="lbl">Quantidade:<input type="number" name="quantidade" id="iqtdd" min="0" max="100" value="0" placeholder="0"    size="3"></label>
<label class="lbl">Preço:<input type="text" name="preco" placeholder="R$:0,00" maxlength="5" size="8" align="center" /></label>


<input type="image" src="img/btn-salvar.png" name="tEnviar" id="btn-salvar"/>



</fieldset>
</form>