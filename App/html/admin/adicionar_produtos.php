<center><h2 class="titulo_adm"> Adicionar Produtos </h2></center>

<form method="post" enctype="multipart/form-data">
	<div class="row">

		<div class="form-group col-md-6">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" id="nome" name="nome" placeholder="Titulo do produto">
		</div>


		


	</div> <!-- FIM DA ROW 1 -->


	<div class="row">

		<div class="form-group col-md-4">
			<label for="preco">Preço</label>
			<input type="text" class="form-control input_direita" id="preco" name="preco" placeholder="000,00">
		</div>


		<div class="form-group col-md-4">
			<label for="preco_promo">Preço Promocional</label>
			<input type="text" class="form-control input_direita" id="preco_promo" name="preco_promo" placeholder="000,00">
		</div>

		<div class="form-group col-md-4">
			<label for="estoque">Estoque</label>
			<input type="text" class="form-control input_direita" id="estoque" name="estoque" placeholder="0">
		</div>


	</div> <!-- FIM DA ROW 2 -->





	<div class="row">

		<div class="form-group col-md-4">
			<label for="preco">Ativo</label>
			<select class="form-control" name="ativo">
				<option value='s'> Ativo </option>
				<option value='n'> Desativo </option>
			</select>
		</div>


		<div class="form-group">
			<label for="img">Imagem</label>
			<input type="file" id="img" name="img">
			<p class="help-block">Foto do produto.</p>
		</div>


	</div> <!-- FIM DA ROW 3 -->




	<textarea class="form-control" rows="5" placeholder="Descrição do produto." name="desc"></textarea>





	<div class="row ">
		<div class="col-md-10"></div>
		<div class="col-md-2">
			<button type="submit" class="btn btn-success cad">Cadastrar</button>
		</div>
  	</div>


</form>