<style>
   pMensagem{
    color: rgb(51, 102, 161); 
    font: bold 25px Arial;
   }
</style>

<!--  EDITAR CONTEÚO PRINCIPAL -->
<?php include "conectaBanco.inc.php"; ?>

<?php
$titulo = $_POST['titulo'];
$conteudo= $_POST['conteudo'];
$id_conteudo= $_POST['idconteudo'];
$sql= "UPDATE pag_principal SET conteudo='$conteudo', titulo_conteudo='$titulo'  WHERE id_conteudo='$id_conteudo'";

$inserir= mysqli_query($conexao, $sql);

if(!$inserir){
    echo "Erro ao alterar conteudo!";
}else{
    echo "<center> <pMensagem> Alterado com sucesso! </pMensagem> </center>" ;
    include_once('principalCovidConfig.php');
}
?>



