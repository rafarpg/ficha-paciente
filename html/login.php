<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('conecta.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $criptografada = md5($senha);

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$criptografada'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: tela_principal.html');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $criptografada;
            header('Location: tela_principal.html');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.html');
    }
?>