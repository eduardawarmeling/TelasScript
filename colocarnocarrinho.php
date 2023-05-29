<?php
include ("conecta.php");

$codigo = $_GET["codigo"];
$valor = $_GET["valor"];

$comando = $pdo->prepare("INSERT INTO carrinho (codigo_produto,valor) VALUES(:codigo,:valor)");
    $comando->bindParam(':codigo', $codigo);
    $comando->bindParam(':valor', $valor);
    $comando->execute();

    header("location: carrinho/carrinho.php"); 
?>