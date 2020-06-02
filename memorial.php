
<style>
p01{
font: normal 35px Segoe UI Black;
color: rgb(255, 255, 255, 0.852);
line-height: 80px;
letter-spacing:25px
}

p02{
font: normal 165px Impact;
color: rgb(255, 255, 255, 0.852);
line-height: 155px;
text-decoration: underline;
}

p03{
font: BOLD 65px Segoe UI Black;
color: rgb(255, 255, 255, 0.852);
line-height: 70px;
}

p04{
font: bold 30px arial;
color: rgb(70, 67, 67, 1.342);
}

p05{
font:  normal 21px arial;
color: rgb(136, 116, 4, 0.685);
}

p06{
font:  normal 18px arial;
color: rgba(179, 141, 17, 0.90);
}

h5{
    font: bold 20px arial;
    letter-spacing:8px
}

h3{
    font: bold 25px arial;
}

</style>
<a name="memorialMortes"></a>
<div class="container-fluid" style="background-image: url('img/HOME-FUNDO.gif'); height: 730px;" >
    <div class="row">
        <div class="col-12">
        <?php
        include_once('voltarOuFechar.php');
        ?>
            <?php
                $query= mysqli_query($conexao,'SELECT * FROM dados_covid ORDER BY id_dados_covid');
                while($tabela= mysqli_fetch_array($query)){
                $mortes= $tabela['mortes_dados'];
            
            ?>

            <?php } ?>
                <br><br><br><br><br><br>
                <center>
                <p02><?php echo $mortes ?></p02> 
                <br>
                <p01> MORTES </p01>
                <br>
                <p03> EM MEMORIA </p03>
                </center>
        </div>
    </div>
</div>
    <br><br><br><br><br><br>
    <div class="container"> 
        <?php
        $query= mysqli_query($conexao, "SELECT * FROM conteudo_memorial");
        while ($tabela= mysqli_fetch_array($query)) {
         $conteudo1= $tabela['cont1_mem'];
         $conteudo2= $tabela['cont2_mem'];

        ?>

        <?php } ?>

        <center>
            <p04> <?php echo $conteudo1 ?> </p04>
            <br><br><br><br>
            <p05> <?php echo $conteudo2 ?> </p05>
        </center>
    </div>

    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-2">
            </div>

            <div class="col-7">
        
            <?php
                $query = mysqli_query($conexao, "SELECT * FROM memorial WHERE 1analise_2aceito=2");
                // Litando valores retornados da tabela "paginas"
                while($tabela = mysqli_fetch_array($query)){
                    $nome= $tabela['nome_mem']. "&nbsp;";
                    $sobrenome= $tabela['sobrenome_mem']. "<br>";
                    $idade= $tabela['idade_mem'];
                    $frase= $tabela['frase_mem']."<br> <br><br><br>"; 
            ?>
                <h3> <?php echo $nome. $sobrenome ?> </h3>
                <h5> <?php echo $idade ?> anos </h5>
                <p06> <?php echo $frase ?> </p06>
            <?php } ?>

            </div>
            <div class="col-3">
            </div>
        </div>    
    </div>

    <!-- ICONE ADD HOMENAGEADO-->              
    <a href="?pg=addMemoria"> <img src="img/menu.png " style="width: 60px; position: fixed; top: 560px; left: 1240px;"> </a>

