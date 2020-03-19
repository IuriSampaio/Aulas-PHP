<!DOCTYPE html>
<?php
    setlocale(LC_ALL, "pt_BR");            
    require_once('modulos/vars.php');
    require_once('modulos/calculos.php');       

        /*     * tipos de varieaves no php
                    int ou integer ---> inteiros numeros
                    float --->numeros reais 
                    double -->nuemros reais coma mais armazenamento
                    string --> texto
                    boolean --> verdadeiro ou falso(0 ou 1)
                    array --> Matrizes
                    object -->  objeto
               * TESTES LOGICOS do php
                    gettype() --> retorna o tipo de dado atribuido
                                    echo(gettype($variavel));
                    settipe() --> força a variavel a ter um tipo especifico de dados
                                    settype($variavel, "TipoDaVariavel")
                    var_dump() --> retorna o tipo de variavel e o numeor de caracteres
                                    vardump($variavel)
                    strtoupper() --> converte um coteudo para maiusculo
                    strtolower() --> conerte o conteudo para minusculo
                    empty() --> Verifica se a variavel esta vazia 
                    str_replace("digitado","substituido",LOCAL ONDE VAI POROCURAR)---> LOCALIZA UM CARACTER, E SE TIVER ELE LA, SERA TROCADO
                    setlocale(LC_ALL, local) --> converte tudo para o padrao da localidaDE
                    round(oqueVaiNaTela,2(numero de casas apos a virgula)) -->escolher o numero de numeros depoi da virgula 
              * operadores lógicos no php
                    || --> ou 
                    && --> e
                    ! --> não
                    
              *IMPORTAR 
                ------- Só importa ----------
                include() -->importa do apache 
                require() -->importa do apache
                ----------------  qunado usa o '_once' o apache verifica se tem na memoria(da garantia que nao vai importar de novo)  -----------------
                require_once() --> importa da memoria se tiver lá(checado pelo apache) 
                include_once() --> importa da memoria se tiver lá(checado pelo apache)
        */
       
                            //criandop as variaveis 
    $valor1=(float) 0;
    $valor2=(float) 0;
    $ops=(string) null;
    $resultado= (double) 0;
                            //verifica se o formulario foi submetido pelo botaoh
        if(isset($_POST['igual'])){
                            //atribuindo o valor do fumulario(method="post")
        $valor1 = str_replace(",",".",$_POST['valor1']);
        $valor2 = str_replace(",",".",$_POST['valor2']);
            if(empty($valor1)||empty($valor2)){
                            //PODE CHAMAR A CONSTANTE DURANTE O PROBLEMA QUANTAS VEZES NESCESSARIAS  
                echo(ERRO_CAIXA_VAZIA);
          
                            //verifica se tem alguma coisa na duas caixas de texto
                    $ops = strtoupper($_POST['Rops']);
                            //validar o calculo apenas quando os valores forem nuemros 
        }   elseif(!is_numeric($valor1) || !is_numeric($valor2))
                        echo(ERRO_NAO_NUMERO);
                    else{
                          $ops = strtoupper($_POST['Rops']);
                            //convetendo variaveis que viraram string para numero 
                    settype($valor1, "float");
                    settype($valor2, "float");
                            // função para fazer os cauculos
                        $resultado = calculadora($ops, $valor1, $valor2);
                        
                     
            }
        }
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
           
        
            justify-content: center;
            align-items: center;
            background-color: blueviolet;
            border-radius: 50px;
            align-content: center;
        }
        .conteinertitulo{
            width: inherit;
            height: 20%;
            background-color: darkslateblue;
            border-top-right-radius: 50px;
            border-top-left-radius: 50px;
            text-align: center;
        }
        .msg{
            width: 100%;
            height: 30px;
            border: solid 1px #000000;
            background-color: fuchsia;
            text-align: center;
            padding-left: 20px;
            padding-right: 20px;
            box-sizing: border-box;
            margin-bottom: 10px;
            display: block;
            font-family: monospace;
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
            width: 300px;
            height: 200px;
            text-align: center;
          
            padding-bottom: 18px;
            margin-top: 60px;
            border: 60px;
        }
        .textoresultado{
            text-align: center;
            font-size: 90px;
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
                <form name="formconta" method="post" action="aula4.php" id="formularioconta">
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
                                <input type="radio" name="Rops" value="S" <?= $ops == "S" ? "checked" : "" ?> ><span class="txtops">+ </span>
                                <br>
                                <input type="radio" name="Rops" value="-S" <?= $ops == "-S" ? "checked" : "" ?> ><span class="txtops">- </span>
                                <br>
                                <input type="radio" name="Rops" value="M" <?= $ops == "M" ? "checked" : "" ?> ><span class="txtops">*</span>
                                <br>
                                <input type="radio" name="Rops" value="D" <?= $ops == "D" ? "checked" : "" ?> ><span class="txtops">/ </span>
                                <br>
                                <br>
                                <input type="submit" name="igual" value="=" class="igual">
                            </td>
                            
                            <td class="resultado">
                                <span class="textoresultado">
                                    <?=round($resultado,2)?>
                                </span>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    
    </body>
</html>