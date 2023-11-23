<?php
        include_once("conecta.php");
//session_start();
    $codigo = $_SESSION["codigo"];
        
        $comando = $pdo->prepare("SELECT id,nome,email,telefone,perfil FROM usuarios WHERE professores_idprofessor= ?;");
        $comando->execute([$codigo]);
        
        
        if ($comando->rowCount() >= 1) {
            $lista_usuarios = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>