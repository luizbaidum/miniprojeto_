<html>
    <head>
        <title>Home</title>
        <link type="text/css" rel="stylesheet" href="css/custom.css">
    </head>

    <body>

        <?php require_once 'barrinha.php'; ?>

        <?php if ($acesso == 0)
                require 'paginas/main-home-f.php';
              else
                require 'paginas/main-home-a.php';
        ?>
    </body>
</html>