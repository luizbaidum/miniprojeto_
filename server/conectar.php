<?php

try {
    $con = new PDO("mysql:host=localhost;dbname=miniprojeto_conag;charset=utf8","root","");

} catch (Exception $e) {
    throw new Exception('Erro durante a conexão');
    $e->getMessage();
}
