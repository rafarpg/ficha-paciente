<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Atendimento</title>
    <link rel="stylesheet" type="text/css" href="../css/tela_principal.css">
</head>
<style>
.cabecalho{
    width: 100%;
    height: 15vh;
    display: flex;
    color: white;
    font-size: 30px;    
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    align-content: center;
    justify-items: center;
}
table{
    border: 1px solid #FFFF;
    background-color: #540B0E 40%;
    color: #FFFF;
    font-size:20px;
}
</style>
<body>
<nav>

<ul class="nav-menu" id="nav-menu">
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
    <li class="nav-item"><a href="Termo_de_Recusa.html">Termo de Recusa</a></li>
    <li class="nav-item"><a href="adm.html">Tela do administrador</a></li>
    <li class="nav-item"><a href="cadastro.html">Cadastro de usúarios</a></li>
    <li class="nav-item"><a href="index.html">Logout</a></li>
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
    <div class="cabecalho">
    Bombeiro : <?php session_start(); echo $_SESSION["nome"];?>
    <a href="index.html" class="sair">SAIR</a>
    </div>
    <div class="container">
        <a href="cadastro.html" class="botao"> CADASTRAR </a>
        <table border="1" class="tabela">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> E-mail </th>
                    <th> Telefone</th>
                    <th> Perfil </th>
                    <th colspan="5"> Ações </th>
                </tr>
            </thead>
            <tbody>
            <?php
                            include_once("listar_usuarios.php");
                        	if(!empty($lista_usuarios)){
                            	foreach($lista_usuarios as $linha){
                                	echo ' <tr>
                                        	<td> '.$linha['id'] .' </td>
                                        	<td> '.$linha['nome'] .' </td>
                                            <td> '.$linha['email'] .' </td>
                                            <td> '.$linha['telefone'] .' </td>
                                            <td> '.$linha['perfil'] .' </td>
                                        	<td> <a href="excluir_usuario.php?id='.$linha['id'].'"> Excluir <a> </td>
                                        	<td> <a href="alterar_usuario.php?id='.$linha['id'].'"> Alterar <a> </td>
                                    	</tr>
                                	';
                            	}
                        	}
                    	?>

            </tbody>
        </table>
    </div>
    </main>
</body>
</html>