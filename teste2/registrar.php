<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar</title>
  </head>
  <body>
    <h2>Registrar</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Email</label>
      <input type="text" id="email" value=""> <br>
      <label for="">CPF</label>
      <input type="text" id="cpf" value=""> <br>
      <label for="">Senha</label>
      <input type="password" id="senha" value=""> <br>
      <button type="button" onclick="submitData();">Registrar</button>
    </form>
    <br>
    <a href="login.php">Login</a>
    <?php require 'script.php'; ?>
  </body>
</html>
