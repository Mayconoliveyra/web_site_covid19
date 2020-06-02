<style>
    pm{
    font: bold 18px arial;  
    }
    
</style>

<hr>
 <center> <h4> <br> PAINEL MEMORIAL </h4> </center>  <br><br> <br>
<?php
    $query= mysqli_query($conexao,"SELECT * FROM conteudo_memorial");
    while ($tabela= mysqli_fetch_array($query)){
     $text1= $tabela['cont1_mem'];
     $text2= $tabela['cont2_mem'];
   
?>
<?php } ?>
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            
        <form action="?pg=controleMemorialText" method="post">
            <Center>
            <tr>
                <pm>TEXTO - 1 </pm> <br><br>
                <textarea name="text1" rows="4" cols="80" ><?php echo $text1 ?></textarea>
                <br><br>
                <pm>TEXTO - 2 </pm> <br><br>
                <textarea name="text2" rows="4" cols="80" ><?php echo $text2 ?></textarea>
                <br><br><br>
                <button  class="btn btn-outline-primary" name="Envia">Salvar alterações</button> 
            </tr>
            </Center>
            <br><br><br><br>
        </form>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>
