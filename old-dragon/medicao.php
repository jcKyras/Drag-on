<?php
session_start();


if(!isset($_SESSION["usuario"])) 
{ 
// Usuário não logado! Redireciona para a página de login 

header("Location: index2.php");


} 
//include ("funteste.php");
include ("classes/impressora.php");
include("control_bd.php");

//ini_set("max_execution_time", 0);
fazerMedicao(1);
fazerMedicao(2);
fazerMedicao(3);
fazerMedicao(4);
fazerMedicao(5);
fazerMedicao(6);



?>