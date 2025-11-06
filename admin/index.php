<!DOCTYPE html> 
<html lang="PT-br">
	<head>
		<title>Página de Login</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/admin.css" />
	</head>
	<body>
		<h1>Página de Login</h1>
		<hr/>
	  <div id="login">
		<form method="post" id="logon" action="login.php">
		<label>Usuário</label>
		<input type="text" name="usuario" class="log" required/>		
		
		<label>Senha</label>
		<input type="password" name="senha" class="log" required/>

		<input type="submit" class="submit" value="Logar" />
		</form>
	  </div>
	  
	</body>
</html>
