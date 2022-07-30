<?php

require_once '../server/conectar.php';

$login = (isset($_POST['login'])) ? $_POST['login'] : '' ;
$senha = (isset($_POST['passw'])) ? $_POST['passw'] : '' ;

$sql = 'SELECT nome, password, acesso FROM usuarios2 WHERE nome = ? AND password = ?';
$stm = $con->prepare($sql);
$stm->bindValue(1, $login);
$stm->bindValue(2, $senha);
//passa os valores das variáveis pra dentro da $sql montada

$stm->execute();
$retorno = $stm->fetch(PDO::FETCH_OBJ);
//$retorno é um objeto!!!!!!!

session_start();

if($retorno):
	$_SESSION['login'] = $retorno->nome;
	$_SESSION['acesso'] = $retorno->acesso;
	$_SESSION['logado'] = 1;
else:
	$_SESSION['logado'] = 0;
endif;

if ($_SESSION['logado'] == 1):
	$resposta = array('codigo' => 1, 'mensagem' => 'Logado com sucesso!');
	echo json_encode($resposta);
	exit();
else:
	$resposta = array('codigo' => 0, 'mensagem' => 'Login ou senha errado(s)!');
	echo json_encode($resposta);
	exit();
endif;