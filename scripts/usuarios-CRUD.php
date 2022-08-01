<?php

require_once '../server/conectar.php';

//aqui q aqui vou precisar colocar explode ou decodificar o json
//conferir o q estou recebendo

//Novo Usuário
if($_POST['operacao'] == 'novo'):

    $newNome = $_POST['usuario-newnome'];
    $passw = $_POST['usuario-passw'];
    $acesso = $_POST['usuario-acesso'];

    $sql = "INSERT INTO usuarios2 (nome, password, acesso) VALUES (?, ?, ?)";

    $stm = $con->prepare($sql);
    $stm->bindValue(1, $newNome);
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
endif;  

//Edição de Usuário
if($_POST['operacao'] == 'editar'):

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

    //Verifica se insert/update teve sucesso!!
    if($stm->rowCount() > 0):

        $resposta = array('codigo' => 1, 'mensagem' => 'Usuário atualizado com sucesso');
    else:

        $resposta = array('codigo' => 0, 'mensagem' => 'Erro ao atualizar usuário. Provavelmente já existe este nome na base de dados');
    endif;

    echo json_encode($resposta);
    exit();
endif;  