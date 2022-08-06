<?php

require_once '../server/conectar.php';

//Consultar todos os produtos
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

//Consultar todos os produtos
if($_POST['listagem'] == 'editar') {

    $codigo = explode('=', $_POST['data']);

    $sql = 'SELECT codigo, nome, valor, qtd FROM produtos WHERE codigo = ?';
    $stm = $con->prepare($sql);
    $stm->bindValue(1, $codigo[1]);  

    $stm->execute();
    $retorno = $stm->fetch(PDO::FETCH_OBJ);

    if($retorno):

        echo json_encode($retorno);
        exit();
    
    else:
        $retorno = null;
        echo json_encode($retorno);
        exit();
        
    endif;
}    