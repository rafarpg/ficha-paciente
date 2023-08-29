<?php

include("conecta.php");

$nome  = $_POST["nome"];
$email  = $_POST["email"];
$telefone = $_POST["telefone"];
$senha  = $_POST["senha"];

$usuarios = [];  // Variável usada para guardar os dados acima no formato JSON.
$criptografada = md5($senha);

$comando = $pdo->prepare("INSERT INTO usuarios (nome, email, telefone, senha) VALUES (\"$nome\", \"$email\" ,\"$telefone\",\"$criptografada\" )");

$resultado = $comando->execute();
echo("{\"resultado\":1}");


$json_texto = json_encode(["usuarios" => $usuarios]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html
echo "Usuário Cadastrado!";
?>