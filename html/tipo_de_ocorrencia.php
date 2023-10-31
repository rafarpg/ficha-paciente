<?php
include("conecta.php");

if(isset($_POST["causado_por_animais"])) {
    $causado_por_animais = "S";
} else{
    $causado_por_animais = "N";
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
?>