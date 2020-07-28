<?php
// essa classe cria coneção com o banco mysql usando... 
//...Orientação á objeto com php
	class mySqlConcexao{
		//atributos
		private $server;
		private $user;
		private $senha;
		private $banco;
		
		// método construtor
		public function __construct(){
			//instanciando os atributos
			$this->server = "localhost";
			$this->user = "root";
			$this->senha = "bcd127";
			$this->banco = "dbcontatos20201a";
		}

		public function conexaoDatabase(){
			try{
				//usando PDO para fazer conexão com o banco
				$conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->banco,$this->user, $this->senha);

				return $conexao;

			}catch(PDOExeption $Erro){

				echo("ERRO ao abrir conexão com o banco <br> Linha:".$Erro->getLine()." <br> ".$Erro->getMessage());
			}
			
		}

		public function fechaConex(){
			// quando a variavel conexao que é 
			//retornada pelo conexaoDatabase ela vem com tudo do banco
			//se quiser fechar a conexão basta tornar ela nula
			$conexao = null;
		}
	}