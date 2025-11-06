<!DOCTYPE html> 
<html lang="PT-br">
	<head>
		<title>Postagem</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/admin.css" />
	</head>
	<body>
		<h1>Enviar Postagem</h1>
		<hr/>
	  <div id="container">
		<form method="post" enctype="multipart/form-data" action="envia_post.php">
		<label>Título da Postagem:</label>
		<input type="text" name="titulo" required/>

		<label>Texto da Postagem:</label>
		<textarea cols="60" rows="20" name="conteudo" required></textarea>
		
		<label>Envio de Imagem:</label>
		<input name="imagem" type="file" Value="Selecionar Arquivo" />
		
		<input type="submit" value="Enviar Postagem" />
		</form>
	  </div>
	  
	</body>
</html>
