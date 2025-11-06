<?php	

//conexao
 
include ('conexao.php');

//busca dos dados

$sql = "SELECT * FROM postagens";
$query = $con->query($sql);
while($dados = $query->fetch_array()){
$id	= $dados['id_postagem'];
$titulo	= $dados['titulo'];
$titulos = substr($titulo, 0, 25);
	
echo "<a  class='links' href='posts.php?id=$id'>". $titulos . "...</a>";
}  
 
?>