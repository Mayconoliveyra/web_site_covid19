<style>
   pMensagem{
    color: rgb(51, 102, 161); 
    font: bold 25px Arial;
   }
</style>

<!--  ALTERAR TEXTO MEMORIAL  -->
<?php include "conectaBanco.inc.php"; ?>

<?php
$conteudo1 = $_POST['text1'];
$conteudo2= $_POST['text2'];
    $sql= "UPDATE conteudo_memorial SET cont1_mem='$conteudo1', cont2_mem='$conteudo2';";
    $inserir= mysqli_query($conexao, $sql);
    
    if(!$inserir){
        echo "Erro ao alterar conteudo!";
    }else{
        echo "<center> <pMensagem> Alterado com sucesso! </pMensagem> </center>"  ;
        include_once('memorialTextConfig.php');
    }

?>
