<?php
date_default_timezone_set("America/Sao_Paulo");

//conexao
require ('conexao.php');

// verifica se foi enviado um arquivo 
if(isset($_FILES['imagem']['name']) && $_FILES["imagem"]["error"] == 0)
{

	$arquivo_tmp = $_FILES['imagem']['tmp_name'];
	$nome = $_FILES['imagem']['name'];

	// Pega a extensao
	$extensao = strrchr($nome, '.');

	// Converte a extensao para minusculo
	$extensao = strtolower($extensao);

	// Somente imagens, .jpg;.jpeg;.gif;.png
	// Aqui eu enfilero as extesões permitidas e separo por ';'
	// Isso serve apenas para eu poder pesquisar dentro desta String
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
	{
		// Cria um nome único para esta imagem
		// Evita que duplique as imagens no servidor.
		$novoNome = md5(microtime()) . $extensao;
		
		// Concatena a pasta com o nome
		$destino = '../images/' . $novoNome; 
		
		// tenta mover o arquivo para o destino
		if( @move_uploaded_file( $arquivo_tmp, $destino  ))
		{
 
		}
		else
			echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
	}
	else
		echo "<meta http-equiv='refresh' content='0; url=upload_foto.php'>"."<meta charset='utf-8'>".
		'<script>alert("Você pode enviar apenas arquivos *.jpg;*.jpeg;*.gif;*.png");</script>';
}
else
{
	echo "Você não enviou nenhum arquivo!";
}

//variaveis
$imagem = $novoNome;
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$postagem = nl2br($conteudo);
$hoje= date("Y-m-d H:i:s");

//SQL

   $sql = "INSERT INTO postagens (titulo,conteudo,imagem,data_postagem) VALUES ('$titulo', '$postagem', '$imagem', '$hoje')";
    $result = $con->query($sql);
    if ($result){ // verifica se o resultado é positivo, portanto se o comando foi executado;
        echo "Dados inseridos!<br/>";
    } else {
        echo "Ocorreu um erro ao inserir!<br/>";
    }

echo "<a href='../index.php'>Visualiza postagem</a>";	

?>



