<?php
    include("conecta.php");
    $ex_user = $_GET["id"];
        
        $comando = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
        $comando->execute([$ex_user]);

    header("Location: usuarios.php");
?>