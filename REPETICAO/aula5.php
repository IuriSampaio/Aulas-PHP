<!DOCTYPE html>
<?php
    $cont = (integer) 0;
    $valor1=(integer)0;
    if(isset($_POST['calcula']))
    { 
        $valor1=$_POST['txtn1'];
        echo("**************   while   ***************");
        
        while($cont <= $valor1){
            echo("<br>".$cont);
            $cont ++;
            if($cont==$valor1){
                 echo("<br>".$cont."<br>");
            }
        }
    }
    echo("*******************  for  *********************");
        for($cont=0; $cont<=$valor1 ; $cont++){
            echo("<br>".$cont);
        }
?>
<html lang="pt-br">
<head>
    <title>REPETIÇÃO</title>
    <meta chaset="utf-8">
</head>
    <style>
        .perfum{
            width: 500px;
            height: 100px;
            background-color: cadetblue;
        }
        .txt{
            font-family: monospace;
        }
        .titulo{
            font-family: monospace;
            font-size:30px;
        }
    </style>
    <body>
        <div class="perfum">
            <span class="titulo">Teste repeticao</span>
        <form name="formrepeti" method="post" action="aula5.php">
            <span class="txt">Numero 1:</span>
            <input type="text" value=" " name="txtn1">
            <input type="submit" value="Calcular" name="calcula">
        </form>
        </div>
    </body>
    
</html>