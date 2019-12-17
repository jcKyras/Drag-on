<?php

class tipo_toque{
	private $id;
	private $nome;
	private $tempo_toque;
	private $tempo_pausa;
	private $repeticao;



function __construct($id, $nome, $tempo_toque, $tempo_pausa, $repeticao){
	$this->id = $id;
	$this->nome = $nome;
	$this->tempo_toque = $tempo_toque;
	$this->tempo_pausa = $tempo_pausa;
	$this->repeticao = $repeticao;
	

}

public function getId(){
	return $this->id;
}

public function getNome(){
	return $this->nome;
}

public function getTempo_toque(){
	return $this->tempo_toque;
}

public function getTempo_pausa(){
	return $this->tempo_pausa;
}

public function getRepeticao(){
	return $this->repeticao;
}



public function setId($id){
	$this->id=$id;
}

public function setNome($nome){
	$this->nome=$nome;
}
public function setTempo_toque($tempo_toque){
	$this->tempo_toque=$tempo_toque;
}
public function setTempo_pausa($tempo_pausa){
	$this->tempo_pausa=$tempo_pausa;
}
public function setRepeticao($repeticao){
	$this->repeticao=$repeticao;
}


}
?>