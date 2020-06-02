<style>
    p01{
    font: bold 15px Arial;  
    line-height: 35px;   
    }
   
    input{
        font: normal 12px Arial; 
        line-height: 17px;   
    }
</style>

<!-- LISTA DE HOMENAGEADOS -->
<hr>
<center> <h4> <br> PAINEL DE HOMENAGEADOS </h4> </center> <br><br><br><br>
<?php
    $query= mysqli_query($conexao,"SELECT * FROM memorial WHERE 1analise_2aceito=2 ORDER BY id_memorial");
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
            <form action="?pg=controleHomen" method="post">
                     
                <tr>
                 <input type="text"  readonly=“true” name="idmemorial" value="<?php echo $id_memorial ?>" size="5" style="box-shadow: 0 0 0 0; border: 0 none; outline: 0;  font: bold 27px arial; text-decoration: underline; color: rgba(31, 31, 32, 0.751);"> <br><br>
                    <p01>Nome: </p01> 
                    <input type="text" name="nome" value="<?php echo $nome ?>" size="18"> &thinsp;
                    <p01>Sobrenome: </p01>  
                    <input type="text" name="sobrenome" value="<?php echo $sobrenome ?>" size="18"> &thinsp;
                    <p01>Idade: </p01> 
                    <input type="text" name="idade" value="<?php echo $idade ?>" size="3"> 
                    <br>
                    <p01>Frase </p01> <br>
                    <textarea name="frase" rows="2" cols="74" ><?php echo $frase ?></textarea>
                    <br>
                    <p01>Nome - Solicitante: </p01> 
                    <input type="text" name="nomeS" value="<?php echo $nomeSolicitante ?>" size="61"> 
                    <br>
                    <p01>E-mail - Solicitante: </p01> 
                    <input type="text" name="email" value="<?php echo $emailSolicitante ?>" size="61"> 
                    <br><br><br>
                    <center>
                    <p02> <button type="submit" value="Alterar" name="alterar"  class="btn btn-outline-primary">ALTERAR  </button> </p02> 
                    &emsp;&emsp;&emsp;&emsp;
                    <p02> <button type="submit" value="Deletar" name="deletar" class="btn btn-outline-danger">DELETAR  </button> </p02>
                    &emsp;
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
