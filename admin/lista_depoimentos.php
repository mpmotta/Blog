<?php	

//conexao
 
include ('conexao.php');

//busca dos dados

$sql = "SELECT * FROM depoimentos";
$query = $con->query($sql);
while($dados = $query->fetch_array()){
	  $data_post = date("d/m/Y", strtotime($dados['data_depoimento']));
	  $hora = date("H", strtotime($dados['data_depoimento']));
			  $hora1 = $hora;
	  $min = date("i", strtotime($dados['data_depoimento']));
			 $min1 = $min;
	  $hora_post = $hora1 . ":" . $min1;	
	
echo "<div class='content_container'>";	
echo "<h3>".$dados['nome']." - ".$dados['email']."</h3>";
echo "<p>".$dados['depoimento']."</p>";
echo "<p class='quando'> Postado em $data_post às $hora_post </p></div>"; 
}  
 
?>