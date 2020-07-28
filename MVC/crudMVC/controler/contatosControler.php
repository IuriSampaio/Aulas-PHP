<?php
//sempre vai ser um arquivo controler por assunto
class contatosControler{
	public function __contruct(){
                
	        require_once 'model/contatosClass.php';

        }
	public function inserirContato(){
		//VALIDANDO A REQUISIÇÃO FEITA POR HTTP : POST , GET , PUSH , PUT, DELETE
		if( $_SERVER['REQUEST_METHOD'] == 'POST'){
		// RECEBENDO DO FORMULARIO
		$nome = $_POST['nome'];
                $cep = $_POST['cep'];
                $cep = $cep;
                $endereco = $_POST['endereco'];
                $bairro = $_POST['bairro'];
                $idEstado = $_POST['estados'];
                $telefone = $_POST['tel'];
                $celular = $_POST['cel'];
                $email = $_POST['email'];
                $nascimento = explode("/",$_POST['dataNasc']);
                $nascimentoAmericano = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];
                $sexo = $_POST['rdoSexo'];
                $observacao = $_POST['obs'];

                require_once 'model/contatosClass.php';
                $contato = new contato();

                # CRIANDO UM OBJETO QUE VAI SER MANDADO PARA O INSERT QUE CONVERSA COM O BANCO  

                $contato->setNome($nome);
                $contato->setCep($cep);
                $contato->setEndereco($endereco);
                $contato->setBairo($bairro);

                $contato->setidEstado(1);
                
                $contato->setTelefone($telefone);
                $contato->setCelular($celular);
                $contato->setEmail($email);
                $contato->setdtNasc($nascimentoAmericano);
                $contato->setSexo($sexo);
                $contato->setObs($observacao);
                require_once 'model/DAO/contatosDAO.php';

                $contatoDAO = new ContatosDAO();

                $contatoDAO->insertCtt($contato);

		}

	}
	public function atualizarContato(){

	}
	public function deletarContato($id){
                require_once 'model/DAO/contatosDAO.php';
		$contatosDAO = new contatosDAO();
                $contatosDAO->deleteCtt($id);
	}
        public function listarCTT(){  
                require_once 'model/DAO/contatosDAO.php';
                $listaDosCTT = new ContatosDAO();
                return $listaDosCTT->selectAllCtt();
        }

}