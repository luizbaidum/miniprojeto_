var teste = ['a', 'b'];

let teste44 = [];

$.each(teste, function(i, v) {

    teste44.push('<div class="card-produtos"> <div id="infos-'+i+'"><div class="produto codigo" id="id-codigo-'+i+'">Código: <span></span></div><div class="produto nome" id="nome-'+i+'">Nome: <span></span></div><div class="produto valor" id="valor-'+i+'">Valor: R$ <span></span></div><div class="produto qtd" id="id-qtd-'+i+'">Qtd. disponível: <span></span></div></div> <form class="botoes" id="form-produtos-'+i+'"> <input type="hidden" class="codigo-produto" value='+i+'> <button class="usar">Usar 1</button> <button class="editar">Editar este</button> <button class="excluir">Excluir este</button> </form>');
})

//esta cria a visão da lista para administradores
/*function listaAdm(v) 
{
    $('#main-produtos-a').append(html_card);

    let basico = $('.card-produtos').append(html_infos);

    let finalizar = basico.append(html_form);

    finalizar+='</div>';  
    
    $('.card-produtos').attr('id', function(i, v) {
        return 'id-card-produtos-' + i;
    });

    $('.codigo').attr('id', function(i, v) {
        return 'id-codigo-' + i;
    });

    $('.nome').attr('id', function(i, v) {
        return 'id-nome-' + i;
    });

    $('.valor').attr('id', function(i, v) {
        return 'id-valor-' + i;
    });

    $('.qtd').attr('id', function(i, v) {
        return 'id-qtd-' + i;
    });
}

//esta cria a visão da lista para usuários comuns
function listaComum() 
{
    $('#main-produtos-f').append(html_card);

    let basico = $('.card-produtos').append(html_infos);

    basico+='</div>';
}*/

if(document.getElementById('main-produtos-a')) {

    $('#main-produtos-a').append(teste44);

    $('.codigo span').text('pai');



} else {

    listaComum();
}






