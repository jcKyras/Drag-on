<?php

ini_set("max_execution_time", 0);


function errorHandler($errno, $errstr, $errfile, $errline) {
    throw new Exception($errstr, $errno);
}
set_error_handler('errorHandler');

//CONTANTES ==================================================
$imp_01_total = 1068; //medição feita dia 03/11/2015
$imp_02_total = 152; //medição feita dia 03/11/2015
$imp_03_total = 1707; //medição feita dia 03/11/2015
$imp_04_total = 154; //medição feita dia 03/11/2015 
$imp_05_total = 668; //medição feita dia 03/11/2015 
$imp_06_total = 130; //medição feita dia 03/11/2015

$imp_01_limite = 10000;
$imp_02_limite = 2500;
$imp_03_limite = 10000;
$imp_04_limite = 10000;
$imp_05_limite = 10000;
$imp_06_limite = 10000;

$data_medicao = "14/10/2015";

//=============================================================


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

/*
    $imp1 = $imp1T-$imp_01_total;
    $imp2 = $imp2T-$imp_02_total;
    $imp3 = $imp3T-$imp_03_total;
    $imp4 = $imp4T-$imp_04_total;
    $imp5 = $imp5T-$imp_05_total;
    $imp6 = $imp6T-$imp_06_total;

$imp1 = 100;
$imp3 = 100;
$imp4 = 100;
$imp5 = 100;
$imp6 = 100;
*/

/*
$imp1 = 1001;
    
    $imp3 = 1200;
    $imp4 = 800;
  	$imp5 = 350;
    $imp6 = 9000;


$porc1 = getPorcentagem($imp1, $imp_01_limite);
$porc2 = getPorcentagem($imp2, $imp_02_limite);
$porc3 = getPorcentagem($imp3, $imp_03_limite);
$porc4 = getPorcentagem($imp4, $imp_04_limite);



$porc5 = getPorcentagem($imp5, $imp_05_limite);


$porc6 = getPorcentagem($imp6, $imp_06_limite);

*/




  







//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::



function atualizarImpressoras(){

//$impressora1 = buscarDadosImp(1);

// PEGA A QUANTIDADE TOTAL DE IMPRESSOES EM CADA IMPRESSORA

  //$atualizacao_data="2015-12-17";
  $atualizacao_data = date('Y-m-d');
  $atualizacao_hora= date("H:i:s");

/*
try{
 	$imp1T = getContadorT1("192.168.63.11");
  $impressora01 = buscarDadosImp(1);
  alterarDadosImp($impressora01->getId(), $imp1T, $impressora01->getCont_atual(), $atualizacao_data, $atualizacao_hora, $impressora01->getData_medicao());
 }catch (Exception $e){print "erro";}
 
 try{
  $imp2T = getContadorT2("192.168.63.12");
  $impressora02 = buscarDadosImp(2); 
  alterarDadosImp($impressora02->getId(), $imp2T, $impressora02->getCont_atual(), $atualizacao_data, $atualizacao_hora, $impressora02->getData_medicao());
  }catch (Exception $e){}

  try{  
  $imp3T = getContadorT1("192.168.63.13");
  $impressora03 = buscarDadosImp(3); 
  alterarDadosImp($impressora03->getId(), $imp3T, $impressora03->getCont_atual(), $atualizacao_data, $atualizacao_hora, $impressora03->getData_medicao()); 
  }catch (Exception $e){}

  try{
  $imp4T = getContadorT1("192.168.63.14");
  $impressora04 = buscarDadosImp(4);  
  alterarDadosImp($impressora04->getId(), $imp4T, $impressora04->getCont_atual(), $atualizacao_data, $atualizacao_hora, $impressora04->getData_medicao());
  }catch (Exception $e){}

  try{
 	$imp5T = getContadorT1("192.168.63.15");
  $impressora05 = buscarDadosImp(5); 
  alterarDadosImp($impressora05->getId(), $imp5T, $impressora05->getCont_atual(), $atualizacao_data, $atualizacao_hora, $impressora05->getData_medicao());
  }catch (Exception $e){}

  try{
  $imp6T = getContadorT1("192.168.63.16");
  $impressora06 = buscarDadosImp(6); 
  alterarDadosImp($impressora06->getId(), $imp6T, $impressora06->getCont_atual(), $atualizacao_data, $atualizacao_hora, $impressora06->getData_medicao());
  }catch (Exception $e){}

*/
// QUANTIDADE ATUAL NO BANCO DE DADOS - VARIAVEL TIPO IMPRESSORA

	
	   for($i=11;$i<=16;$i++){
      try{
        if($i==12){
          $imp = getContadorT2("192.168.63.".$i);
        }else{
         $imp = getContadorT1("192.168.63.".$i);
        }  
        $impressora = buscarDadosImp($i-10);
        $impressora->setStatus(True);
        alterarDadosImp($impressora->getId(), $imp, $impressora->getCont_atual(), $atualizacao_data, $atualizacao_hora, $impressora->getData_medicao(), $impressora->getStatus());
      }catch (Exception $e){
        print "Erro na impressora ".($i-10)."<br> \n";
       $impressora = buscarDadosImp($i-10);
        $impressora->setStatus(False);
        alterarStatusImp($impressora->getId(), $impressora->getStatus());
      }
     }
	   
  
	   
	       



	

	

	

	



	

}


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


function abrirConexao(){
$link=mysqli_connect("127.0.0.1","root","root","dragon1");
  if(mysqli_connect_errno()){
    $texto= "Erro ao conectar com o banco";
    alertAviso($texto);
    return;
  }
  return $link;
}





