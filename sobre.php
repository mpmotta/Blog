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
				<h1>Sobre Nós</h1>
				<div class="content_imagetext">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elit sapien, tempus sit amet hendrerit volutpat, euismod vitae risus. Etiam consequat, sem et vulputate dapibus, diam enim tristique est, vitae porta eros mauris ut orci. Praesent sed velit odio. Ut massa arcu, suscipit viverra molestie at, aliquet a metus. Nullam sit amet tellus dui, ut tincidunt justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis egestas laoreet. Nunc non ipsum metus, non laoreet urna. Vestibulum quis risus quis diam mattis tempus. Vestibulum suscipit pretium tempor. </p>
				</div><!--close content_imagetext-->		  
			  
			  </div><!--close content_item-->	  
		  
		  </div><!--close content-->   
		
		</div><!--close site_content-->  	
	  
		<footer>
			<?php include('footer.php'); ?>
		</footer> 
	  
	  </div><!--close main-->
	  
	</body>
</html>
