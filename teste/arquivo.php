<?php

include("conecta.php");

$email  = $_POST["email"];
$cpf  = $_POST["cpf"];
$senha  = $_POST["senha"];

$usuarios = [];  // Variável usada para guardar os dados acima no formato JSON.
$criptografada = md5($senha);

$comando = $pdo->prepare("INSERT INTO usuarios (email, cpf, senha) VALUES (?, ?, ?)");
$resultado = $comando->execute([$email, $cpf, $criptografada]);

// O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
// Neste exemplo estamos apenas devolvendo o que o usuário digitou no formulário
$resposta = 
      [   
         "email" => $email,
         "cpf" => $cpf,
         "senha"  => $senha,
         "criptografada" => $criptografada,
      ];

array_push($usuarios, $resposta);
// Até aqui ficaria dentro do WHILE.



// Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
$json_texto = json_encode(["usuarios" => $usuarios]);
echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>