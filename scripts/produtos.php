<?php

require_once '../server/conectar.php';

//Consulta todos os produtos
if($_POST['listagem'] == 'total') {

    $sql = 'SELECT codigo, nome, valor, qtd FROM produtos';
    $stm = $con->prepare($sql);

    $stm->execute();
    $retorno = $stm->fetchAll(PDO::FETCH_OBJ);

    if($retorno):

        $resposta = [];
        $i = 0;

        foreach($retorno as $produto) {
            $resposta[$i]['codigo'] = $produto->codigo;
            $resposta[$i]['nome'] = $produto->nome;
            $resposta[$i]['valor'] = $produto->valor;
            $resposta[$i]['qtd'] = $produto->qtd;

            $i++;
        }

        echo json_encode($resposta);
        exit();
    
    else:
        $resposta = null;
        echo json_encode($resposta);
        exit();
        
    endif;
}    