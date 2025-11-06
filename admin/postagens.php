<?php	

//conexao
 
include ('conexao.php');

//busca dos dados

$sql = "SELECT * FROM postagens ORDER BY id_postagem DESC";
$query = $con->query($sql);
while($dados = $query->fetch_array()){
	  $data_post = date("d/m/Y", strtotime($dados['data_postagem']));
	  $hora = date("H", strtotime($dados['data_postagem']));
			  $hora1 = $hora;
	  $min = date("i", strtotime($dados['data_postagem']));
			 $min1 = $min;
	  $hora_post = $hora1 . ":" . $min1;	
	  $imagem = $dados['imagem'];
	
	
echo "<h2>".$dados['titulo']."</h2>";

if (empty($imagem)){
	
}else{
echo "<img src='images/$imagem' style='width:100%;' />";
}

echo $dados['conteudo'];
echo "<p class='quando'> Postado em $data_post às $hora_post </p>"; 
echo "<p><hr/></p>";
}  
 
?>