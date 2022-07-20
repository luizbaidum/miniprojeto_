<?php

session_start();

if(!isset($_SESSION) || $_SESSION['logado'] != 1) {

    header('Location: index.php');
} else {
    
    $nome = $_SESSION['login'];
    $acesso = $_SESSION['acesso'];
}