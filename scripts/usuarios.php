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
        $resposta = array('codigo' => 0);
        echo json_encode($resposta);
        exit();
        
    endif;    

else:

    echo '<pre>';
    print_r($_POST);

endif;