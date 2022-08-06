var html_card = '<div class="card-produtos">';

var html_infos = '<div id="infos"><div class="produto codigo">Código: <span></span></div><div class="produto nome">Nome: <span></span></div><div class="produto valor">Valor: R$ <span></span></div><div class="produto qtd">Qtd. disponível: <span></span></div></div>';

var html_form = '<form class="botoes" id="form-produtos"> <input type="hidden" class="codigo-produto"> <button id="usar">Usar 1</button> <button id="editar">Editar este</button> <button id="excluir">Excluir este</button> </form>';

var teste = ['a', 'b'];

//esta cria a visão da lista para administradores
function listaAdm(v) 
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
}

if(document.getElementById('main-produtos-a')) {

    $.each(teste, function() {
        
        listaAdm();
    })


} else {

    listaComum();
}






