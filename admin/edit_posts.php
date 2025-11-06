<?php
session_start();
session_name('logado');
if($_SESSION['validacao']==1){
?>
<!DOCTYPE html> 
<html lang="PT-br">
	<head>
		<title>Gerenciar Postagens</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/admin.css" />
	</head>
	<body>
		<h1>Gerenciar Postagens</h1>
		<hr/>
		<div class="container">
			<table border="1" width="900" align="center">
				<tr>
					<th>Título da Postagem</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
<?php	

//conexao
 
include ('conexao.php');

//busca dos dados

$sql = "SELECT * FROM postagens";
$query = $con->query($sql);
while($dados = $query->fetch_array()){
$id	= $dados['id_postagem'];
$titulo	= $dados['titulo'];

	echo "<tr align='center'>".
			 "<td> $titulo</td>".
			 "<td> <a href='edit.php?id=$id'>".
			 "<img src=../images/edit.png /></a></td>".
			 "<td> <a href='delete.php?id=$id'>".
			 "<img src=../images/delete.png /></a></td>"; 
		 "</tr>";
} 
?> 
		</table>
	</body>
</html>
<?php
}else{
header("Location: negado.php");
}
?>