<?php
        // ATENÇÃO: o tipo da coluna na tabela deve ser MEDIUMBLOB
        include("conecta.php");

        $descricao = $_POST["descricao"];

        // Lê o conteúdo do arquivo de imagem e armazena na variável $imagem
		$img_acidente = file_get_contents($_FILES["img_acidente"]["tmp_name"]);
		
		$comando = $pdo->prepare("INSERT INTO img_acidente(img_acidente, descricao) VALUES(:img_acidente,:descricao)");
        $comando->bindParam(":img_acidente", $img_acidente, PDO::PARAM_LOB);
        $comando->bindParam(":descricao", $descricao);
		$resultado = $comando->execute();



        
        // As linhas abaixo você usará sempre que quiser mostrar a imagem

        $comando = $pdo->prepare("SELECT * FROM img_acidente");
		$resultado = $comando->execute();
        while( $linhas = $comando->fetch() )
        {
            $dados_imagem = $linhas["img_acidente"];
            $i = base64_encode($dados_imagem);

            $descricao =  $linhas["descricao"];

            echo("descricao: $descricao");
            echo(" <img src='data:image/jpeg;base64,$i' width='100px'> <br> <br> ");
        }
		
?>