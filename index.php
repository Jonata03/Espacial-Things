<?php
include("sistema/configuracao.php");

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém as credenciais do formulário
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // Consulta ao banco de dados
    $sql = "SELECT id, nome, senha FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Cria um cookie de login válido por 1 hora (3600 segundos)
        setcookie("usuario_logado", "true", time() + 3600, "/");
        header("Location: area_restrita.php");
        echo "<script>window.alert('cookie criado');'</script>";
        exit();
    } else {
        $erro_login = "Credenciais inválidas. Tente novamente.";
    }
}?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/brasao ATOMO.png" type="image/x-icon">
    <link rel="stylesheet" href="login/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="login/login.css">
    <title>Login</title>
</head>

<body>
    <hearder>
        <div class="header">
            <img src="assets/img/navbar letreiro.png" alt="" class="brasao">
            <h1 id="newUser">Login</h1>
            <div id="none2">
                <div class="none"></div>
                <div class="window">
                    <form action="sistema/log.php" method="POST">
                        <input type="hidden" name="acao" value="comparar">
                        <div class="campos">
                            <label for="">Usuário</label><br>
                            <input type="text" placeholder="Nome de Usuário" name="nome" required> <br>
                        </div>
                        <div class="campos">
                            <label for="">Senha</label><br>
                            <input type="password" placeholder="Senha"name="senha" required>
                        </div>
                        <div class="buttons">

                            <button id="btn-cadastrar">Entrar</button>
                        </form>
                        
                        </div>
                    
                    
                </div><a href="NovoUsuario/novoUsuario.php" class="btn-newUser"><button>Novo Usuário</button></a>
                <div class="none"></div>
            </div>
        </div>
    </hearder>

</body>
<script src="login/login.js"></script>

</html>