<?php

echo 'aqui';

/*
$email = (isset($_POST['email'])) ? $_POST['email'] : '' ;
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '' ;

$sql = 'SELECT id, nome, senha, email FROM tab_usuario WHERE email = ? AND status = ? LIMIT 1';
$stm = $conexao->prepare($sql);
$stm->bindValue(1, $email);
$stm->bindValue(2, 'A');
$stm->execute();
$retorno = $stm->fetch(PDO::FETCH_OBJ);

$_SESSION['id'] = $retorno->id;
	$_SESSION['nome'] = $retorno->nome;
	$_SESSION['email'] = $retorno->email;
	$_SESSION['tentativas'] = 0;
	$_SESSION['logado'] = 'SIM';

if ($_SESSION['logado'] == 'SIM'):
	$retorno = array('codigo' => 1, 'mensagem' => 'Logado com sucesso!');
	echo json_encode($retorno);
	exit();
else:
	echo 'erro';
endif;