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
            if($meuselect==3)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE rg_cpf_paciente LIKE '%$texto%' ");
            }
            if($meuselect==4)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE nome_hospital LIKE '%$texto%' ");
            }
            if($meuselect==5)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE sexo_paciente LIKE '%$texto%' ");
            }
            if($meuselect==6)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE nome_acompanhante LIKE '%$texto%' ");
            }
            if($meuselect==7)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE telefone_paciente LIKE '%$texto%' ");
            }
            if($meuselect==8)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE idade_paciente LIKE '%$texto%' ");
            }
            if($meuselect==9)
            {
                $comando = $pdo->prepare("SELECT * FROM dados_paciente WHERE idade_acompanhante LIKE '%$texto%' ");
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