<?php 
        //$_GET ----> PEGA TODOS OS VALORES ENVIADOS PELO USUARIO DENTRO DO <form>
        //isset() ---> VERIFICA A EXISTENCIA DE UM ELEMENTO, VARIAVEL ETC...
       $media ="";
       $n1="";
       $n2="";
       $n3="";
       $n4="";
    if(isset($_GET['btncalcular'])){//VRIFICANDO SE O FORMULARIOFOI SUBMETIDO
        $n1 = $_GET['nota1'];//para pegar a variavel nota 1 
        $n2 = $_GET['nota2'];
        $n3 = $_GET['nota3'];
        $n4 = $_GET['nota4'];
        $media =($n1+$n2+$n3+$n4)/4;//para caucular a medica dos alunos
    }   
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Média</title>
      <meta charset="utf-8">
    </head>
    <style>
        .conteinerGG{
            width: 700px;
            height: 500px;
            background-color: black;
            margin-left: 600px;
            border-radius: 30px;
        }
        .conteinertitulo{
            width: inherit;
            text-align: center;
            height: 20%;
            background-color: black;
            color: aqua;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        .conteinerformulario{
            float: left;
            text-align: center;
            width: inherit;
            height: 65%;
            background-color: azure;
        }
        .conteinerresultado{
            float: left;
            text-align: center;
            width: inherit;
            height: 15%; 
        }
        .textotitulo{
            font-family: monospace;
            font-size: 50px;
        }
        .textoformulario{
            font-family: monospace;
            font-size: 30px;
        }
        form{
            float: left;
            margin-left: 180px;
        }
        .caixanota{
            width: 200px;
            height: 30px;
        }
        .btncalcular{
            width: 100px;
            height: 40px;
            float: left;
            margin-left: 100px;
            background-color: aqua
        }
        .textoresultado{
            text-align: center;
            font-size: 40px;
            font-family: monospace;
            margin-left: 200px;
            color: aqua;
        }
    </style>
    <body>
        <div class="conteinerGG">
            <div class="conteinertitulo">
                <br>
                <span class="textotitulo">Calculo da Média</span>
            </div>
            <div class="conteinerformulario">
                <form name="frmFormulario" method="get" action="media.php">
                    <br>
                    <br>
                    <span class="textoformulario">Nota1:</span> 
                        <input type="number" name="nota1" value="<? =@($n1) ?>" class="caixanota" maxlength="5" />
                    <br>
                    <br>
                    <span class="textoformulario">Nota2:</span> 
                        <input type="number" name="nota2" value="<? =@($n2) ?>" class="caixanota" maxlength="5" />
                    <br>
                    <br>
                    <span class="textoformulario">Nota3:</span> 
                        <input type="number" name="nota3" value="<? =@($n3) ?>" class="caixanota" maxlength="5" />
                    <br>
                    <br>
                    <span class="textoformulario">Nota4:</span> 
                        <input type="number" name="nota4" value="<? =@($n4) ?>" class="caixanota" maxlength="5" />
                    <br>
                    <br>
                        <input class="btncalcular" type="submit" name="btnsalvar" value="CALCULAR">
                </form>
            </div>
            <div class="conteinerresulatdo">
                <span class="textoresultado">Média final é:
                    <?php
                        if(isset($media)){
                        echo($media);
                        }
                    ?>
                </span>
            </div>
        </div>
    </body>
</html>