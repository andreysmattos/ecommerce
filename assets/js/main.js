$(function(){

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



})