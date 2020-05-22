<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Covid-19: Princípal</title>

	<link rel="stylesheet" type="text/css" 
          href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/novocss.css">
	<link rel="stylesheet" href="estilos.css">

</head>
<body>
	<?php
	/* CHAMA PAG PRINCIPAL E MENU*/
		include_once('topo.php');
		include_once('menu.php'); 
	?>		
	
		<?php
		#área de conteúdo
		if(empty($_SERVER["QUERY_STRING"])){
				$var = "principal.php";
				include_once("$var");
		}else{
				$pg = $_GET['pg'];
				include_once("$pg.php");
		}
		?>

	<?php
		/* CHAMA PAG RODAPE*/
		include_once('rodape.php');
	?>

</body>
</html>
