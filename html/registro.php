<?php
    include("conecta.php");
$idb= $_GET["id"];
    $nome_paciente = $_POST["nome_paciente"];
    $sexo_paciente = $_POST['sexo_paciente'];
    $rg_cpf_paciente = $_POST["rg_cpf_paciente"];
    $nome_hospital = $_POST["nome_hospital"];
    $nome_acompanhante = $_POST["nome_acompanhante"];
    $telefone_paciente = $_POST["telefone_paciente"];
    $idade_paciente = $_POST["idade_paciente"];
    $idade_acompanhante = $_POST["idade_acompanhante"];
    $local_ocorrencia = $_POST["local_ocorrencia"];

if(isset($_POST["inserir"]))
{ 
    $comando = $pdo->prepare("INSERT INTO dados_paciente (nome_paciente, rg_cpf_paciente, sexo_paciente, nome_hospital, nome_acompanhante, telefone_paciente, idade_paciente, idade_acompanhante, local_ocorrencia, idb) VALUES (\"$nome_paciente\", \"$rg_cpf_paciente\" ,\"$sexo_paciente\",\"$nome_hospital\",\"$nome_acompanhante\",\"$telefone_paciente\",\"$idade_paciente\",\"$idade_acompanhante\",\"$local_ocorrencia\",\"$idb\" )");
    $resultado = $comando->execute();  
    header("Location: info_ocorrencia.html");
}


?>