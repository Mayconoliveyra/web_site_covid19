<style>
input[type=text] {
height: 32px;
text-align: center;
font:  bold 18px Arial;
}

pm{
font: bold 19px arial;
}
</style>

<hr>
<h4> <center> <br> PAINEL DE CASOS </h4> </center> <br><br>

<?php
    $query= mysqli_query($conexao,"SELECT * FROM dados_covid ORDER BY id_dados_covid");
    while ($tabela= mysqli_fetch_array($query)){
     $confirmados= $tabela['confirmados_dados'];
     $recuperados= $tabela['recuperados_dados'];
     $mortes= $tabela['mortes_dados'];

?>
<?php } ?>

<form action="?pg=controleCasos" method="post"> 
<div class="container">
    <tr>
        <Center>
        <pm>Casos confirmados: </pm> <br>
        <input type="text" name="confirmados" value="<?php echo $confirmados?>" size="25"> 
        <br><br>
        <pm>Casos recuperados: </pm> <br>
        <input type="text" name="recuperados" value="<?php echo $recuperados?>" size="25">
        <br><br>
        <pm>Óbitos Confirmados: </pm> <br>
        <input type="text" name="mortes" value="<?php echo $mortes?>" size="25">
        <br><br><br>
        <pm> <button class="btn btn-outline-primary" name="Envia">Salvar alterações</button> </pm>
        </Center>
        <br><br><br><br>
    </tr>
</div>
</form>

