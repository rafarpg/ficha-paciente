<?php
    include("conecta.php");
    $alt_user = $_GET["id"];
        
        $comando = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
        $comando->execute([$ex_user]);

    header("Location: usuarios.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
