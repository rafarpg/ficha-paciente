
<?php

include("conecta.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$criptografada = md5($senha);

$comando = $pdo->prepare("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$criptografada';");
    
$comando->execute();

    if($comando->rowCount() == 1){
        $usuario = $comando->fetch();
        
        //usuário autenticado!
        session_start();
        $_SESSION["nome"] = $usuario['nome'];
        $_SESSION["id"] = $usuario['id'];
        $_SESSION["conectado"] = "true";
        header("location:tela_principal.html");
    }else{
        //e-mail ou senha incorretos.
        header("location:login.html");
    }
?>