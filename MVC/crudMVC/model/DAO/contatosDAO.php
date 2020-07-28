<?php
class ContatosDAO{

    public function __construct(){
        // no construtor escreve-se as variavies(ou arquivos)'publicas' ou seja, serão usados o programa todo
        require_once('conexaoPDO.php');
    }
    public function insertCtt( contato $contato ){
        
        $sql = "INSERT INTO tblContatos VALUES ( DEFAULT , '".$contato->getNome()."' , '". $contato->getEndereco()."' , '".$contato->getbairo()."' , '".$contato->getcep()."' , '".$contato->getidEstado()."' , '".$contato->getCelular()."' ,'".$contato->getTelefone()."', '".$contato->getEmail()."' , '". $contato->getdtNasc()."' , '".$contato->getSexo()."' ,'".$contato->getObs()."' )";
       
        $conex = new mySqlConcexao();
        $conexPDO = $conex->conexaoDatabase();

        
        if ($conexPDO->query($sql)){
            header('location:index.php');
        }else{
            echo "ERROOOOO NO PDO ".$sql;
        }

        $conex->fechaConex();
    }
    public function updateCtt(){

    }
    public function deleteCtt($idContato){
        $sql = "delete from tblContatos where idContatos =".$idContato;

        $conex = new mySqlConcexao();
        $conexPDO = $conex->conexaoDatabase();

        
        if ($conexPDO->query($sql)){
            header('location:index.php');
        }else{
            echo "ERROOOOO NO PDO ".$sql;
        }

        $conex->fechaConex();
    }
    public function selectAllCtt(){
        $sql ="select * from tblContatos";

        $conex = new mySqlConcexao();
        $conexPDO = $conex->conexaoDatabase();

        $select = $conexPDO->query($sql);
        $cont=0;
        
        require_once 'model/contatosClass.php';
        while ($rsCTT = $select->fetch(PDO::FETCH_ASSOC)){
            $listaCTT[] = new contato();
            $listaCTT[$cont]->setIdCtt($rsCTT['idContatos']);
            $listaCTT[$cont]->setNome($rsCTT['nome']);
            $listaCTT[$cont]->setEndereco($rsCTT['endereco']);
            $listaCTT[$cont]->setBairo($rsCTT['bairro']);
            $listaCTT[$cont]->setCep($rsCTT['cep']);
            $listaCTT[$cont]->setIdEstado(1);//$rsCTT['idEstado']
            $listaCTT[$cont]->setTelefone($rsCTT['telefone']);
            $listaCTT[$cont]->setCelular($rsCTT['celular']);
            $listaCTT[$cont]->setEmail($rsCTT['email']);
            $listaCTT[$cont]->setdtNasc($rsCTT['dtNasc']);
            $listaCTT[$cont]->setSexo($rsCTT['sexo']);
            $listaCTT[$cont]->setObs($rsCTT['obs']);
            $cont+=1;
        }
        
        $conex->fechaConex();

        if(isset($listaCTT))
            return $listaCTT;
    }
    public function selectById(){
        
    }

}