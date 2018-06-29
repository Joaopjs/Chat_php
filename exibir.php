<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mensagens</title>
</head>

<body>
<?php
                include("conectdb.php");
                $sql = "select * from chat"; // estou selecionando tudo o que tem na tabela tb_chat no bd
                $limite = mysql_query("$sql") or die(mysql_error());
//Abaixo criei um laço para mostrar todos os dados da tabela td_chat
                while($sql = mysql_fetch_array($limite)){
                               $id_mensagem = $sql["id"];
                               $nome = $sql["sender"];
                               $mensagem = $sql["message"];
                               $data = $sql["data"];
                               $hora = $sql["hora"];
//abaixo estou mostrando em tela os dados do bd       
                echo "--Mensagem: $id_mensagem--<br>Nome: $nome<br>Mensagem:  $mensagem<br>Na data $data e na hora $hora<br><br>"; 
               
               
                }

?>

</body>
</html>