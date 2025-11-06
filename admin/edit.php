<?php
session_start();
session_name('logado');
if($_SESSION['validacao']==1){
$id = $_GET['id'];
?>

<!DOCTYPE html> 
<html lang="PT-br">
	<head>
		<title>Editar Postagem</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/admin.css" />
	</head>
	<body>
		<h1>Editar Postagem</h1>
		<hr/>
	  <div id="container">
		<form method="post" action="grava_post_editado.php?id=<?php echo $id; ?>">
<?php		
//conexao
 
require ('conexao.php');

//busca dos dados

$sql = "SELECT * FROM postagens WHERE id_postagem=$id";
$query = $con->query($sql);
while($dados = $query->fetch_array()){		
	$titulo = $dados['titulo'];	
	$conteudo = $dados['conteudo'];	
		echo "<label>Título da Postagem:</label>";
		echo "<input type='text' name='titulo' value='$titulo'/>";

		echo "<label>Texto da Postagem:</label>";
		echo "<textarea cols='60' rows='20' name='conteudo'>$conteudo</textarea>";  
}
?>		
		<input type="submit" value="Enviar Postagem" />
		</form>
	  </div>
	  
	</body>
</html>
<?php
}else{
header("Location: negado.php");
}
?>