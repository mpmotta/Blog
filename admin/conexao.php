<?php
$servidor = "localhost"; 
$usuario_banco = "root";
$senha_banco = ""; 
$nome_banco = "blog"; 

$con = new mysqli($servidor, $usuario_banco, $senha_banco, $nome_banco);

if (mysqli_connect_errno()) trigger_error(mysqli_connect_error()); 

?>
