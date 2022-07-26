<?php

require_once '../server/conectar.php';

//Edição de Usuário
if(isset($_POST['usuario-nome'])):

    $id = $_POST['usuario-id'];
    $nome = $_POST['usuario-nome'];
    $passw = $_POST['usuario-passw'];
    $acesso = $_POST['usuario-acesso'];

    $sql = "UPDATE usuarios
            SET nome = ?, password = ?, acesso = ?
            WHERE id = ?; 
        ";
    $stm = $con->prepare($sql);
    $stm->bindValue(1, $nome);
    $stm->bindValue(2, $passw);
    $stm->bindValue(3, $acesso);
    $stm->bindValue(4, $id);

    $stm->execute();

    //Verifica se update teve sucesso!!
    if($stm->rowCount() > 0):

        $resposta = array('codigo' => 1, 'mensagem' => 'Usuário atualizado com sucesso');
    else:

        $resposta = array('codigo' => 0, 'mensagem' => 'Erro ao atualizar usuário');
    endif;

    echo json_encode($resposta);
    exit();
endif;  