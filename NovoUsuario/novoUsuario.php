<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/brasao ATOMO.png" type="image/x-icon">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="newUser.css">
    <title>Novo Usuario</title>
</head>

<body>
    <hearder>
        <div class="header">
            <img src="../assets/img/navbar letreiro.png" alt="" class="brasao">
            <h1 id="newUser">Novo Usuario</h1>
            <div id="none2">
                <div class="none"></div>
                
                <div class="window"> 
                    <form action="../sistema/cad.php" method="POST">
                        <input type="hidden" name="acao" value="cadastrar">
                        <div class="campos">
                            <label for="">Nome-Usuario</label><br>
                            <input type="text" placeholder="Nome" name="nome" required><br>
                        </div>

                        <div class="campos">
                            <label for="">E-Mail</label><br>
                            <input type="email" placeholder="E-Mail" name="email" required><br>
                        </div>

                        <div class="campos">
                            <label for="">Senha</label><br>
                            <input type="password" placeholder="Senha" name="senha" required>
                        </div>
                        <div class="buttons">
                            
                            <button id="btn-cadastrar">Cadastrar</button>
                        </div>
                    </form>
                </div>
                <a href="../index.php" class="btn-login"><button>Login</button></a>
                <div class="none"></div>
            </div>
        </div>
    </hearder>
</body>
<script src="newUserMain.js"></script>

</html>