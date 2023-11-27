<?php
    include_once('conecta2.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $criptografada = md5($senha);
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $perfil = $user_data['perfil'];
            }
        }
        else
        {
            header('Location: usuarios.php');
        }
    }
    else
    {
        header('Location: usuarios.php');
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
</head>
<body>
    <div class="cabecalho">Alterar Dados</div>
    <div class="campo">
        <img src="../imagens/noar.png" width="150px">
        <form method="post" action="alterar.php" id="form1">
            <label>Alterar Nome: </label><br><input type="text" name="nome" id="nome" placeholder="Alterar nome" value=<?php echo $nome;?>><br>
            <label>Alterar E-mail: </label><br><input type="text" name="email" id="email" placeholder="Alterar e-mail" value=<?php echo $email;?>><br>
            <label>Alterar Telefone: </label><br><input type="text" name="telefone" id="telefone" placeholder="Alterar telefone" value=<?php echo $telefone;?>><br>
            <label>Alterar Senha: </label><br><input type="password" name="senha" id="senha" placeholder="Alterar senha" value=""><br>
            <label>Alterar Perfil: </label>
            <select name="perfil" id="perfil">
                <option value=<?php echo $perfil;?>><?php echo $perfil;?></option>
                <option value="administrador">administrador</option>
                <option value="normal">normal</option>
            </select>
    </div>
    <div class="campo2">
            <a class="voltar" href="usuarios.php">Voltar</a>
                &nbsp; &nbsp; &nbsp;
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" class="enviar"name="update" id="submit" value="Alterar">
    </div>

        </form>
</body> 
</html>