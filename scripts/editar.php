<?php

require_once '../server/conectar.php';

//Edição de Usuário
if(isset($_POST['usuario-oldnome'])):

    $oldNome = $_POST['usuario-oldnome'];
    $newNome = $_POST['usuario-newnome'];
    $passw = $_POST['usuario-passw'];
    $acesso = $_POST['usuario-acesso'];

    $sql = "UPDATE usuarios2
            SET nome = ?, password = ?, acesso = ?
            WHERE nome = ?; 
        ";
    $stm = $con->prepare($sql);
    $stm->bindValue(1, $newNome);
    $stm->bindValue(2, $passw);
    $stm->bindValue(3, $acesso);
    $stm->bindValue(4, $oldNome);

    $stm->execute();

    //Verifica se update teve sucesso!!
    if($stm->rowCount() > 0):

        $resposta = array('codigo' => 1, 'mensagem' => 'Usuário atualizado com sucesso');
    else:

        $resposta = array('codigo' => 0, 'mensagem' => 'Erro ao atualizar usuário. Provavelmente já existe este nome na base de dados');
    endif;

    echo json_encode($resposta);
    exit();
endif;  