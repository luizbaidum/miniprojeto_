<html>
    <head>
        <title>Miniprojeto_CONAG</title>
        <link type="text/css" rel="stylesheet" href="css/custom.css">
    </head>

    <body>
        <div class="container">
            <div id="div-login">
                <span>Bem vindo ao miniprojeto!</span>
                <form method="post" id="form-login"> 
                    <p> 
                        <label for="nome_login">Nome/login</label>
                        <input id="nome_login" name="nome-login" required="required" type="text" placeholder="Entre com seu login">
                    </p>
                    
                    <p> 
                        <label for="passw">Senha</label>
                        <input id="passw" name="passw" required="required" type="password" placeholder="Digite sua senha"> 
                    </p>
                                
                    <p> 
                        <input type="submit" id="btn-login" value="Logar"> 
                    </p>
                </form>
            </div>
        </div>    
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/CRUD-login.js"></script>
</html>