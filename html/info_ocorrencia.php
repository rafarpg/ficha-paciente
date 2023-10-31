<?php
    include("conecta.php");

    $num_usb = $_POST["num_usb"];
    $num_ocorr = $_POST['num_ocorr'];
    $cod_ir = $_POST['cod_ir'];
    $cod_ps = $_POST['cod_ps'];
    $desp = $_POST["desp"];
    $km_final = $_POST["km_final"];
    $cod_sia_sus = $_POST["cod_sia_sus"];

if(isset($_POST["inserir"]))
{ 
    $comando = $pdo->prepare("INSERT INTO dados_ocorrencia (num_usb, num_ocorrencia, desp, km_final, cod_sia_sus, cod_ir, cod_ps ) VALUES (\"$num_usb\", \"$num_ocorr\" ,\"$desp\",\"$km_final\",\"$cod_sia_sus\",\"$cod_ir\",\"$cod_ps\")");
    $resultado = $comando->execute();  
    header("Location: tipo_de_ocorrencia.html");
}


?>