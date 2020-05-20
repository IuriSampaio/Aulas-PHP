<?php 
//**********************************************SOMA - SUBTRAÇÃO - MULTIPLICAÇÃO - DIVISÃO************************************************************
        //importar constantes 
        require_once('vars.php');
    function calculadora($opsDAf, $n1, $n2){
            //PROSCESSAMENTO DOS CAUCULOS 
                $result=(double)0;
                        switch(strtoupper($opsDAf)){
                            case ("S"): $result= $n1 + $n2;
                                break;
                            case ("-S"): $result = $n1 - $n2;
                                break;
                            case ("M"): $result = $n1 * $n2;
                                break;
                            case ("D"):
                                if($n2==0)
                                    echo(ERRO_DIV0);
                                else
                                    $result = $n1 / $n2;
                            break;
                                
                            default: $result = "_|_";
                        }
                return $result;
            
        }
?>