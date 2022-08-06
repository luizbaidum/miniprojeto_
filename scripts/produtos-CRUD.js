//Ação Salvar
$("#salvar").on("click", function(event){

    event.preventDefault();

    let operacao = $('#operacao').val();

    console.log(operacao);

    if(operacao == 'novo') {

        var data = $("#form-cadastro-produtos").serialize();
    } else if(operacao == 'editar') {

        var data = $("#form-edita-produtos").serialize();
    };
		
	$.ajax({
		type : 'POST',
		url  : 'scripts/produtos-CRUD.php',
		data : {
                operacao,
                data,
            },
		dataType: 'json',
		success :  function(response){
            if(response.codigo == 'cadastrado') {

                alert('Produto: "'+ response.nome +'" cadastrado com sucesso!');
                $('#form-cadastro-produtos input').val("")
            } else if(response.codigo == 'editado') {
                
                $('#form-edita-produtos').css('display', 'none');
                window.location.href = "produtos.php";
            }else {

                alert(response.mensagem);
            }						
		}
	});
});