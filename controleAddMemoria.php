<!--  INSIRE SOLICITAÇÃO  -->
<?php include "conecta.inc.php"; ?>
<?php
$nomeHomen = $_POST['nome'];
$sobrenomeHomen= $_POST['sobrenome'];
$idadeHomen= $_POST['idade'];
$fraseHomen= $_POST['frase'];
$nomeCompSolicitante= $_POST['nomeSolicitante'];
$emailSolicitante= $_POST['emailSolicitante'];

$sql= "INSERT INTO memorial (nome_mem, sobrenome_mem, idade_mem, frase_mem, nome_solicitante, email_solicitante)VALUES ('$nomeHomen', '$sobrenomeHomen', '$idadeHomen', '$fraseHomen', '$nomeCompSolicitante', '$emailSolicitante');";
$inserir= mysqli_query($conexao, $sql);

if(!$inserir){
   echo "<br><br> <center><h4> Erro ao enviar conteúdo. <a href='?pg=addMemoria'> Tentar novamente </a> </h4></center>";
    
}else{
    include_once('mensagemAddEnviada.php');
}
?>