//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


function fecharConexao($link){
  mysqli_close($link);
}


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


function alertAviso($texto){
	echo "<script type='text/javascript> alert('$texto')' '";
}


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


function alterarDadosImp($id, $cont_geral, $cont_atual, $atualizacao_data, $atualizacao_hora, $data_medicao, $status){

$link=abrirConexao();
	$sql = "update impressoes set cont_geral='$cont_geral', cont_atual='$cont_atual', atualizacao_data='$atualizacao_data', atualizacao_hora='$atualizacao_hora', data_medicao='$data_medicao', status='$status' where id='$id';";

	$resultado= mysqli_query($link, $sql);

	if (!$resultado) {
		$texto = "Falha ao inserir os dados";
		alertAviso($texto);
		return;
	}
	fecharConexao($link);
}

function alterarStatusImp($id, $status){

$link=abrirConexao();
  $sql = "update impressoes set status='$status' where id='$id';";

  $resultado= mysqli_query($link, $sql);

  if (!$resultado) {
    $texto = "Falha ao inserir os dados";
    alertAviso($texto);
    return;
  }
  fecharConexao($link);
}

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


function buscarDadosImp($id){
	
$link=abrirConexao();
    $sql = "SELECT * FROM impressoes where id='$id';";
    $resultado = mysqli_query($link, $sql);

		if (!$resultado) {
			$texto="Falha em buscar os dados";
			alertAviso($texto);
			return;
		}else{
			$row = mysqli_fetch_array($resultado);

			$nome = $row["nome"];
			$id = $row["id"];
			$cont_geral = $row["cont_geral"];
			$cont_atual = $row["cont_atual"];
			$atualizacao_data = $row["atualizacao_data"];
			$atualizacao_hora = $row["atualizacao_hora"];
			$data_medicao = $row["data_medicao"];
      $num_serie = $row["num_serie"];
      $modelo = $row["modelo"];
      $status = $row["status"];

		return $impressora = new Impressora($nome, $id, $cont_geral, $cont_atual, $atualizacao_data, $atualizacao_hora, $data_medicao, $num_serie, $modelo, $status);
		}

	fecharConexao($link);
}


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


function fazerMedicao($id){
	$impressora = buscarDadosImp($id);
	$data = date('Y-m-d');

	
	$cont_geral = $impressora->getCont_geral();
  $cont_atual = $cont_geral;
	$atualizacao_data = $impressora->getAtualizacao_data();
	$atualizacao_hora = $impressora->getAtualizacao_hora();
	$data_medicao = $data; 
  $status = $impressora->getStatus();

	alterarDadosImp($id, $cont_geral, $cont_atual, $atualizacao_data, $atualizacao_hora, $data_medicao, $status);

}


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


    function getContadorT1($ip){


     
      try{
        //ini_set("max_execution_time", 3);
        $comunidade="public";
        $codigo = snmpget($ip, $comunidade, "1.3.6.1.4.1.367.3.2.1.2.19.1.0", 300000);
        $qtdImpressoes = substr($codigo,9); 
      
        return ($qtdImpressoes);
      } catch(Exception $e){
        throw new Exception("Erro ao tentar acessar impressora em 3 segundos", 1);
        
      }
    }


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


     function getContadorT2($ip){
     //	$link="http://192.168.63.12/hp/device/info_configuration.html";
     	//$url = urldecode($link);
      $comunidade="public";
     $codigo = snmpget($ip, $comunidade, "1.3.6.1.2.1.43.10.2.1.4.1.1");
      $qtdImpressoes = substr($codigo,10); 
      return ($qtdImpressoes);
      print $qtdImpressoes;
    }


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


    function getPorcentagem($qtd, $limite){
    	$porc = ($qtd*100) / $limite;
    	return $porc;
    }


function abrirConexaoSistoque(){
$link=mysqli_connect("127.0.0.1","root","","sistoque");
  if(mysqli_connect_errno()){
    $texto= "Erro ao conectar com o banco";
    alertAviso($texto);
    return;
  }
  return $link;
}


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


function fecharConexaoSistoque($link){
  mysqli_close($link);
}



function verificarLogin($login, $senha){
    
     $link = abrirConexaoSistoque();




     $sql = "SELECT * FROM usuario where login='$login';";

    $resultado = mysqli_query($link, $sql);


    if (!$resultado) {
      
      alertAviso("Erro");
        return;
    } else {

        return  $row = mysqli_fetch_array($resultado);
        /*
        if($senha == $row["senha"]){
            session_start();
            $_SESSION['usuario'] = $row["nome"];
            setcookie('nomeUsuario', $row["nome"]);
            setcookie('controleUsuario',$row["controle"]);

            header('location: index2.php');
        }
        */
    }

   fecharConexaoSistoque($link);
    
    
}



function setEstado($int){
    $link = abrirConexaoSistoque();

     $sql = "UPDATE controle_temp set estado=".$int." where id=1;";

    $resultado = mysqli_query($link, $sql);


    if (!$resultado) {
      
      alertAviso("Erro");
        return;
    }

    

   fecharConexaoSistoque($link);
}

function getEstado(){
      $link = abrirConexaoSistoque();

      $id=1;
     $sql = "SELECT * FROM controle_temp where id=$id;";

    $resultado = mysqli_query($link, $sql);


    if (!$resultado) {
      
      alertAviso("Erro");
        return;
    } else {

        return  $row = mysqli_fetch_array($resultado);

    }

   fecharConexaoSistoque($link);
    
}



?>
