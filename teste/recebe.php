<?php
include("conecta.php");

if(isset($_POST["op1"])) {
    $op1 = "S";
} else{
    $op1 = "N";
}
if(isset($_POST["op2"])) {
    $op2 = "S";
} else{
    $op2 = "N";
}
if(isset($_POST["op3"])) {
    $op3 = "S";
} else{
    $op3 = "N";
}
$sexo = $_POST['sexo'];

$comando = $pdo->prepare("INSERT INTO checkbox_teste VALUES('$op1','$op2','$op3','$sexo')" );
$resultado = $comando->execute();

// Para voltar no formulário:

echo("$op1 <br>");
echo("$op2 <br>");
echo("$op3 <br>");

?>