<?php

//inclui a conexão
require ("conexao.php");

//consulta ao banco de dados
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT usuario,senha from admin WHERE usuario='$usuario' AND senha='$senha'";
$r = $con->query($sql);

if(mysqli_num_rows($r)!=1){
header("Location: negado.php");
}else{

//início da sessão
session_start();
session_name('logado');
$_SESSION['validacao']=1;
$_SESSION['usuario']=$usuario;
header("Location: admin.php");
}
?>