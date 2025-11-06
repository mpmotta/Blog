<?php
session_start();
session_name('logado');
if($_SESSION['validacao']==1){
?>
<!DOCTYPE html> 
<html lang="PT-br">
	<head>
		<title>Página Administrativa</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/admin.css" />
	</head>
	<body>
		<h1>Página Administrativa</h1>
		<hr/>
		<div align="center">
		
		<a href="edit_users.php" id="edit_users">Gerenciar Usuários</a>
		
		<a href="postar.php" id="new_post">Nova Postagem</a>
		
		<a href="edit_posts.php" id="edit_post">Gerenciar Postagens</a>
		
		<a href="edit_depoimentos.php" id="edit_dep">Gerenciar Depoimentos</a>
		
		<hr />
	  
		<a href="sair.php" class="submit sair">Sair</a>
	  
	  </div>
	</body>
</html>
<?php
}else{
header("Location: negado.php");
}
?>