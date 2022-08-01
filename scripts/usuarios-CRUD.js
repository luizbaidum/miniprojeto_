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