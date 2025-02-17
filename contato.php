<?php

    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];

    $sqli = "INSERT INTO contato(nome, email, assunto) VALUES('$nome', '$email', '$assunto')";

    if(mysqli_query($conexao, $sqli)) {
        echo "Mensagem enviada com sucesso!";
    }
    else {
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);

?>