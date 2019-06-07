<?php 

class Notas{

	private $nome;
	private $nota;

	public function __construct($nome,$nota){
		$this->nome = $nome;
		$this->nota = $nota;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getNota(){
		return $this->nota;
	}

}



 ?>