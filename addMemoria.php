
<style>
    h4{
    font: normal 30px Times New Roman;
    color:  rgba(253, 253, 253); /* COR DO TEXTO*/
    }

    p02{
    font: normal 14px Times New Roman;
    color:  rgba(253, 253, 253); /* COR DO TEXTO*/
    letter-spacing:1px;
    }

    p03{
    font: normal 19px Times New Roman;
    color:  rgba(253, 253, 253); /* COR DO TEXTO*/   
    line-height: 30px; 
    }

    input{
    font: normal 17px Times New Roman;
    color:  rgba(0, 0, 0); /* COR DO TEXTO*/   
    line-height: 14px; 
    }
    
    btnEnviar{
    font: normal 16px arial; 
    line-height: 75px; 
    
    }
</style>

<div class="container-fluid" style="background-color: rgba(8, 8, 10, 0.787); height: 1120px;">
<!-- CHAMA DIV FIXA VALTAR OU FECHAR -->
<?php
include_once('voltarOuFechar.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
                
                <br><br>
                <h4> Familiares ou pessoas próximas - Adicione um Nome ao Memorial. </h4>
                <p02>
                Se você é familiar ou alguém próximo à pessoa homenageada você mesmo pode adicionar
                o nome e história do seu homenageado ao Memorial.
                </p02>
                <form action="?pg=controleAddMemoria" method="post">
                <tr>
                    <br><br>
                    <p03> Nome </p03> 
                    <p02>(Exemplo: João)</p02> <br>
                    <input type="text" name="nome"  size="20"> 
                    <br><br>
                    <p03> Sobrenome </p03> 
                    <p02>(Exemplo: Ferreira)</p02> <br>
                    <input type="text" name="sobrenome"  size="20"> 
                    <br><br>
                    <p03> Idade </p03> 
                    <p02>(Exemplo: 60)</p02> <br>
                    <input type="text" name="idade"  size="20"> 
                    <br><br>
                    <p03> Epígrafe (110 caracteres) </p03> <br>
                    <p02> 
                     Uma frase que essa pessoa falava. Um fato interessante sobre ela.
                     Algo que faça as pessoas imaginarem e se conectarem com o homenageado. 
                    </p02>
                    <textarea name="frase" rows="3" cols="55" ></textarea>
                    <br><br><br><br>

                    <p02>É muito importante sabermos quem prestou a homenagem. Por favor, nos fale sobre você </p02> <br>
                    <p03> Nome completo </p03> <br>
                    <input type="text" name="nomeSolicitante"  size="40"> 
                    <br><br>
                    <p03> E-mail </p03> <br>
                    <p02>Caso o administrador deseje entrar em contato, nos informe seu E-mail.</p02> <br>
                    <input type="text" name="emailSolicitante"  size="20"> 
                    <br><br><br><br><br>

                    <td> <button  class="btn btn-light" name="Envia">
                    <div class="container" style="height: 75px; width: 500px">
                    <center>
                    <btnEnviar> Enviar </btnEnviar> 
                    </center>
                    </div>
                    </button> </td>
                    <br><br>
                <tr>
                </form>
               
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</div>
