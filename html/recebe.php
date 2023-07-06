<?php
if ( isset($_POST["op1"]) )
{
    $op1 = "S";
}else{
    $op1 = "N";
}
if ( isset($_POST["op2"]) )
{
    $op2 = "S";
}else{
    $op2 = "N";
}
if ( isset($_POST["op3"]) )
{
    $op3 = "S";
}else{
    $op3 = "N";
}
echo("$op1 <br>");
echo("$op2 <br>");
echo("$op3 <br>");
?>