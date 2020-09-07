<html>
	<head>
		<title>Jairo dos Santos -GERADOR DE CRUD</title>
	</head>
	<body>
		<h1>SEJA BEM-VINDO</h1>
		<p>Genador de CRUD Automatizado com PHP</p>
		<?php 
		if(!isset($_GET["view"])){
				include "durk.php";
			}else{
				include "app/views/".$_GET["view"].".php";
			}

		 ?>
		<p>Evilnapsis &copy; 2015</p>
	</body>
</html>