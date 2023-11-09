<?php
    include("conecta.php");
    $ex_user = $_GET["I"];

    $comando = $pdo->prepare("DELETE FROM usuarios WHERE email=$ex_user");
    $resultado = $comando->execute();

    header("Location: cadastro.html");
?>