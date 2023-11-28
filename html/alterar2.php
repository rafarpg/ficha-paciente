<?php
    include_once('conecta2.php');
    if(isset($_POST['update']))
    {
        $id_paciente = $_POST['id_paciente'];
        $nome_paciente = $_POST["nome_paciente"];
        $sexo_paciente = $_POST['sexo_paciente'];
        $rg_cpf_paciente = $_POST["rg_cpf_paciente"];
        $nome_hospital = $_POST["nome_hospital"];
        $nome_acompanhante = $_POST["nome_acompanhante"];
        $telefone_paciente = $_POST["telefone_paciente"];
        $idade_paciente = $_POST["idade_paciente"];
        $idade_acompanhante = $_POST["idade_acompanhante"];
        $local_ocorrencia = $_POST["local_ocorrencia"];
        
        $sqlInsert = "UPDATE dados_paciente 
        SET nome_paciente='$nome_paciente',rg_cpf_paciente='$rg_cpf_paciente',sexo_paciente='$sexo_paciente',nome_hospital='$nome_hospital', nome_acompanhante='$nome_acompanhante',
         telefone_paciente='$telefone_paciente',idade_paciente='$idade_paciente',idade_acompanhante='$idade_acompanhante',local_ocorrencia='$local_ocorrencia' WHERE id_paciente=$id_paciente";
        $result = $conexao->query($sqlInsert);
    }
    else{
        header('Location: alterar_ocorrencia.php');
    }
    header('Location: ocorrencias.php');

?>