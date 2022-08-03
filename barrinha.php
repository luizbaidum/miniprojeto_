<?php 
    require 'scripts/acesso.php'; 
?>

<div id="barrinha">

    <span id="nome">Usuário logado: <?= $nome?></span>

    <span>
        <a href="home.php">Home</a> |
        <a href="sair.php">Sair</a>
    </span>
</div>

