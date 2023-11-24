<?php
    include("conecta.php");
    $alt_user = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/adm.css">
    <title>Tela de Adm</title>
</head>
<body>
    <script src="../js/tela_principal.js"></script>
    <script type="text/javascript" src="jquery-1.8.2.min.js"></script>
       <nav>

        <ul class="nav-menu" id="nav-menu">
            <li class="nav-item"><a href="index.html">Tela Inicial</a></li>
            <li class="nav-item"><a href="tela_principal.html">Tela Principal</a></li>
            <li class="nav-item"><a href="tipo_de_ocorrencia.html">Tipo de Ocorrência</a></li>
            <li class="nav-item"><a href="Problemas Encontrados Suspeitos.html">Problemas Encontrados</a></li>
            <li class="nav-item"><a href="sinais_sintomas.html">Sinais e Sintomas</a></li>
            <li class="nav-item"><a href="loc_traumas2.html">Localização de Traumas</a></li>
            <li class="nav-item"><a href="ava.consciencia.html">Avaliação do Paciente</a></li>
            <li class="nav-item"><a href="sinais_vitais.html">Sinais Vitais</a></li>
            <li class="nav-item"><a href="ofv.html">OBJ, FDC, VIE</a></li>
            <li class="nav-item"><a href="transporte.html">Decisão Transporte</a></li>
            <li class="nav-item"><a href="Procedimentos_efetuados.html">Procedimentos Efetuados</a></li>
            <li class="nav-item"><a href="adm.html">Tela do administrador</a>&nbsp;&nbsp;&nbsp;<a href="#">Tela de usúarios</a></li>
          </ul>
        <div class="menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <div class="logo">
            <a href="#" class="logo">Ficha<span>de</span>Ocorrência</a>
        </div>
        
    </nav>
    <main>
    Usuário : 
        <form action="alterar.php" method="post" id="form3">
        <table class="campo1">
                <tr>
                    <td><label>Alterar nome:</label></td>
                    <td><input type="text" id="alt_nome" name="alt_nome"></td>
                </tr>
                <tr>
                    <td><label>Alterar senha:</label></td>
                    <td><input type="password" id="alt_senha" name="alt_senha"></td>
                </tr>
                <tr>
                    <td><label>Confirme seu usuário:</label></td>
                    <td><input type="text" id="adm_user" name="adm_user"></td>
                </tr>
            </table>
    <div class="campo">
            <input type="submit" id="enviar" name="enviar" value="Alterar">
        </form>
    </div>
    <table class="campo2">
        <tr>
        <td>Informe o e-mail usuário a ser deletado: </td>
        <td><input type="text" name="ex_user" id="ex_user"></td>
        </tr>
        <tr>
        <td>Confirme seu usuário: </td>
        <td><input type="text" id="adm_user" name="adm_user"> </td>
        </tr>   
    </table>
    <div class="campo3">
        <button onclick="Deletar();" class="excluir">Excluir</button>
    </div>
</main>
<div class="campo4"> 
    <a class="continuar" id="continuar" name="continuar" href="tela_principal.html">Voltar</a>
     </div>
    <footer>
        <div class="rodape">
        <img src="../imagens/Marca_GOV.png" width="120px"><img src="../imagens/security.png" width="120px">
        </div>
    </footer>
</div>
</body> 
</html>