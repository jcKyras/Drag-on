<?php

class toque{
	private $id;
	private $nome;
	private $hora;
	private $descricao;
	private $tipo_toque;



function __construct($id, $nome, $hora, $descricao, $tipo_toque){
	$this->id = $id;
	$this->nome = $nome;
	$this->hora = $hora;
	$this->descricao = $descricao;
	$this->tipo_toque = $tipo_toque;
	

}

public function getId(){
	return $this->id;
}


public function getNome(){
	return $this->nome;
}

public function getHora(){
	return $this->hora;
}

public function getDescricao(){
	return $this->descricao;
}

public function getTipo_toque(){
	return $this->tipo_toque;
}


public function setId($id){
	$this->id=$id;
}

public function setNome($nome){
	$this->nome=$nome;
}
public function setHora($hora){
	$this->hora=$hora;
}
public function setDescricao($descricao){
	$this->descricao=$descricao;
}
public function setTipo_toque($tipo_toque){
	$this->tipo_toque=$tipo_toque;
}


}
?>