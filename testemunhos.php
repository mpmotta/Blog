<!DOCTYPE html> 
<html lang="PT-br">
	<head>
		<title>Coloque o nome do seu blog</title>
		<meta name="description" content="website description" />
		<meta name="keywords" content="website keywords, website keywords" />
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body>
	  <div id="main">
		
		<header>
		  
		  <div id="header_section">	  
			
			<div id="titulo">
			  <?php include('nome.php'); ?>
			</div><!--close titulo-->			  	
		  
			<nav>
				<?php include('menu.php'); ?>
			</nav>
		  
		  </div>		
		
		</header>
		
		<div id="site_content">		
		
		  <div id="content">		  		
			  <div class="sidebar_container">       
				<?php include('sidebar.php'); ?>
			   </div><!--close sidebar_container-->				
			
			  <div class="content_item">
			<h1>Depoimentos</h1>
				<?php include ('admin/lista_depoimentos.php'); ?>
		    </div><!--close content_item-->			    	    
		
      </div><!--close content-->   
	</div><!--close site_content-->  	
  
    <footer>
<?php include('footer.php'); ?>
    </footer>   
  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  
</body>
</html>
