//Produz a lista de produtos
$(document).ready(function() {

    var produto = [];

    var formularinho = [];

    $.ajax({
        method: 'POST',
        url: 'scripts/produtos.php',
        data: {
            listagem: 'total',
        },
        dataType: 'json',
        success :  function(response){
            if(response) {

                let produtos = response;

                $.each(produtos, function(i, v) {

                    produto.push('<div class="card-produtos"> <div id="infos-'+i+'"><div class="produto codigo" id="id-codigo-'+i+'">Código: <span>'+v.codigo+'</span></div><div class="produto nome" id="nome-'+i+'">Nome: <span>'+v.nome+'</span></div><div class="produto valor" id="valor-'+i+'">Valor: R$ <span>'+v.valor+'</span></div><div class="produto qtd" id="id-qtd-'+i+'">Qtd. disponível: <span>'+v.qtd+'</span></div></div><div id="formADM-'+i+'"></div>');

                    formularinho.push('<form class="botoes" id="form-produtos-'+i+'"> <input type="hidden" class="codigo-produto" value='+v.codigo+'> <button class="usar">Usar 1</button> <button class="editar">Editar este</button> <button class="excluir">Excluir este</button> </form>');
                });

                if(document.getElementById('main-produtos-a')) {

                    $('#main-produtos-a').append(produto);

                    let contador = ('.card-produtos').length;

                    for(n = 0; contador>=n; n++) {

                        $('#formADM-'+n).append(formularinho[n]);
                    }
                } else {
                
                    $('#main-produtos-f').append(produto);
                }
            } else {

                alert("Falhar ao carregar produtos. Recarregue a página.");
            }						
		}
	});
})