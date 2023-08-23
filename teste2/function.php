<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ficha_paciente");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "registrar"){
    registrar();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTRAR
function registrar(){
  global $conn;

  $cpf = $_POST["cpf"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  if(empty($cpf) || empty($email) || empty($senha)){
    echo "Por favor, preencha todos os campos";
    exit;
  }

  $usuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
  if(mysqli_num_rows($usuario) > 0){
    echo "Esse é email já está sendo utilizado";
    exit;
  }
  $criptografada = md5($senha);
  
  $resposta = 
        [   
           "email" => $email,
           "cpf" => $cpf,
           "senha"  => $senha,
           "criptografada" => $criptografada,
        ];
  
  array_push($usuarios, $resposta);
  
  $query = "INSERT INTO usuarios VALUES('', '$name', '$username', '$criptografada')";
  mysqli_query($conn, $query);
  echo "Registrado com sucesso";
}

// LOGIN
function login(){
  global $conn;

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $usuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");

  if(mysqli_num_rows($usuario) > 0){

    $row = mysqli_fetch_assoc($usuario);
    if ( md5($senha) == $criptografada ){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Senha incorreta";
      exit;
    }
  }
  else{
    echo "Login Inválido";
    exit;
  }
}
?>
