//Lista
$('#main-usuarios-a').ready(function() {

    var linha = '<tr> <td><input type="radio" name="usuario" class="usuarios-id"></td> <td class="usuarios-nome"></td> <td class="usuarios-passw"></td> <td class="usuarios-acesso"></td> </tr>'

    $.ajax({

        type: 'POST',
        url : 'scripts/usuarios.php',
        data: {
            listagem: 'total',
        },
        dataType: 'json',
        success: function(response) {

            jQuery.each(response, function(i, val) {

                $('#table-usuarios').append(linha);

                $('.usuarios-id').attr('id', function(i) {
                    return 'id-usuarios-id-' + i;
                });

//arrumar css desta tela, q quebra se a diminuo

                $('#id-usuarios-id-'+i).val(val.id);
         
                $('.usuarios-nome').attr('id', function(i) {
                    return 'id-usuarios-nome-' + i;
                });

                $('#id-usuarios-nome-'+i).append(val.nome);

                $('.usuarios-passw').attr('id', function(i) {
                    return 'id-usuarios-passw-' + i;
                });

                $('#id-usuarios-passw-'+i).append(val.passw);

                $('.usuarios-acesso').attr('id', function(i) {
                    return 'id-usuarios-acesso-' + i;
                });

                $('#id-usuarios-acesso-'+i).append(val.acesso);
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
