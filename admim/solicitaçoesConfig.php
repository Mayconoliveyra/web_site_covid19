<style>
    p01{
    font: bold 15px Arial;  
    line-height: 35px;   
    }
   
    input{
        font: normal 13px Arial; 
        line-height: 17px;   
    }

</style>

<!-- SOLICITAÇOES-->
<hr>
<center> <h4> <br> PAINEL DE SOLICITAÇÕES </h4> </center> <br><br>
<?php
    $query= mysqli_query($conexao,"SELECT * FROM memorial WHERE 1analise_2aceito=1 ORDER BY id_memorial");
    while ($tabela= mysqli_fetch_array($query)){
     $id_memorial= $tabela['id_memorial'];
     $nome= $tabela['nome_mem'];
     $sobrenome= $tabela['sobrenome_mem'];
     $idade= $tabela['idade_mem'];
     $frase= $tabela['frase_mem'];
     $nomeSolicitante= $tabela['nome_solicitante'];
     $emailSolicitante= $tabela['email_solicitante'];
   
?>
    <div class="container">
        <div class= "row">
            <div class="col-3">
            </div>
            <div class="col-6">
            <form action="?pg=controleSolicitaçoes" method="post">
                
                <tr> 
                    <input type="text"  readonly=“true” name="idmemorial" value="<?php echo $id_memorial ?>" size="5" style="box-shadow: 0 0 0 0; border: 0 none; outline: 0;  font: bold 30px arial; text-decoration: underline; color: rgba(0, 0, 0, 0.519);"> <br><br>
                    <p01>Nome: </p01> 
                    <input type="text" name="nome" value="<?php echo $nome ?>" size="15"> &thinsp;
                    <p01>Sobrenome: </p01>  
                    <input type="text" name="sobrenome" value="<?php echo $sobrenome ?>" size="15"> &thinsp;
                    <p01>Idade: </p01> 
                    <input type="text" name="idade" value="<?php echo $idade ?>" size="2"> 
                    <br>
                    <p01>Frase </p01> <br>
                    <textarea name="frase" rows="2" cols="73" ><?php echo $frase ?></textarea>
                    <br>
                    <p01>Nome - Solicitante: </p01> 
                    <input type="text" name="nomeS" value="<?php echo $nomeSolicitante ?>" size="52"> 
                    <br>
                    <p01>E-mail - Solicitante: </p01> 
                    <input type="text" name="email" value="<?php echo $emailSolicitante ?>" size="51"> 
                    <br><br><br>
                    <center>
                    <p02> <button type="submit" value="Publicar" name="publicar"  class="btn btn-outline-primary">PUBLICAR - &#10004; </button> </p02> 
                    &emsp;&emsp;&emsp;
                    <p02> <button type="submit" value="Deletar" name="deletar" class="btn btn-outline-danger">DELETAR - &#10006; </button> </p02>
                    <br><hr><br>
                    </center>
                </tr>
            </form>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>

<?php } ?>
