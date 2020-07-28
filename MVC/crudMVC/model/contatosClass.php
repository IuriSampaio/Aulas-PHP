<?php
class contato{
	// atributos da classe contato
	private $idContato;
	private $nome;
	private $endereco;
	private $bairo;
	private $cep;
	private $idEstado;
	private $telefone;
	private $celular;
	private $email;
	private $dtNasc;
	private $sexo;
	private $obs;

	public function __construct(){

	}

	// gets e sets dos atributos da classe contatos

	// get e set idCTT
	public function getIdCtt(){
		return $this->idContato;
	}
	public function setIdCtt($idContato){
		$this->idContato = $idContato;
	}

	// get e set Nome
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}

	// get e set Endereco
	public function getEndereco(){
		return $this->endereco;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	// get e set Bairro
	public function getbairo(){
		return $this->bairo;
	}
	public function setBairo($bairo){
		$this->bairo = $bairo;
	}

	// get e set cep
	public function getCep(){
		return $this->cep;
	}
	public function setCep($cep){
		$this->cep = $cep;
	}
	
	// get e set idEstado
	public function getidEstado(){
		return $this->idEstado;
	}
	public function setidEstado($idEstado){
		$this->idEstado = $idEstado;
	}

	// get e set telefone
	public function getTelefone(){
		return $this->telefone;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	// get e set celular
	public function getCelular(){
		return $this->celular;
	}
	public function setCelular($celular){
		$this->celular = $celular;
	}

	// get e set email
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}

	// get e set dtNasc
	public function getdtNasc(){
		return $this->dtNasc;
	}
	public function setdtNasc($dtNasc){
		$this->dtNasc = $dtNasc;
	}

	// get e set sexo
	public function getSexo(){
		return $this->sexo;
	}
	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	// get e set obs
	public function getObs(){
		return $this->obs;
	}
	public function setObs($obs){
		$this->obs = $obs;
	}
}