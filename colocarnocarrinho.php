<?php
include ("conecta.php");

$codigo = $_GET["codigo"];
$valor = $_GET["valor"];

$comando = $pdo->prepare("INSERT INTO carrinho_php  VALUES(:codigo,:valor)");
    $comando->bindParam(':codigo', $codigo);
    $comando->bindParam(':valor', $valor);
    $comando->execute();

    header("location: carrinho/carrinho.php"); 
?>