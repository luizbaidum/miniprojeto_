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

                $('#form-cadastro-produtos input').val("");
                alert('Produto: "'+ response.nome +'" cadastrado com sucesso!');
            } else if(response.codigo == 'editado') {
                
                $('#form-edita-produtos').css('display', 'none');
                window.location.href = "produtos.php";
            }else {

                alert(response.mensagem);
            }						
		}
	});
});

//Ação exluir
$(document).on('click', '.excluir', function(event) {

    event.preventDefault();

    let = confirma_exclusao = confirm("Confirma a exclusão do produto?");

    if(confirma_exclusao) {

        let form = $(this).parent('form');
        let data = form.serialize();

        $.ajax({
            method: 'post',
            url: 'scripts/produtos-CRUD.php',
            data: data,
            dataType: 'json',
            success: function(response) {
                if(response.codigo == 1) {
    
                    alert('Produto excluído com sucesso');
                    window.location.href = "produtos.php";
                } else {
    
                    alert('Erro excluir Produto. Por favor recarregue o sistema e tente novamente.')
                }
            }
        })
    } else {
        null;
    }
});