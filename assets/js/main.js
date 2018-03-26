$(function(){
	//form contato
	$('#formulario').submit(function(){
		var form = $('#formulario').serialize();

		var contato = $.ajax({
			method: 'post',
			url: '/!ecommerce%20t/App/script/contato.php', //Preciso mudar esse endereço depois!
			data: form,
			dataType: 'json'
		})


		contato.done(function(e){
			//console.log(e);
			if(e.status){
				$('#formulario').each(function(){
					this.reset();
				})

				$('#status').html('<div class="alert alert-success"><strong>Sucesso!</strong> Mensagem enviada!</div>');

				
			} else {
				$('#status').html('<div class="alert alert-danger"><strong>Error!</strong> '+ e.msg +' </div>');
			}
		})

		contato.fail(function(e){
			alert('nao deu certo');
			console.log(e)
		})


		return false;
	});


	

if( $('#lista_produtos').length > 0 ){
   //lista produtos
   tabela_lista_produtos()
   /*
	var produtos = $.ajax({
		method: 'get',
		url: '/!ecommerce%20t/App/script/lista_produtos.php',
		data: {
			'paginacao': '1'
		},
		dataType: 'json'
	});

	produtos.done(function(e){
		//console.log(e.dados);
		var table_lp = '<thead><tr><th>ID</th><th>Servidor</th><th>Categoria</th><th>Nome</th><th>Preco</th><th>Promoção</th><th>Descrição</th>	<th>Estoque</th><th>Ativo</th></tr>	</thead>';
			table_lp += '<tbody>';		
		for(var k in e.dados){
			console.log(e.dados[1])
			table_lp += '<tr>';
			table_lp += '<td><input type="checkbox" id="'+ e.dados[k].idProduto +'"</td>';
			table_lp += '<td>'+ e.dados[k].Servidor +'</td>';
			table_lp += '<td>'+ e.dados[k].Categoria +'</td>';
			table_lp += '<td>'+ e.dados[k].nome +'</td>';
			table_lp += '<td>'+ e.dados[k].preco +'</td>';
			table_lp += '<td>'+ e.dados[k].precoPromo +'</td>';
			table_lp += '<td>'+ e.dados[k].descricao +'</td>';
			table_lp += '<td>'+ e.dados[k].estoque +'</td>';
			table_lp += '<td>'+ e.dados[k].ativo +'</td>';
		}

		$('#lista_produtos').html(table_lp);
	})

	*/
}




})



function tabela_lista_produtos(id = 1){
	var produtos = $.ajax({
		method: 'get',
		url: '/!ecommerce%20t/App/script/lista_produtos.php',
		data: {
			'paginacao': id
		},
		dataType: 'json'
	});

	produtos.done(function(e){
		//console.log(e['dados']);
		var table_lp = '<thead><tr><th>ID</th><th>Servidor</th><th>Categoria</th><th>Nome</th><th>Preco</th><th>Promoção</th><th>Descrição</th>	<th>Estoque</th><th>Ativo</th></tr>	</thead>';
			table_lp += '<tbody>';		
		for(var k in e.dados){
			//console.log(e.dados[1])
			table_lp += '<tr>';
			table_lp += '<td><input type="checkbox" id="'+ e.dados[k].idProduto +'"</td>';
			table_lp += '<td>'+ e.dados[k].Servidor +'</td>';
			table_lp += '<td>'+ e.dados[k].Categoria +'</td>';
			table_lp += '<td>'+ e.dados[k].nome +'</td>';
			table_lp += '<td>'+ e.dados[k].preco +'</td>';
			table_lp += '<td>'+ e.dados[k].precoPromo +'</td>';
			table_lp += '<td>'+ e.dados[k].descricao +'</td>';
			table_lp += '<td>'+ e.dados[k].estoque +'</td>';
			table_lp += '<td>'+ e.dados[k].ativo +'</td>';
		}

		//console.log(id)
		var total = e.total;
		var total2 = parseInt(total) - parseInt(2);
		var px = parseInt(id) + parseInt(1);
		var ant = parseInt(id) - parseInt(1);
		var px2 = parseInt(id) + parseInt(2);
		var ant2 = parseInt(id) - parseInt(2);

		var n_pag = '';
			if(ant > 0) {n_pag += '<li><a href="#" aria-label="Previous" onClick="tabela_lista_produtos('+ ant +')">  <span aria-hidden="true">&laquo;</span> </a></li>'}
			n_pag += '<li><a href="#" id="1" onClick="tabela_lista_produtos(this.id)">Primeira</a></li>';
			if(ant > 1) {n_pag += '<li><a href="#" id="'+ ant2 +'" onClick="tabela_lista_produtos('+ ant2 +')">'+ ant2 +'</a></li>'}
			if(ant > 0) {n_pag += '<li><a href="#" id="'+ ant +'" onClick="tabela_lista_produtos('+ ant +')">'+ ant +'</a></li>'}
			n_pag += '<li><a onClick="" style="color: black">'+id+' </a></li>';
			if(px <= e.total){n_pag += '<li><a href="#" id="' + px +'" onClick="tabela_lista_produtos(' + px +')">' + px +'</a></li>'}
			if(px <= total2){n_pag += '<li><a href="#" id="' + px2 +'" onClick="tabela_lista_produtos(' + px2 +')">' + px2 +'</a></li>'}
			//n_pag += '<li><a href="#" id="1" onClick="tabela_lista_produtos(this.id)">1</a></li>';
			n_pag += '<li><a href="#" id="'+e.total+'" onClick="tabela_lista_produtos('+e.total+')">Ultima</a></li>';
			if(px <= e.total){n_pag += '<li><a href="#" aria-label="Next" onClick="tabela_lista_produtos(' + px +')">  <span aria-hidden="true">&raquo;</span> </a></li>'}

		$('#lista_produtos').html(table_lp);
		$('#n_pag').html(n_pag);
	})
}