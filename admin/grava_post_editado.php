<?php

//conexao
 
require ('conexao.php');

//altera os dados
$id = $_GET['id'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];


 $sql = "UPDATE postagens SET titulo='$titulo',conteudo='$conteudo' WHERE id_postagem='$id'";
    $result = $query = $con->query($sql);
     
    if ($result){ // verifica se o resultado é positivo, portanto se o comando foi executado;
        echo "Postagem editada!";
    } else {
        echo "Ocorreu um erro ao atualizar os dados!";
    }
?>
<a href="../index.php">Visualizar</a>



