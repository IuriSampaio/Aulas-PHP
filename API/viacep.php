<?php 
    function pegaCep(){
        if(isset($_POST['cep'])){
            $cep = $_POST['cep'];
            $cep = filtroDeCaracter($cep);
            if(eCep($cep)){
                $endereco = pegaViaCep($cep);
                if(property_exists($endereco,'erro')){
                    $endereco->cep = "CEP INVALIDO!!";
                    $endereco = eVazio();
                }
            }else{  
                $endereco = eVazio();
                //defininindo o campo cep como invalido
                $endereco->cep = "CEP INVALIDO!!";
            }
        }else{
           $endereco= eVazio();
        }
        return $endereco;
    }

    //função que vê se o cep tem a forma que deveria
    function eCep(string $cep):string{
       return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
    }
    //função que retira os caracteres que não são numeros
    function filtroDeCaracter(string $cep):string{   
        return preg_replace('/[^0-9]/','',$cep);
    }
    //função que deixa por default os campos vazios
    function eVazio():object{
        return (object)[
            'cep'=>'',
            'localidade'=>'',
            'logradouro'=>'',
            'uf'=>'',
            'bairro'=>''
        ];
    }
    //função que pega a api e transforma em um obj
    function pegaViaCep(string $cep):object{
        $url = "https://viacep.com.br/ws/{$cep}/json";
                    
        $endereco =json_decode( file_get_contents($url));/// --> assim ele vai retornar um objeto (false é o default)
                    //json_decode( file_get_contents($url),true); --> assim ele vai retornar um array 
                    // var_dump($endereco->localidade); assim ele vai mostrar apenas no elemento especificado deposi da seta 
        return $endereco;
    }