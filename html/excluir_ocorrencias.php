<?php
    include("conecta.php");
    $id_paciente = $_GET["id_paciente"];
        
        $comando = $pdo->prepare("DELETE FROM dados_paciente WHERE id_paciente=?");
        $comando->execute([$id_paciente]);

    header("Location: ocorrencias.php");
?>