<html>
    <head>
        <title>Usuários</title>
        <link type="text/css" rel="stylesheet" href="css/custom.css">
    </head>

    <body>

        <?php require_once 'barrinha.php'; ?>

        <?php if ($acesso == 0)
                require 'paginas/main-usuarios-f.php';
              else
                require 'paginas/main-usuarios-a.php';
        ?>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/usuarios.js"></script>
</html>