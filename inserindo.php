<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserir no db</title>
</head>

<body>
<?php

                include("conectdb.php"); //chamando o arquivo de conexão com o bd
                $nome = $_POST["nome"];
                $mensagem = $_POST["mensagem"];
                $data = date('Y-m-d');
                $hora = strftime("%H:%M:%S");
                //acima estou pegando o que foi digitado pelo usuário la no formulario
                $sqlinsert = "insert into chat(sender, message, data, hora) values('$nome', '$mensagem', '$data', '$hora')";
                //acima estou inserindo o que o usuário digitou no bd
                mysql_query($sqlinsert) or die ("Não foi possivel inserir");
               
header('Location:formulario.php'); //estou redirecionando para a pagina formulario novamente
?>
</body>
</html>