//Lista
$('#main-usuarios-a').ready(function() {

    var linha = '<tr> <td><input type="radio" name="usuario" class="id" value=""></td> <td class="nome"></td> <td class="passw"></td> <td class="acesso"></td> </tr>'

    $.ajax({

        type: 'POST',
        url : 'scripts/usuarios.php',
        data: {
            listagem: 'total',
        },
        dataType: 'json',
        success: function(response) {

            response.forEach(function(usuario) {

                $('#table-usuarios').append(linha);

                $('.nome').append('teste');
           });
        }
    })
});

//Novo


//Editar
$("#form-usuarios").on("submit", function(event){

    event.preventDefault();
	//cancela o envio do formulário (o que recarregaria a página) até obter a resposta. Estou certo?

	var data = $("#form-usuarios").serialize();
			
	$.ajax({
		type : 'POST',
		url  : 'scripts/usuarios.php',
		data : data,
		dataType: 'json',
		success :  function(response){						
			if(response.codigo == "1"){	
                $("#login-alert").css('display', 'none');
				window.location.href = "home.php";
			}
			else{			
				$("#alerta").css('display', 'block');
				$("#mensagem").html('<strong>Login ou senha errado(s)!</strong>');
			}
		}
	});
});

//Deletar
