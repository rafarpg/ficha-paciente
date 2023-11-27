<?php
        include_once("conecta.php");
        $alt_user = $_GET["id"];
        
        $comando = $pdo->prepare("SELECT * FROM usuarios WHERE id=?;");
        $comando->execute([$alt_user]);
        
        
        if ($comando->rowCount() >= 1) {
            $lista_usuarios2 = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>