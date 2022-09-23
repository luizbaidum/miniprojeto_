<?php

try {
    $con = new PDO("mysql:host= * seu host *;dbname= * seu db *;charset=utf8","*seu usuario*","*sua senha*");

} catch (Exception $e) {
    throw new Exception('Erro durante a conexão');
    $e->getMessage();
}
