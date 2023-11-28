<?php
    include_once('conecta2.php');

    if(!empty($_GET['id_paciente']))
    {
        $id_paciente = $_GET['id_paciente'];
        $sqlSelect = "SELECT * FROM dados_paciente WHERE id_paciente=$id_paciente";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($ocorr_data = mysqli_fetch_assoc($result))
            {
                $nome_paciente = $ocorr_data['nome_paciente'];
                $sexo_paciente = $ocorr_data['sexo_paciente'];
                $rg_cpf_paciente = $ocorr_data['rg_cpf_paciente'];
                $nome_hospital = $ocorr_data['nome_hospital'];
                $nome_acompanhante = $ocorr_data['nome_acompanhante'];
                $telefone_paciente = $ocorr_data['telefone_paciente'];
                $idade_paciente = $ocorr_data['idade_paciente'];
                $idade_acompanhante = $ocorr_data['idade_acompanhante'];
                $local_ocorrencia = $ocorr_data['local_ocorrencia'];
            }
        }
        else
        {
            header('Location: ocorrencias.php');
        }
    }
    else
    {
        header('Location: ocorrencias.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
<title>Tela de Adm</title>
<style>
</style>
</head>
<body>
    <div class="cabecalho">Alterar Dados</div>
    <div class="campo">
        <img src="../imagens/noar.png" width="150px">
        <form method="post" action="alterar2.php" id="form1">
                    <label>Nome:</label><br>
                    <input type="text" id="nome_paciente" name="nome_paciente" value=<?php echo $nome_paciente;?>><br>
                    
                <label>RG/CPF Paciente:</label><br>
                <input type="text" id="rg_cpf_paciente" name="rg_cpf_paciente" value=<?php echo $rg_cpf_paciente;?>><br>
                
                <p>Sexo:</p>
                <label for="feminino">Feminino</label>
                <input type="radio" id="feminino" name="sexo_paciente" value="feminino" <?php echo ($sexo_paciente == 'f') ? 'checked' : '';?> required>
                
                <br>
                <label for="masculino">Masculino</label>  
                <input type="radio" id="masculino" name="sexo_paciente" value="masculino" <?php echo ($sexo_paciente == 'm') ? 'checked' : '';?> required>
                
        
                <br><br>
                <label>Nome do Hospital:</label><br>
                <input type="text" id="nome_hospital" name="nome_hospital" value=<?php echo $nome_hospital;?>><br>
                
                <label>Acompanhante:</label><br>
                    <input type="text" id="nome_acompanhante" name="nome_acompanhante" value=<?php echo $nome_acompanhante;?>><br>
                    
               <label>Telefone do Paciente:</label><br>
                    <input type="text" id="telefone_paciente" name="telefone_paciente" value=<?php echo $telefone_paciente;?>><br>
                    
                <label>Idade do Paciente:</label><br>
                   <input type="number" id="idade_paciente" name="idade_paciente" class="idade" value=<?php echo $idade_paciente;?>><br>
                    
                <label>Idade do Acompanhante:</label><br>
                    <input type="number" id="idade_acompanhante" name="idade_acompanhante" class="idade" value=<?php echo $idade_acompanhante;?>><br>
                    
                <label>Local da Ocorrência:</label><br>
                    <input type="text" id="local_ocorrencia" name="local_ocorrencia" value=<?php echo $local_ocorrencia;?>><br>    
    </div>
    <div class="campo2">
    <a class="voltar" href="ocorrencias.php">Voltar</a>
                &nbsp; &nbsp; &nbsp;
                <input type="hidden" name="id_paciente" value=<?php echo $id_paciente;?>>
            <input type="submit" class="enviar"name="update" id="submit" value="Alterar">

    </div>

        </form>
</body> 