<!DOCTYPE html>
<?php
        /*      tipos de varieaves no php
                    int ou integer ---> inteiros numeros
                    float --->numeros reais 
                    double -->nuemros reais coma mais armazenamento
                    string --> texto
                    boolean --> verdadeiro ou falso(0 ou 1)
                    array --> Matrizes
                    object -->  objeto
                    gettype() --> retorna o tipo de dado atribuido
                                    echo(gettype($variavel));
                    settipe() --> força a variavel a ter um tipo especifico de dados
                                    settype($variavel, "TipoDaVariavel")
                    var_dump() --> retorna o tipo de variavel e o numeor de caracteres
                                    vardump($variavel)
        
        */
        //verifica se o formulario foi submetido pelo botaoh
        if(isset($_POST['igual']))
        //criandop as variaveis 
        $valor1=(float) 0;
        $valor2=(float) 0;
       
        $ops=(string) null;
        $resultado= (double) 0;
         //atribuindo o valor do fumulario(method="post")
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $ops = strtoupper($_POST['Rops']);
        //convetendo variaveis que viraram string para numero 
        settype($valor1, "float");
        settype($valor2, "float");
        //desição para ver qual opercao vai fazer
        if($ops == "S")
            $resultado = $valor1 + $valor2;
        elseif($ops == "-S")
            $resultado = $valor1 - $valor2;
        elseif($ops == "M")
            $resultado = $valor1 * $valor2;
        elseif($ops == "D")
            $resultado = $valor1 / $valor2;
        else
            $resultado='_|_';
        
        
?>
<html lang="pt-br">
    <head>
        <title> Calculadora </title>
    </head>
    <style>
        .conteinerGG{
            width: 750px;
            height: 550px;
            float:left;
            margin-left: 500px;
            background-color: blueviolet;
            border-radius: 50px;
        }
        .conteinertitulo{
            width: inherit;
            height: 20%;
            background-color: darkslateblue;
            border-top-right-radius: 50px;
            border-top-left-radius: 50px;
            text-align: center;
        }
        .txttitulo{
            font-family: monospace;
            font-size: 40px;
            color: blue;
        }
        #formularioconta{
            width: inherit;
            height: 80%;
            color: blue;
            float: left;
        }
        .valores{
            width: inherit;
            height: 20%;
            float: left;
            margin-left: 180px;
        }
        .caixavalor{
            width: 200px;
            height: 30px;
        }
        .txtformulario{
            font-family: monospace;
            font-size: 30px;
        }
        .revOps{
            float: left;
            width: inherit;
            margin-left: 10px;
        }
        .operacoes{
            width: 50%;
        }
        .txtops{
            font-family: monospace;
            font-size: 30px;
        }
        .igual{
            width: 200px;
            height: 50px;
            border-radius: 100px;
            background-color:darkslateblue;
        }
        .resultado{
            float: right;
            background-color: darkslateblue;
            width: 400px;
            height: 300px;
            border-bottom-right-radius: 50px;
            padding-bottom: 18px;
        }
        .textoresultado{
            text-align: center;
            
            font-size: 250px;
            font-family: monospace;
        }
    </style>
    <body>
        <div class="conteinerGG">
            <div class="conteinertitulo">
                <br>
                <span class="txttitulo">***Calculadora Simples***</span>
            </div>
            <div class="conteinerformulario">
                <form name="formconta" method="post" action="calculadora.php" id="formularioconta">
                    <div class="valores">
                        <br>
                    <span class="txtformulario">Valor 1</span>
                        <input type="text" name="valor1" value="<?php echo($valor1) ?>" class="caixavalor" maxlength="5" />
                        <br>
                        <br>
                    <span class="txtformulario">Valor 2</span>
                        <input type="text" name="valor2" value="<?php echo($valor2) ?>" class="caixavalor" maxlength="5" />
                    </div>
                    <table class="revOps">
                        <tr>
                            <td class="operacoes">    
                            <span class="txtformulario">SELECIONE A OPERAÇÃO:</span>
                                <br>
                                <br>
                                <input type="radio" name="Rops" value="S" <?php if(ops == "S") checked ?>><span class="txtops">+ </span>
                                <br>
                                <input type="radio" name="Rops" value="-S" <?php if(ops == "-S") checked ?>><span class="txtops">- </span>
                                <br>
                                <input type="radio" name="Rops" value="M" <?php if(ops == "M") checked ?>><span class="txtops">*</span>
                                <br>
                                <input type="radio" name="Rops" value="D" <?php if(ops == "D") checked ?>><span class="txtops">/ </span>
                                <br>
                                <br>
                                <input type="submit" name="igual" value="=" class="igual">
                            </td>
                            
                            <td class="resultado">
                                <span class="textoresultado">
                                    <?php
                                        if(isset($resultado)){
                                                echo($resultado);
                                        }
                                    ?>
                                </span>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    
    </body>
</html>