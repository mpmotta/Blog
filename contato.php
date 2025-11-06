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
		    <h1>Fale Conosco</h1>
			<form action="" class="form_settings">           
			  <p><label>Nome:</label><input class="contact" type="text" name="nome" required /></p>
              <p><label>E-mail:</label><input class="contact" type="email" name="email" required /></p>
			  <p><label>Mensagem:</label><textarea class="contact textarea" rows="8" cols="50" name="messagem" required></textarea></p>
              
              <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Enviar" /></p>
            </form><!--close form_settings-->
		  
		  </div><!--close content_item-->	
      
	  </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    <footer>
<?php include('footer.php'); ?>
    </footer>   
  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>	
  
</body>
</html>
