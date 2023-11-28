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
    width: 320px;
    font-size:10px;
    padding: 10px;
    border: 5px solid gray;
    display: flex;
    flex-direction: row;
    justify-content: center;
    justify-items: center;
    align-items: center;
    align-content: center;
    text-align: center;
    color: white;
    margin-left: 20px;
}
.cadastro {
    background-color: #E72227;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: flex;
    cursor: pointer;
    font-size: 10px;
}
.cadastro:hover {
      background: #dedede;
      color: #ca6702;
    }
table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
    td{
      color: white;
    } 
    .container {
      overflow-x: auto;
    }
    .continuar {
  width: 200px;
  height: 40px;
  color: white;
  background-color: #E72227;
  cursor: pointer;
  border-radius: 10px;
  font-size: 20px;
  text-align: center;
  transition: 0.3s ease;
  }
.continuar:hover {
  background: #dedede;
  color: #ca6702;
  }
.campo4{
  display: flex;
  justify-content: center;
  justify-items: center;
  align-items: center;
  align-content: center;
  text-align: center;
  margin: 10px;
  }
  .search-container {
  display: flex;
  width: 250px;
  background-color: #fff;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-left: 65px;
  }
.texto {
  flex: 1;
  padding: 10px;
  border: none;
  outline: none;
  }
.pesquisar{
  padding: 10px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  cursor: pointer;
  }
.pesquisar:hover{
   text-decoration: underline;
  }
.pesquisa{
  margin-left: 65px;
  margin-top: 10px;
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
    <br>
<main>
    <div class="cabecalho">
    <h2>Bombeiro: <?php session_start(); echo $_SESSION["nome"];?></h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <button> <a href="cadastro.html" class="cadastro">CADASTRAR</a></button>
    </div>
    <br>
  <select class="pesquisa" id= "pesquisa">
    <option value="1">Nome</option>
    <option value="2">E-mail</option>
    <option value="3">Telefone</option>
    <option value="4">Perfil</option>
  </select>
  <div class="search-container">
        <input type="text" id="texto" placeholder="Pesquisar...">
        <button class="pesquisar" onclick="pesquisar();">Pesquisar</button>
    </div>
  <br>
    <div class="container">
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
                        $url=0;
                        if(isset($_GET["o"]))
                        {
                        $meuselect=$_GET["o"];
                        $url=1;
                        $texto=$_GET["t"];
                        }
                            include_once("listar_usuarios.php");
                        	if(!empty($lista_usuarios)){
                            	foreach($lista_usuarios as $linha){
                                	echo ' <tr>
                                        	<td> '.$linha['id'] .' </td>
                                        	<td> '.$linha['nome'] .' </td>
                                            <td> '.$linha['email'] .' </td>
                                            <td> '.$linha['telefone'] .' </td>
                                            <td> '.$linha['perfil'] .' </td>
                                        	<td> <a href="excluir_usuario.php?id='.$linha['id'].'"> <h3>Excluir</h3> <a> </td>
                                        	<td> <a href="alterar_usuario.php?id='.$linha['id'].'"> <h3>Alterar</h3> <a> </td>
                                    	</tr>
                                	';
                            	}
                        	}
                    	?>

            </tbody>
        </table>
    </div>
    </main>
    <br>
    <div class="campo4"> 
      <a class="continuar" id="continuar" name="continuar" href="tela_principal.html">Voltar</a>
       </div>
</body>
<script>
  function pesquisar()
  {
    p=pesquisa.value
    t=texto.value
    window.open("usuarios.php?o="+p+"&t="+t,"_self")
  }
  </script>
</html>