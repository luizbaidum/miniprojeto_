//Lista de usuários cadastrados
$('#main-usuarios-a').ready(function() {

    var linha = '<tr> <td><input type="radio" name="seleciona_este[]"></td> <td class="usuarios-nome"></td> <td class="usuarios-passw"></td> <td class="usuarios-acesso"></td> </tr>'

    let seleciona_este = document.getElementsByName('seleciona_este[]');

    $.ajax({

        type: 'POST',
        url : 'scripts/usuarios.php',
        data: {
            listagem: 'total',
        },
        dataType: 'json',
        success: function(response) {

            if(response.codigo == 0){

                $('#table-usuarios').append(response.mensagem);
            } else {

                jQuery.each(response, function(i, val) {

                    $('#table-usuarios').append(linha);

                    seleciona_este[i].value = val.nome;
             
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
        }            
    })
});

//DIV Novo
$("#form-usuarios").on("submit", function(event){

    event.preventDefault();

    let teste = $("#form-usuarios").serialize();

    console.log(teste);

	$.ajax({
		type : 'POST',
		url  : 'scripts/usuarios.php',
		data : {
            listagem: 'novo'
        },
		dataType: 'json',
		success :  function(response){						
			$('#form-edit').css('display', 'block');
		}
	});
});

//DIV Editar
$("#form-usuarios").on("submit", function(event){

    event.preventDefault();

    var data = $("#form-usuarios").serialize();
		
	$.ajax({
		type : 'POST',
		url  : 'scripts/usuarios.php',
		data : {
            data,
            listagem: 'editar'
        },
		dataType: 'json',
		success :  function(response){						
			$('#form-edit').css('display', 'block');

            $('#usuario-oldnome').val(response.nome);
            
            $('#usuario-newnome').val(response.nome);

            $('#usuario-passw').val(response.password);

            $('#usuario-acesso').val(response.acesso);
		}
	});
});

//Deletar
