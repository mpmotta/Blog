<!DOCTYPE html> 
<html lang="PT-br">
	<head>
		<title>Postagem</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/admin.css" />
	</head>
	<body>
		<h1>Postar Depoimento</h1>
		<hr/>
	  <div id="container">
		<form method="post" action="envia_depoimento.php">
		<label>Nome:</label>
		<input type="text" name="nome" required/>

		<label>E-mail:</label>
		<input type="email" name="email" required/>
		
		<label>Depoimento:</label>
		<textarea cols="60" rows="10" name="depoimento" required></textarea>
		
		<input type="submit" value="Postar Depoimento" />
		</form>
	  </div>
	  
	</body>
</html>
