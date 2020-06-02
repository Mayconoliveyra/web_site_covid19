<style>
  p02{
    font: bold 32px Tahoma;
    color:  rgba(255, 255, 255, 0.999); 
    line-height: 65px;
    letter-spacing:1px
   
   }

  p01{
    font: bold 27px Bahnschrift Condensed;
    letter-spacing:2px
    
   }

  
  divM01{
  border-radius: 12px;
  background-color: rgba(255, 255, 255, 0.938);
  border-style: double;
 
  }

</style>

<!-- CHAMA PAG PRINCIPAL E MENU* -->
<?php
		include_once('topo.php');
		include_once('menu.php'); 
	?>		
		
<hr>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-7">
    </div>

    <div class="col-1">
    </div>

    <div class="col-4">
      <div class="panel-heading">
        <h3 style="text-align: center">TOTAL DE CASOS</h3> 
        <hr>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-7">
    <!--1-->
      <?php
        $query= mysqli_query($conexao,"SELECT * FROM  pag_principal where id_conteudo=1");
        while ($tabela= mysqli_fetch_array($query)){
          $titulo= $tabela['titulo_conteudo']."<hr>";
          $conteudo= $tabela['conteudo']."<br><br><br>";
        
      ?>
        <a name="index1"> <h3> <?php echo $titulo ?> </h3> </a>
        <p> <?php echo $conteudo ?> </p>
      <?php } ?>

    <!--2-->
      <?php
        $query= mysqli_query($conexao,"SELECT * FROM  pag_principal where id_conteudo=2");
        while ($tabela= mysqli_fetch_array($query)){
          $titulo= $tabela['titulo_conteudo']."<hr>";
          $conteudo= $tabela['conteudo']."<br><br><br>";
        
      ?>
        <a name="index1"> <h3> <?php echo $titulo ?> </h3> </a>
        <p> <?php echo $conteudo ?> </p>
      <?php } ?>

    <!--3-->
      <?php
        $query= mysqli_query($conexao,"SELECT * FROM  pag_principal where id_conteudo=3");
        while ($tabela= mysqli_fetch_array($query)){
          $titulo= $tabela['titulo_conteudo']."<hr>";
          $conteudo= $tabela['conteudo']."<br><br><br>";
        
      ?>
        <a name="index2"> <h3> <?php echo $titulo ?> </h3> </a>
        <p> <?php echo $conteudo ?> </p>
      <?php } ?>

    <!--4-->
      <?php
        $query= mysqli_query($conexao,"SELECT * FROM  pag_principal where id_conteudo=4");
        while ($tabela= mysqli_fetch_array($query)){
          $titulo= $tabela['titulo_conteudo']."<hr>";
          $conteudo= $tabela['conteudo']."<br><br><br>";
      
      ?>
        <a name="index3"> <h3> <?php echo $titulo ?> </h3> </a>
       <p> <?php echo $conteudo ?> </p>
      <?php } ?>

    <!--5-->
      <?php
        $query= mysqli_query($conexao,"SELECT * FROM  pag_principal where id_conteudo=5");
        while ($tabela= mysqli_fetch_array($query)){
          $titulo= $tabela['titulo_conteudo']."<hr>";
          $conteudo= $tabela['conteudo']."<br><br><br>";
      
      ?>
        <a name="index4"> <h3> <?php echo $titulo ?> </h3> </a>
        <p> <?php echo $conteudo ?> </p>
        
      <?php } ?>

    <!--6-->
      <?php
        $query= mysqli_query($conexao,"SELECT * FROM  pag_principal where id_conteudo=6");
        while ($tabela= mysqli_fetch_array($query)){
          $titulo= $tabela['titulo_conteudo']."<hr>";
          $conteudo= $tabela['conteudo']."<br><br><br>";
      
      ?>
        <a name="index5"> <h3> <?php echo $titulo ?> </h3> </a>
        <p> <?php echo $conteudo ?> </p>
      <?php } ?>

    </div>

    <div class="col-1">
    </div>
  
    <!-- PAINEL DE CASOS-->
    <div class="col-4" style="height: 440px; border-radius: 35px;  border-style: solid; background-color: rgba(7, 128, 175, 0.733);">
      <?php
        $query= mysqli_query($conexao,'SELECT * FROM dados_covid ORDER BY id_dados_covid');
          while($tabela= mysqli_fetch_array($query)){
            $data= $tabela['data_dados'];
            $mortes= $tabela['mortes_dados'];
            $recuperados= $tabela['recuperados_dados'];
            $confirmados= $tabela['confirmados_dados'];

           $confirmados= number_format($confirmados, 0, '', '.');
           $recuperados= number_format($recuperados, 0, '', '.');
           $mortes= number_format($mortes, 0, '', '.'); # FORMATA NUMEROS (EX. 1 --> 1.00)
          $data= date('d/m/Y',strtotime($data)); #FORMATA DATA (EX. 2020/05/25 --> 25/05/2020)
      ?>

      <?php } ?>
      <center>
      <div class="container">
      <br>
        <div class="row">
          <divM01 class="col-12">
          <p01>  ATUALIZADO EM </p01> 
          </divM01>
        </div>
      </div>
      <p02><?php echo $data ?></p02>
    
      <div class="container">
        <div class="row">
          <divM01 class="col-12">
          <p01> CASOS CONFIRMADOS </p01> 
          </divM01>
        </div>
      </div>
      <p02><?php echo $confirmados ?></p02>  
     
      <div class="container">
        <div class="row">
          <divM01 class="col-12">
          <p01> CASOS RECUPERADOS </p01> 
          </divM01>
        </div>
      </div>
      <p02><?php echo $recuperados ?></p02> 
     
      <div class="container">
        <div class="row">
          <divM01 class="col-12">
          <p01> ÓBITOS CONFIRMADOS </p01> 
          </divM01>
        </div>
      </div>
      <p02><?php echo $mortes?></p02> 
      <center>
    </div>  
  </div>
</div>

<!-- CHAMA PAG RODAPE -->
<?php
		include_once('rodape.php');
?>
