<?php
    include("configuracao.php");
    switch ($_REQUEST["acao"]){
        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('{$nome}','{$email}', '{$senha}')";
            $res = $conn->query($sql);
            if($res==true){
                echo "<script>alert('Cadastrado com Sucesso!');</script>";
                echo "<script>window.location.href = '../index.php'</script>";
            }else{
                echo "<script>alert('Não foi possivel cadastrar este usuario!');</script>";
            }
            break;
    }
?>