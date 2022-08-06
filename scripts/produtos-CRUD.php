<?php

require_once '../server/conectar.php';

if(isset($_POST['operacao'])):

    $dados_produto = explode('&', $_POST['data']);

    foreach($dados_produto as $chave => $valor) {

        $dado_produto[$chave] = explode('=', $valor);
    }

    $codigo = $dado_produto[0][1];
    $nome = $dado_produto[1][1];
    $valor = $dado_produto[2][1];
    $qtd = $dado_produto[3][1];

    //Novo Produto
    if($_POST['operacao'] == 'novo'):

        $sql = "INSERT INTO produtos (codigo, nome, valor, qtd) VALUES (?, ?, ?, ?)";

        $stm = $con->prepare($sql);
        $stm->bindValue(1, $codigo);
        $stm->bindValue(2, $nome);
        $stm->bindValue(3, $valor);
        $stm->bindValue(4, $qtd);
    
        $stm->execute();
    
        //Verifica se insert/update teve sucesso!!
        if($stm->rowCount() > 0):
    
            $resposta = array('codigo' => 'cadastrado', 'mensagem' => 'Novo produto cadastrado com sucesso', 'nome' => $nome);
        else:
    
            $resposta = array('codigo' => 0, 'mensagem' => 'Erro ao cadastrar novo produto. Provavelmente já existe este nome na base de dados');
        endif;
    
        echo json_encode($resposta);
        exit();

    //Edição de Produto
    elseif($_POST['operacao'] == 'editar'):

        $oldCodigo = $dado_produto[5][1];

            $sql = "UPDATE produtos
                    SET codigo = ?, nome = ?, valor = ?, qtd = ?
                    WHERE codigo = ?; 
                ";

        $stm = $con->prepare($sql);
        $stm->bindValue(1, $codigo);
        $stm->bindValue(2, $nome);
        $stm->bindValue(3, $valor);
        $stm->bindValue(4, $qtd);
        $stm->bindValue(5, $oldCodigo);

        $stm->execute();

        //Verifica se insert/update teve sucesso!!
        if($stm->rowCount() > 0):

            $resposta = array('codigo' => 'editado', 'mensagem' => 'Produto atualizado com sucesso');
        else:

            $resposta = array('codigo' => 0, 'mensagem' => 'Erro ao atualizar Produto. Provavelmente o código digitado já existe na base de dados');
        endif;

        echo json_encode($resposta);
        exit();
    endif;

//Deleção de Produto   
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