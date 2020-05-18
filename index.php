<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Covid-19: Princípal</title>

	<link rel="stylesheet" type="text/css" 
          href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/novocss.css">

	<style type="text/css">
		divTopo{
		border: 1px solid #000;   
		min-height: 70px;
		background-color: rgba(207, 7, 7, 0.685);
		color: rgba(207, 7, 7, 0.685);
		}
	</style>
</head>

<body>
	<?php
		include_once('topo.php');
	?>		
	
	<div class='container'>

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

	</div>
		
	<?php
		/* CHAMA PAG RODAPE*/
		include_once('rodape.php');
	?>

</body>
</html>
