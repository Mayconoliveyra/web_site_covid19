<?php include "conectaBanco.inc.php";?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coronavírus: Painel Administrativo</title>
	
	<link rel="shortcut icon" href="/img/logoicon.png" />

	<link rel="stylesheet" type="text/css" 
          href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/novocss.css">

</head>
<body>
        <br>
        <center>
        <h1> PAINEL ADMINISTRATIVO</h1>
        </center>
        <br>
        <hr>

        <?php
        include_once("menuConfig.php");
        ?>
        
		<?php
		#área de conteúdo
		if(empty($_SERVER["QUERY_STRING"])){
				$var = "principalCovidConfig.php";
				include_once("$var");
		}else{
				$pg = $_GET['pg'];
				include_once("$pg.php");
		}
		?>
		
</body>
</html>
