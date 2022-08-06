<html>
    <head>
        <title>Produtos</title>
        <link type="text/css" rel="stylesheet" href="css/custom.css">
    </head>

    <body>

        <?php require_once 'barrinha.php'; ?>

        <?php if ($acesso == 0)
                require 'paginas/main-produtos-f.php';

              else
                require 'paginas/main-produtos-a.php';
        ?>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/produtos.js"></script>
    <script src="scripts/produtos-CRUD.js"></script>
</html>