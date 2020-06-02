<style>
    input[type=text2] {
    height: 30px;
    font:  bold 16px Arial;
    }
    pm{
    font: bold 18px arial;
    }

</style>

<!-- ALTERA TEXTO CONVID -->
<hr>
<Center> <h4><br> PAINEL DE CONTEÚDO PRINCIPAL </h4> </Center> <br><br><br>
<?php
    $query= mysqli_query($conexao,"SELECT * FROM pag_principal");
    while ($tabela= mysqli_fetch_array($query)){
     $conteudo= $tabela['conteudo'];
     $titulo= $tabela['titulo_conteudo'];
     $id_conteudo= $tabela['id_conteudo'];

?>

<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
        <form action="?pg=controleCovid" method="post">
        <tr>
            <Center>
            <pm>Titulo: </pm> 
            <input type="text2" name="titulo" value="<?php echo $titulo ?>" size="40"> 
            <input type="hidden"  readonly=“true”  name="idconteudo" value="<?php echo $id_conteudo ?>" size="1">
            <br><br>
            <textarea name="conteudo" rows="10" cols="105" ><?php echo $conteudo ?></textarea>
            <br><br>
            <td> <button class="btn btn-outline-primary" name="Envia">Salvar alterações</button> </td>
            <br><br><br>
            <hr>
            </Center>
        </tr> 
        </form>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>
<?php } ?>

