<?php
    include("conecta.php");

    $email     = $_POST["email"];
    $senha      = $_POST["senha"];

    // Para voltar no formulário:
    header("Location: ../produtos/produtos.html");
?>

