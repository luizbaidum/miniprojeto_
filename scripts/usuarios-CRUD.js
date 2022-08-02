//Ação Salvar novo ou edit
$("#salvar").on("click", function(event){

    event.preventDefault();

	let operacao = $('#usuario-operacao').val();

    let data = $("#form-crud").serialize();
		
	$.ajax({
		type : 'POST',
		url  : 'scripts/usuarios-CRUD.php',
		data : {
				operacao,
				data,
			},
		dataType: 'json',
		success :  function(response){
            if(response.codigo == 1) {

                window.location.href = "usuarios.php";
            } else {

                $('#erro').html(response.mensagem);
            }						
		}
	});
});

//Ação Excluir
$("#excluir").on("click", function(event){

    event.preventDefault();

    let data = $("#form-usuarios").serialize();

    let nome = data.split('=');

    let confirma_exclusao = confirm('Confirma a exclusão do usuário: "'+ nome[1] +'"?');

    if(confirma_exclusao === true) {
		
        $.ajax({
            type : 'POST',
            url  : 'scripts/usuarios-CRUD.php',
            data : data,
            dataType: 'json',
            success :  function(response){
                if(response.codigo == 1) {

                    alert(response.mensagem);

					window.location.href = "usuarios.php";
                } else {

					alert(response.mensagem);
				}           
            }
        });
    }
});