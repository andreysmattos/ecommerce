<center><h2 class="titulo_adm"> Produtos </h2></center>

<table id="lista_produtos" class="table table-hover table-sm" >
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
			/*foreach($resultado as $produto){
				
		?>
		<tr>
			<td><input type="checkbox" id="<?php echo $produto['idProduto']?>"></td>
			<td><?php echo $produto['Servidor']?></td>
			<td><?php echo $produto['Categoria']?></td>
			<td><?php echo $produto['nome']?></td>
			<td><?php echo $produto['preco']?></td>
			<td><?php echo $produto['precoPromo']?></td>
			<td><?php echo Administrativo::desc($produto['descricao'])?></td>
			<td><?php echo $produto['estoque']?></td>			
			<td><?php echo $produto['ativo']?></td>
		</tr>

		<?php
		}//fim do foreach
		*/
		?>
	
	</tbody>




</table>

<center>
	<nav aria-label="Page navigation">
  <ul class="pagination" id="n_pag">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#" id="1" onClick="tabela_lista_produtos(this.id)">Primeira</a></li>
    <li><a href="#" id="2" onClick="tabela_lista_produtos(this.id)">2</a></li>
    <li><a href="#" id="3" onClick="tabela_lista_produtos(this.id)">3</a></li>
    <li><a href="#" id="4" onClick="tabela_lista_produtos(this.id)">4</a></li>
    <li><a href="#" id="ultima" onClick="tabela_lista_produtos(total)">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</center>

