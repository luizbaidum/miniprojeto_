$(document).ready(function() {

    //Lista de usuários cadastrados para usuário comum
    if(document.getElementById('main-usuarios-f')) {

        var linha = '<tr> <td><input type="radio" name="seleciona_este" id="seleciona_este"></td> <td class="usuarios-nome"></td> <td class="usuarios-passw"></td> <td class="usuarios-acesso"></td> </tr>';

        let usuario_logado = document.getElementById('nome').innerHTML;

        let usuario = usuario_logado.split(" ");

        console.log(usuario[2]);

        $.ajax({
    
            type: 'POST',
            url : 'scripts/usuarios.php',
            data: {
                listagem: 'unico',
                usuario: usuario[2],
            },
            dataType: 'json',
            success: function(response) {
    
                if(response.codigo == 0){
    
                    $('#table-usuarios').append(response.mensagem);
                } else {
        
                    $('#table-usuarios').append(linha);

                    document.getElementById('seleciona_este').value = response.nome;
                 
                    $('.usuarios-nome').attr('id', function() {
                        return 'id-usuarios-nome-0';
                    });
        
                    $('#id-usuarios-nome-0').append(response.nome);
        
                    $('.usuarios-passw').attr('id', function() {
                        return 'id-usuarios-passw-0';
                    });
        
                    $('#id-usuarios-passw-0').append(response.password);
        
                    $('.usuarios-acesso').attr('id', function() {
                        return 'id-usuarios-acesso-0'
                    });
        
                    $('#id-usuarios-acesso-0').append(response.acesso);
                }
            }            
        })

    //Lista de usuários cadastrados para ADM
    } else if(document.getElementById('main-usuarios-a')) {

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
    }
});

//DIV Novo
$("#novo").on("click", function(event){

    event.preventDefault();

	$.ajax({
		type : 'POST',
		url  : 'scripts/usuarios.php',
		data : {
            listagem: 'novo'
        },
		dataType: 'json',
		success :  function(){						
			$('#form-crud').css('display', 'block');

            $('#usuario-operacao').val('novo');

            $('#usuario-oldnome').val(null);
            
            $('#usuario-newnome').val(null);

            $('#usuario-passw').val(null);

            $('#usuario-acesso').val(null);
		}
	});
});

//DIV Editar 
$("#editar").on("click", function(event){

    alert('Se atualizar próprio *nome*, após salvar, relogue no sistema para ver o nome atualizado.');

    event.preventDefault();

    let data = $("#form-usuarios").serialize();
		
	$.ajax({
		type : 'POST',
		url  : 'scripts/usuarios.php',
		data : {
            data,
            listagem: 'editar'
        },
		dataType: 'json',
		success :  function(response){						
			$('#form-crud').css('display', 'block');

            $('#usuario-operacao').val('editar');

            $('#usuario-oldnome').val(response.nome);
            
            $('#usuario-newnome').val(response.nome);

            $('#usuario-passw').val(response.password);

            $('#usuario-acesso').val(response.acesso);
		}
	});
});

//botão cancelar
$('cancelar').on('click', function() {

    $('form-crud').style('display', 'hidden');
})