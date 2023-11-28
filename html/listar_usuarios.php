<?php
        include_once("conecta.php");
        
        if($url==1)
        {

            if($meuselect==1)
            {
                $comando = $pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE '%$texto%' ");
            }
            if($meuselect==2)
            {
                $comando = $pdo->prepare("SELECT * FROM usuarios WHERE email LIKE '%$texto%' ");
            }
            if($meuselect==3)
            {
                $comando = $pdo->prepare("SELECT * FROM usuarios WHERE telefone LIKE '%$texto%' ");
            }
            if($meuselect==4)
            {
                $comando = $pdo->prepare("SELECT * FROM usuarios WHERE perfil LIKE '%$texto%' ");
            }

        }
        else{
            $comando = $pdo->prepare("SELECT * FROM usuarios");
        }
        $comando->execute();
        
        
        if ($comando->rowCount() >= 1) {
            $lista_usuarios = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>