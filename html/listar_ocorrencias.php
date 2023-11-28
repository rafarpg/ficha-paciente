<?php
        include_once("conecta.php");
        if($url==1)
        {

            if($meuselect==1)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE nome_paciente LIKE '%$texto%' ");
            }
            if($meuselect==2)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE local_ocorrencia LIKE '%$texto%' ");
            }
        }
        else{
            $comando = $pdo->prepare("SELECT * FROM dados_paciente  ");
        }
        
        $comando->execute();
        
        
        if ($comando->rowCount() >= 1) {
            $lista_ocorrencias = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>