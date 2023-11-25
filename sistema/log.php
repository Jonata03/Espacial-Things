<?php
include("configuracao.php");

switch ($_REQUEST["acao"]) {
    case "comparar":

        // Recebe dados do formulário
        $nome = ($_POST["nome"]); // corrigido de $username para $nome
        $senha = ($_POST["senha"]);

        // Consulta SQL para verificar se o usuário e senha coincidem
        $sql = "SELECT id, nome, senha FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Usuário e senha coincidem, inicia a sessão
            $row = $result->fetch_assoc();
            $_SESSION["usuario_id"] = $row["id"];
            $_SESSION["usuario_nome"] = $row["nome"];
            echo "<script>window.location.href = '../assets/noticia.php'</script>"; // Redireciona para a página do painel de controle
            exit();
        } else {
            echo "<script>alert('Senha ou usuario invalido!');</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        }

        // Fechar a conexão com o banco de dados
        $conn->close();

        break;
}
?>
