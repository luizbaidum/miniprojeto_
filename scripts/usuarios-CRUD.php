<?php

require_once '../server/conectar.php';

if(isset($_POST['operacao'])):

    $dados_usuario = explode('&', $_POST['data']);

    foreach($dados_usuario as $chave => $valor) {

        $dado_usuario[$chave] = explode('=', $valor);
    }

    $operacao = $dado_usuario[0][1];
    $old_nome = $dado_usuario[1][1];
    $new_nome = $dado_usuario[2][1];
    $passw = $dado_usuario[3][1];
    $acesso = $dado_usuario[4][1];

    //Novo Usuário
    if($_POST['operacao'] == 'novo'):

        $sql = "INSERT INTO usuarios2 (nome, password, acesso) VALUES (?, ?, ?)";

        $stm = $con->prepare($sql);
        $stm->bindValue(1, $new_nome);
        $stm->bindValue(2, $passw);
        $stm->bindValue(3, $acesso);
    
        $stm->execute();
    
        //Verifica se insert/update teve sucesso!!
        if($stm->rowCount() > 0):
    
            $resposta = array('codigo' => 1, 'mensagem' => 'Novo usuário cadastrado com sucesso');
        else:
    
            $resposta = array('codigo' => 0, 'mensagem' => 'Erro ao cadastrar novo usuário. Provavelmente já existe este nome na base de dados');
        endif;
    
        echo json_encode($resposta);
        exit();

        //Edição de Usuário
    elseif($_POST['operacao'] == 'editar'):

            $sql = "UPDATE usuarios2
                    SET nome = ?, password = ?, acesso = ?
                    WHERE nome = ?; 
                ";
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $new_nome);
        $stm->bindValue(2, $passw);
        $stm->bindValue(3, $acesso);
        $stm->bindValue(4, $old_nome);

        $stm->execute();

        //Verifica se insert/update teve sucesso!!
        if($stm->rowCount() > 0):

            $resposta = array('codigo' => 1, 'mensagem' => 'Usuário atualizado com sucesso');
        else:

            $resposta = array('codigo' => 0, 'mensagem' => 'Erro ao atualizar usuário. Provavelmente já existe este nome na base de dados');
        endif;

        echo json_encode($resposta);
        exit();
    endif;

//Deleção de Usuário   
else:

    $nome = $_POST['seleciona_este'][0];
    
    $sql = "DELETE from usuarios2 WHERE nome = ?";

    $stm = $con->prepare($sql);
    $stm->bindValue(1, $nome);
    
    $stm->execute();
    
    if($stm->rowCount() > 0):
    
        $resposta = array('codigo' => 1, 'mensagem' => 'Usuário deletado com sucesso');
    else:
    
        $resposta = array('codigo' => 0, 'mensagem' => 'Erro ao deletar usuário.');
    endif;
    
    echo json_encode($resposta);
    exit();  
endif;