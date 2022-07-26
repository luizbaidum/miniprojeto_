<?php

require_once '../server/conectar.php';

if(in_array('total', $_POST)):

    $sql = 'SELECT id, nome, password, acesso FROM usuarios';
    $stm = $con->prepare($sql);

    $stm->execute();
    $retorno = $stm->fetchAll(PDO::FETCH_OBJ);

    if($retorno):

        $resposta = [];
        $i = 0;

        foreach($retorno as $usuario) {
            $resposta[$i]['id'] = $usuario->id;
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

if(in_array('editar', $_POST)):

    $id = explode('=', $_POST['data']);

    $sql = "SELECT id, nome, password, acesso FROM usuarios WHERE id = ?";
    $stm = $con->prepare($sql);
    $stm->bindValue(1, $id[1]);

    $stm->execute();

    $retorno = $stm->fetch(PDO::FETCH_OBJ);

    echo json_encode($retorno);
    exit();
endif;    