<?php

include("conecta.php");

$alt_nome  = $_POST["alt_nome"];
$alt_user = $_POST["alt_user"];
$adm_user = $_POST["adm_user"];
$alt_senha  = $_POST["alt_senha"];

  
$criptografada = md5($alt_senha);

$sql = "SELECT * FROM usuarios WHERE email='$adm_user' AND perfil = 'administrador'";

$result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)


$json_texto = json_encode(["usuarios" => $usuarios]);
echo($json_texto);  
echo "Usuário Cadastrado!";
?>