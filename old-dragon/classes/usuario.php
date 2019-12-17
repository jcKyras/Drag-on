<?php

class usuario{
	private $nome;
	private $login;
	private $senha;
	private $controle;



function __construct($nome, $login, $senha, $controle){
	$this->nome = $nome;
	$this->login = $login;
	$this->senha = $senha;
	$this->controle = $controle;
	

}

public function getNome(){
	return $this->nome;
}

public function getLogin(){
	return $this->login;
}

public function getSenha(){
	return $this->senha;
}

public function getControle(){
	return $this->controle;
}



public function setNome($nome){
	$this->nome=$nome;
}
public function setLogin($login){
	$this->login=$login;
}
public function setsenha($senha){
	$this->senha=$senha;
}
public function setcontrole($controle){
	$this->controle=$controle;
}


}
?>