<?php
date_default_timezone_set("America/Sao_Paulo");

//conexao
require ('conexao.php');


//variaveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['depoimento']; 
$depoimento = nl2br($mensagem);
$hoje= date("Y-m-d H:i:s");

//SQL

   $sql = "INSERT INTO depoimentos(nome,email,depoimento,data_depoimento) VALUES('$nome', '$email', '$depoimento', '$hoje')";
    $result = $con->query($sql);
    if ($result){ // verifica se o resultado é positivo, portanto se o comando foi executado;
        echo "Depoimento postado!<br/>";
    } else {
        echo "Ocorreu um erro ao inserir!<br/>";
    }

echo "<a href='../depoimentos.php'>Visualiza postagem</a>";	

?>



