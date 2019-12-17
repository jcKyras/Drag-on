<?php

class impressora{
	private $nome;
	private $id;
	private $cont_geral;
	private $cont_atual;
	private $atualizacao_data;
	private $atualizacao_hora;
	private $data_medicao;


function __construct($nome, $id, $cont_geral, $cont_atual, $atualizacao_data, $atualizacao_hora, $data_medicao){
	$this->nome = $nome;
	$this->id = $id;
	$this->cont_geral = $cont_geral;
	$this->cont_atual = $cont_atual;
	$this->atualizacao_data = $atualizacao_data;
	$this->atualizacao_hora = $atualizacao_hora;
	$this->data_medicao = $data_medicao;

}

public function getNome(){
	return $this->nome;
}

public function getId(){
	return $this->id;
}

public function getCont_geral(){
	return $this->cont_geral;
}

public function getCont_atual(){
	return $this->cont_atual;
}

public function getAtualizacao_data(){
	return $this->atualizacao_data;
}

public function getAtualizacao_hora(){
	return $this->atualizacao_hora;
}

public function getData_medicao(){
	return $this->data_medicao;
}



public function setNome($nome){
	$this->nome=$nome;
}
public function setId($id){
	$this->id=$id;
}
public function setCont_geral($cont_geral){
	$this->cont_geral=$cont_geral;
}
public function setCont_atual($cont_atual){
	$this->cont_atual=$cont_atual;
}
public function setAtualizacao_data($atualizacao_data){
	$this->atualizacao_data=$atualizacao_data;
}
public function setAtualizacao_hora($atualizacao_hora){
	$this->atualizacao_hora=$atualizacao_hora;
}
public function setData_medicao($data_medicao){
	$this->data_medicao=$data_medicao;
}

}
?>