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
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Email</label>
      <input type="text" id="email" value=""> <br>
      <label for="">Senha</label>
      <input type="password" id="senha" value=""> <br>
      <button type="button" onclick="submitData();">Login</button>
    </form>
    <br>
    <a href="registrar.php">Registrar</a>
    <?php require 'script.php'; ?>
  </body>
</html>
