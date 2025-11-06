<?php	
	
//conexao
 
require ('conexao.php');
$id = $_GET['id'];

$sql = "DELETE FROM postagens WHERE id_postagem='$id'";
$query = $con->query($sql);
echo "postagem id $id foi apagado!";

?>