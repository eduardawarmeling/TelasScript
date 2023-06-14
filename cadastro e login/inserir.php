<?php
    include("conecta.php");

    $nome  = $_POST["nome"];
    $cpf      = $_POST["cpf"];
    $email     = $_POST["email"];
    $senha      = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$nome','$cpf','$email','$senha')" );
    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: cadastro.html");
?>