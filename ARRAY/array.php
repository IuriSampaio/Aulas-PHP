<?php
    require_once("./index.html");
    $empresas = ['Casas Bahia', 'Loja Cem', 'Magazine Luiza'];
    $clientes = ['Fernando', 'Ana Clara','Maria'];
    $frutas = ['morango','banana','abacaxi'];
    $numeros = range (1,10);//gera um array com numeros de 1 á 10
    // implode("string",$arr) --> transforma um array em uma string , ex:
    //echo("TESTE:");
    //echo( implode("<br>TESTE :",$empresas));

    // função que fecha o elemento anterior da lista e abre um novo com os elemento da lista com um argumento do array
    $elements = fn ($arr) => implode ("</li><li>", $arr);
    // função que recebe um array e um titulo para o campo e transforma o array em uma lista 
    $arrayToList = fn ( $arr, $title="lista" ) => "
            <fieldset>
                <legend><h1>{$title}</h1></legend>
                <ul>
                    <li>{$elements($arr)}</li>
                </ul>
            </fieldset>
        ";

    //  array_map($callback,$arr) - - -> aplica uma callback function a cada elemento do array
    //  array_filter($arr, $callback) - - -> filtra os elementos do array de acordo com o especificado na callback function
    //  array_reduce()
    // função que adiciona 'Funcionario :' a cada argumento passado a ela  
    $addCliente = fn($nome) => "Funcionario:{$nome}";
    // vai passaar por todos os elementos de $clientes e adicionar oque foi especificado em $addCliente 
    $clientes2 = array_map($addCliente , $clientes);
    // função que vê se o numero é par
    $ePar = fn($numero) => $numero % 2 == 0;
    // função que filtra os numeros contidos em $numeros e só mostra os que são pares
    $numerosPares = array_filter($numeros, $ePar);
//callback == variavel retornada por uma função
    /////// As DUAS FUNÇOES SEGUINTES FAZEM EXATAMENTE A MESMA COISA (mas uma é function a outra é callback da function ou função anonima)
    // função que recebe dois valores e faz uma somac
    $somar = fn($acc, $numero) => $acc + $numero; //se a função for assim pode usar como uma variavel
                function soma($prin,$seg){//se a função for assim ela tem que ser usada entre " "
                    $soma = $prin + $seg;
                    return $soma;
                }
    
    // recebe um array e uma função que vai ser realizada por todos os elementos do array 
    $total = array_reduce($numeros,$somar);//array_reduce ($numerosPares, "soma");

   
    echo $somar (45, 15);
    echo $total;
    echo $arrayToList ($numerosPares,"Números Pares");
    echo $arrayToList ($clientes2,"Funcionarios");
    echo $arrayToList ($empresas, "Empresas");
    echo $arrayToList ($clientes, "Clientes");
    echo $arrayToList ($frutas, "FRUTINHA");
    echo $arrayToList ($numeros, "números");

// Exercício
//  $empresas = ['Casas Bahia', 'Loja Cem', 'Magazine Luiza'];
  $clientes = ['fernando', 'ana clara','Maria'];
  $frutaz = ['morango','banana','abacaxi'];
  $numeroz = range (1,10);
  $funcionario = [
        "Ana" => 150,
        "Hugo" => 560,
        "Igot" => 600,
        "Yago" => 100
    ];

// 1) Para todos os exercícios deverá ser criado um no array
// com base no existente.
//  a) Exibir todas as empresas em Maiúsculas.
    $maiusculo = fn($arr) => strtoupper($arr);
    $empresasGG = array_map($maiusculo, $empresas);
        echo $arrayToList($empresasGG, "Empresas GG");
//  b) Exibir todos os clientes com somente a primeira letra maiúscula de cada palavra.
    $ClientesG = fn($arr) => ucwords($arr);
    $primMais = array_map($ClientesG,$clientes);
        echo $arrayToList($primMais, "Clientes com a primeira letra maiuscula ");
//  c) Ordenar a lista de frutas de A-Z
    sort($frutaz);
        echo $arrayToList($frutaz,"Frutas de A á Z");
//  d) Exibir apenas o números ímpares que não são multiplos de 3.
    $imparesENdvPor3 = fn($arr) => $arr%2 != 0 and $arr%3 != 0;
    $filtrado = array_filter($numeroz , $imparesENdvPor3);
        echo $arrayToList($filtrado,"impares n divididos por 3");
//  e) Exibir o fatorial de cada número.
    $fatorial = fn($num) =>array_product(range($num,1));
    $noArray = array_map($fatorial,$numeroz);
        echo $arrayToList($noArray,"Fatorial");    
//  d) Exibir a soma dos salários dos funcionários que recebem mais de 500,00
    $salario = fn($arr) => $arr>=500 ? $somar : "";
    $aplica = array_reduce($funcionario,$salario);
    echo $aplica;