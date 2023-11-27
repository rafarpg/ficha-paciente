<?php
    include_once('conecta2.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $criptografada = md5($senha);
        $telefone = $_POST['telefone'];
        $perfil = $_POST['perfil'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',email='$email',telefone='$telefone',senha='$criptografada', perfil='$perfil' WHERE id=$id";
        $result = $conexao->query($sqlInsert);
    }
    else{
        header('Location: alterar_usuario.php');
    }
    header('Location: usuarios.php');

?>