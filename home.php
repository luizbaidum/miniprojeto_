<html>
    <head>
        <title>Home</title>
        <link type="text/css" rel="stylesheet" href="css/custom.css">
    </head>

    <body>

        <?php require_once 'barrinha.php'; ?>

        <main class="container">

            <div>Bem-vindo(a)!</div>
            <div id="menu">
                <a id="usuarios">Usuários</a>
                <span>Se F = só pode atualizar a si mesmo / Se A = vê lista de usuários, pode criar novo usuário, pode apagar usuário e atualizar a si mesmo</span>

                <a id="cad-produtos">Cadastro de Produtos</a>
                <span>F e A fazem a mesma coisa = cadastram produtos</span>

                <a id="produtos">Lista de Produtos Cadastrados</a>
                <span>F só visualiza produtos cadastrados / Se a visualiza produtos e pode apagar e deletar</span>
            </div>
        </main>
    </body>
</html>