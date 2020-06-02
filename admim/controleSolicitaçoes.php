   <style>
    pMensagem{
        color: rgb(51, 102, 161); 
        font: bold 25px Arial;
    }
   </style>
   
    <!--  INSERIR HOMENAGEADOS  -->
    <?php include "conectaBanco.inc.php"; ?>

    <?php

        if(isset($_POST["publicar"])){
            echo "<center> <pMensagem> Publicado com sucesso. </pMensagem> </center>";
            $id_memorial= $_POST['idmemorial'];
            $nome= $_POST['nome'];
            $sobrenome= $_POST['sobrenome'];
            $idade= $_POST['idade'];
            $frase= $_POST['frase'];
            $nomeSolicitante= $_POST['nomeS'];
            $emailSolicitante= $_POST['email'];
            $publicar = 2; /* STATUS 2 = PUBLICADO */
    
            $sqlPublicar= "UPDATE memorial SET nome_mem='$nome', sobrenome_mem='$sobrenome', idade_mem='$idade', frase_mem='$frase', nome_solicitante='$nomeSolicitante', email_solicitante='$emailSolicitante', 1analise_2aceito='$publicar'  WHERE id_memorial='$id_memorial';";
    
            $publicar= mysqli_query($conexao, $sqlPublicar);
    
            if(!$publicar){
                echo "Erro ao alterar conteudo!";
             
            }else{
                include_once('solicitaçoesConfig.php');
            }

        } else if(isset($_POST["deletar"])){
            echo "<center> <pMensagem> Exclúido com sucesso. </pMensagem> </center>";
            $id_memorial= $_POST['idmemorial'];

            $sqlDeletar = "DELETE FROM memorial WHERE id_memorial='$id_memorial'";
            $deletar = mysqli_query($conexao, $sqlDeletar);

            if(!$deletar){
                echo "Erro ao excluir conteudo!";
            }else{
                include_once('solicitaçoesConfig.php');
            }
        } 

    ?>
