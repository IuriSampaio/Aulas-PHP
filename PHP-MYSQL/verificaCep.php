<?php

    //função que vê se o cep tem a forma que deveria
    function eCep(string $cep):bool{
       return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
    }
    //função que retira os caracteres que não são numeros
    function filtroDeCaracter(string $cep):string{   
        return preg_replace('/[^0-9]/','',$cep);
    }