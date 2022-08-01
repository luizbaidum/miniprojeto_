<?php

require_once '../server/conectar.php';

//lista
if(in_array('total', $_POST)):

    $sql = 'SELECT nome, password, acesso FROM usuarios2';
    $stm = $con->prepare($sql);

    $stm->execute();
    $retorno = $stm->fetchAll(PDO::FETCH_OBJ);

    if($retorno):

        $resposta = [];
        $i = 0;

        foreach($retorno as $usuario) {
            $resposta[$i]['nome'] = $usuario->nome;
            $resposta[$i]['passw'] = $usuario->password;
            $resposta[$i]['acesso'] = $usuario->acesso;

            $i++;
        }

        echo json_encode($resposta);
        exit();
    
    else:
        $resposta = array('codigo' => 0, 'mensagem' => 'Usuários não carregados');
        echo json_encode($resposta);
        exit();
        
    endif;
endif;

//CRUDs
if(in_array('novo', $_POST)):

    $retorno = true;

    echo json_encode($retorno);
    exit();

elseif(in_array('editar', $_POST)):

    $nome = explode('=', $_POST['data']);

    $sql = "SELECT nome, password, acesso FROM usuarios2 WHERE nome = ?";
    $stm = $con->prepare($sql);
    $stm->bindValue(1, $nome[1]);

    $stm->execute();

    $retorno = $stm->fetch(PDO::FETCH_OBJ);

    echo json_encode($retorno);
    exit();
    
elseif(in_array('excluir', $_POST)):

    echo json_encode('a');
    exit();   
endif;    