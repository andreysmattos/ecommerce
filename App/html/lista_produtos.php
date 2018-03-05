<center><h2> Produtos </h2></center>

<?php

include '../script/lista_produtos.php';

?>


<table class="table table-hover table-sm">
	<thead>
		<tr>
			<th>ID</th>
			<th>Servidor</th>
			<th>Categoria</th>
			<th>Nome</th>
			<th>Preco</th>
			<th>Promoção</th>
			<th>Descrição</th>
			<th>Estoque</th>
			<th>Ativo</th>			
		</tr>
	</thead>
	<tbody>
		
		<?php
			foreach($resultado as $produto){
		?>
		<tr>
			<td><input type="checkbox" id="<?php echo $produto['idProduto']?>"></td>
			<td><?php echo $produto['Servidor']?></td>
			<td><?php echo $produto['Categoria']?></td>
			<td><?php echo $produto['nome']?></td>
			<td><?php echo $produto['preco']?></td>
			<td><?php echo $produto['precoPromo']?></td>
			<td><?php echo desc($produto['descricao'])?></td>
			<td><?php echo $produto['estoque']?></td>			
			<td><?php echo $produto['ativo']?></td>
		</tr>

		<?php
		}//fim do foreach
		?>
	
	</tbody>


</table>