<style>
   pMensagem{
    color: rgb(51, 102, 161); 
    font: bold 25px Arial;
   }
</style>

<!--  INSERIR CASOS  -->
<?php include "conectaBanco.inc.php"; ?>

<?php
$confirmados = $_POST['confirmados'];
$recuperados= $_POST['recuperados'];
$mortes= $_POST['mortes'];
$sql= "INSERT INTO dados_covid (confirmados_dados, recuperados_dados, mortes_dados) VALUES ($confirmados, $recuperados, $mortes);";

$inserir= mysqli_query($conexao, $sql);

if(!$inserir){
    echo "Erro ao alterar conteudo!";
}else{ 
    echo "<center> <pMensagem> Alterado com sucesso! </pMensagem> </center>";
    include_once('principalCasosConfig.php');
}
?>
