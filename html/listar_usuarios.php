<?php
        include_once("conecta.php");
        
        $comando = $pdo->prepare("SELECT * FROM usuarios;");
        $comando->execute();
        
        
        if ($comando->rowCount() >= 1) {
            $lista_usuarios = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>