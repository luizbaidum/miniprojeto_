//Ação Salvar
$("#salvar").on("click", function(event){

    event.preventDefault();

    let data = $("#form-cadastro-produtos").serialize();

    let operacao = $('#operacao').val();
		
	$.ajax({
		type : 'POST',
		url  : 'scripts/produtos-CRUD.php',
		data : {
                operacao,
                data,
            },
		dataType: 'json',
		success :  function(response){
            if(response.codigo == 1) {

                alert('Produto: "'+ response.nome +'" cadastrado com sucesso!');
                $('#form-cadastro-produtos input').val("")
            } else {

                alert(response.mensagem);
            }						
		}
	});
});