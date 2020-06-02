<?php
      // conectando ao servidor
      $conexao = mysqli_connect("localhost","id13932773_maycon","9b8EmTPY7npPR.a");

      // conectando ao BD criado
      $db = mysqli_select_db($conexao, "id13932773_webcovid19");
      
      // Executando query e retornando valores da tabela "faleconosco"
      $query = mysqli_query($conexao, "SELECT * FROM covid");
  
  ?>
