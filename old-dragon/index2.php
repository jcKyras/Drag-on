<?php
include ("template/topo.php");

//include("control_bd.php");

ini_set("max_execution_time", 0);


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

//$data_medicao = "14/10/2015";

//=============================================================


/*

 	$imp1 = getContadorT1("192.168.63.11")-$imp_01_total;
    $imp2 = getContadorT2("192.168.63.12")-$imp_02_total;
    $imp3 = getContadorT1("192.168.63.13")-$imp_03_total;
    $imp4 = getContadorT1("192.168.63.14")-$imp_04_total;
  	$imp5 = getContadorT1("192.168.63.15")-$imp_05_total;
    $imp6 = getContadorT1("192.168.63.16")-$imp_06_total;


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




 $imp01 = buscarDadosImp(1);


$imp02 = buscarDadosImp(2);
$imp03 = buscarDadosImp(3);
$imp04 = buscarDadosImp(4);
$imp05 = buscarDadosImp(5);
$imp06 = buscarDadosImp(6);

$porc1 = getPorcentagem(($imp01->getCont_geral() - $imp01->getCont_atual()),$imp_01_limite);
$porc2 = getPorcentagem(($imp02->getCont_geral() - $imp02->getCont_atual()),$imp_02_limite);
$porc3 = getPorcentagem(($imp03->getCont_geral() - $imp03->getCont_atual()),$imp_03_limite);
$porc4 = getPorcentagem(($imp04->getCont_geral() - $imp04->getCont_atual()),$imp_04_limite);
$porc5 = getPorcentagem(($imp05->getCont_geral() - $imp05->getCont_atual()),$imp_05_limite);
$porc6 = getPorcentagem(($imp06->getCont_geral() - $imp06->getCont_atual()),$imp_06_limite);



  //echo $codigo;
/*

    function getContadorT1($ip){
      $codigo = file_get_contents("http://".$ip."/web/guest/pt/websys/status/getUnificationCounter.cgi");
    
      //echo htmlentities($codigo);
      // CAPUTARANDO A QUANTIDADE DE COMENTARIOS
      $posicaoI = strpos($codigo, 'Total</td><td nowrap>:</td><td nowrap>')+38;

      $posFINAL=$posicaoI;

      // LAÇO PARA DESCOBRIR A POSIÇAO QUE 
      // TERMINA O NUMERO DE COMENTARIOS
      while($codigo{$posFINAL} <>'<'){
        $posFINAL++;

      }
      
      //DEFINO O TAMANHO DA PALAVRA
      $posTAMANHO = $posFINAL-$posicaoI;


      // PEGO O NUMERO NA STRING CODIGO, USANDO A POSICAO INICIAL
      // E COLOCANDO O TAMANHO DEFINIDO ANTERIORMENTE
      $qtdImpressoes = substr($codigo,$posicaoI, $posTAMANHO); 
      
      return ($qtdImpressoes);
    }




     function getContadorT2($ip){
     //	$link="http://192.168.63.12/hp/device/info_configuration.html";
     	//$url = urldecode($link);

     	$contexto = stream_context_create(array('http'=>array('protocol_version'=>'1.1')));
     	$codigo=file_get_contents('http://192.168.63.12/info_configuration.html?tab=Home&menu=DevConfig', false, $contexto);
     // $codigo = file_get_contents('http://192.168.63.12');
//totais:</td> <td class="itemFont">152</td>
    
      //echo htmlentities($codigo);
      // CAPUTARANDO A QUANTIDADE DE COMENTARIOS
     $posicaoI = strpos($codigo, 'totais')+49;

      $posFINAL=$posicaoI;

      // LAÇO PARA DESCOBRIR A POSIÇAO QUE 
      // TERMINA O NUMERO DE COMENTARIOS
     

      while($codigo{$posFINAL} <>'<'){
        $posFINAL++;

      }
      
      //DEFINO O TAMANHO DA PALAVRA
      $posTAMANHO = $posFINAL-$posicaoI;


      // PEGO O NUMERO NA STRING CODIGO, USANDO A POSICAO INICIAL
      // E COLOCANDO O TAMANHO DEFINIDO ANTERIORMENTE
      $qtdImpressoes = substr($codigo,$posicaoI, $posTAMANHO); 
      
      return ($qtdImpressoes);
      print $qtdImpressoes;
    }



    function getPorcentagem($qtd, $limite){
    	$porc = ($qtd*100) / $limite;
    	return $porc;
    }
    */
?>
	
 
 <center>   

</center>


<div id="meio">

		<div id="myTabContent" class="tab-content">
	      <div role="tabpanel" class="tab-pane fade active in" id="impressoras" aria-labelledby="home-tab">


	      				
			    
			      <!-- Three columns of text below the carousel -->
			      <div id="segCubo">
			      	<?php  if($imp01->getStatus()==False){ 
			      		print '<div class="cubo" style="background-color: #6b6b6b; color: #000; opacity: 0.5;">';
			      	}else{
			      		print '<div class="cubo">';
			      	}
			      	?>
			 
			      		<div id="segIntoCubo">
			      		<center>
			      		<div style="width: 200px; height: 120px;">
				      		<div id="segTextCubo">
				      				<b>Local:</b> Gabinete	<br>		 
				      				<b>Responsável:</b> Izabelli<br>
				      				
				      				<b>Tipo:</b> Preto e Branco <br>

				      				<b>Modelo:</b> <?php
				      				print($imp01->getModelo());
				      				?> <br>

				      				<b>Número de Série:</b> <?php
				      				print($imp01->getNum_serie());
				      				?> <br>

				      				<b>Contador Geral:</b> <?php
				      				print($imp01->getCont_geral());
				      				?> <br>
	

				      				
				      		</div>
				      		<img id="imgImp"src="img/printer.png" class="imgImp">

							
				      		<?php  if($imp01->getStatus()==False){ 
				      			//print '<img id="imgImp" class="imgImp" src="img/block.png" width="64" height="64" style="opacity: 0.5; margin-top: 10px;">';
					      		
					      	}else{
					      		//print '<img id="imgImp"src="img/printer.png" class="imgImp">';
					      	}
					      	?>


				      		

				      	</div><br>
				      		<h4>IMP_PAAS_01</h4>

			      		<div class="progress">
			      			<div id="barra" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:<?php print intval($porc1);?>%">
			      			
			      			<?php 
			      					
			      					if($porc1 >= 40){
			      						print('<span style="color:#fff;">'.intval($porc1).'%<span>

			      								</div>

			      							</div>
			      							');
			      					}else{
			      						print('</div>
			      								<div style="width: 200px; height:20px; z-index: 200; position: absolute;"><span style="color:#000; ">'.intval($porc1).'%<span></div>

			      							</div>
			      								
			      							');
			      					}

			      				?>	
			      			

			      			
			      		<p><?php  print($imp01->getCont_geral()-$imp01->getCont_atual()." / ".$imp_01_limite); ?></p>

			      		<!-- HTML to write -->
						


			      		</center>
			      		</div>
			      		
			      		
			      	</div><!-- /.span4 -->








			      
			      	<?php  if($imp02->getStatus()==False){ 
			      		print '<div class="cubo" style="background-color: #6b6b6b; color: #000; opacity: 0.5;">';
			      	}else{
			      		print '<div class="cubo">';
			      	}
			      	?>
			      		<div id="segIntoCubo">
			      		<center>
				      		<div style="width: 200px; height: 120px;">
				      		<div id="segTextCubo">
				      				<b>Local:</b> Protocolo	<br>		 
				      				<b>Responsável:</b> Júlio<br>
				      				
				      				<b>Tipo:</b> Colorida <br>

				      				<b>Modelo:</b> <?php
				      				print($imp02->getModelo());
				      				?> <br>

				      				<b>Número de Série:</b> <?php
				      				print($imp02->getNum_serie());
				      				?> <br>

				      				<b>Contador Geral:</b> <?php
				      				print($imp02->getCont_geral());
				      				?> <br>
				      		</div>
				      		<img id="imgImp"src="img/printer.png" class="imgImp">

				      	</div><br>
				      		<h4>IMP_PAAS_02</h4>

			      		<div class="progress">
			      			<div id="barra" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:<?php print intval($porc2);?>%">
			      				
			      				<?php 

			      					if($porc2 >= 40){
			      						print('<span style="color:#fff;">'.intval($porc2).'%<span>

			      								</div>

			      							</div>
			      							');
			      					}else{
			      						print('</div>
			      								<div style="width: 200px; height:20px; z-index: 200; position: absolute;"><span style="color:#000; ">'.intval($porc2).'%<span></div>

			      							</div>
			      								
			      							');
			      					}

			      				?>
			      				
			      			
			      		<p><?php  print($imp02->getCont_geral()-$imp02->getCont_atual()." / ".$imp_02_limite); ?></p>

			      		<!-- HTML to write -->
						


			      		</center>
			      		</div>
			      		
			      		
			      	</div><!-- /.span4 -->

			      </div><!-- /.row -->





			      <?php  if($imp03->getStatus()==False){ 
			      		print '<div class="cubo" style="background-color: #6b6b6b; color: #000; opacity: 0.5;">';
			      	}else{
			      		print '<div class="cubo">';
			      	}
			      	?>
			      		<div id="segIntoCubo">
			      		<center>
				      		<div style="width: 200px; height: 120px;">
				      		<div id="segTextCubo">
				      				<b>Local:</b> Secretaria Acadêmica	<br>		 
				      				<b>Responsável:</b> Ronaldo<br>
				      				
				      				<b>Tipo:</b> Preto e Branco <br>

				      				<b>Modelo:</b> <?php
				      				print($imp03->getModelo());
				      				?> <br>

				      				<b>Número de Série:</b> <?php
				      				print($imp03->getNum_serie());
				      				?> <br>

				      				<b>Contador Geral:</b> <?php
				      				print($imp03->getCont_geral());
				      				?> <br>
				      		</div>
				      		<img id="imgImp"src="img/printer.png" class="imgImp">

				      	</div><br>
				      		<h4>IMP_PAAS_03</h4>

			      		<div class="progress">
			      			<div id="barra" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:<?php print intval($porc3);?>%">
			      				
			      			<?php 
			      					
			      					if($porc3 >= 40){
			      						print('<span style="color:#fff;">'.intval($porc3).'%<span>

			      								</div>

			      							</div>
			      							');
			      					}else{
			      						print('</div>
			      								<div style="width: 200px; height:20px; z-index: 200; position: absolute;"><span style="color:#000; ">'.intval($porc3).'%<span></div>

			      							</div>
			      								
			      							');
			      					}

			      				?>	
			      		<p><?php  print($imp03->getCont_geral()-$imp03->getCont_atual()." / ".$imp_03_limite); ?></p>

			      		<!-- HTML to write -->
						


			      		</center>
			      		</div>
			      		
			      	
			      	</div><!-- /.span4 -->




			      	<?php  if($imp04->getStatus()==False){ 
			      		print '<div class="cubo" style="background-color: #6b6b6b; color: #000; opacity: 0.5;">';
			      	}else{
			      		print '<div class="cubo">';
			      	}
			      	?>
			      		<div id="segIntoCubo">
			      		<center>
				      		<div style="width: 200px; height: 120px;">
				      		<div id="segTextCubo">
				      				<b>Local:</b> Diretoria de Administração	<br>		 
				      				<b>Responsável:</b> Franssuelio<br>
				      				
				      				<b>Tipo:</b> Preto e Branco <br>

				      				<b>Modelo:</b> <?php
				      				print($imp04->getModelo());
				      				?> <br>

				      				<b>Número de Série:</b> <?php
				      				print($imp04->getNum_serie());
				      				?> <br>

				      				<b>Contador Geral:</b> <?php
				      				print($imp04->getCont_geral());
				      				?> <br>
				      		</div>
				      		<img id="imgImp"src="img/printer.png" class="imgImp">

				      	</div><br>
				      		<h4>IMP_PAAS_04</h4>

			      		<div class="progress">
			      			<div id="barra" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:<?php print intval($porc4);?>%">
			      				
			      			<?php 
			      					
			      					if($porc4 >= 40){
			      						print('<span style="color:#fff;">'.intval($porc4).'%<span>

			      								</div>

			      							</div>
			      							');
			      					}else{
			      						print('</div>
			      								<div style="width: 200px; height:20px; z-index: 200; position: absolute;"><span style="color:#000; ">'.intval($porc4).'%<span></div>

			      							</div>
			      								
			      							');
			      					}

			      				?>	
			      		<p><?php  print($imp04->getCont_geral()-$imp04->getCont_atual()." / ".$imp_04_limite); ?></p>

			      		<!-- HTML to write -->
						


			      		</center>
			      		</div>
			      		
			      		
			      	</div><!-- /.span4 -->




			      	<?php  if($imp05->getStatus()==False){ 
			      		print '<div class="cubo" style="background-color: #6b6b6b; color: #000; opacity: 0.5;">';
			      	}else{
			      		print '<div class="cubo">';
			      	}
			      	?>
			      		<div id="segIntoCubo">
			      		<center>
				      		<div style="width: 200px; height: 120px;">
				      		<div id="segTextCubo">
				      				<b>Local:</b> Administração Escolar	<br>		 
				      				<b>Responsável:</b> Francisco<br>
				      				
				      				<b>Tipo:</b> Preto e Branco <br>

				      				<b>Modelo:</b> <?php
				      				print($imp05->getModelo());
				      				?> <br>

				      				<b>Número de Série:</b> <?php
				      				print($imp05->getNum_serie());
				      				?> <br>

				      				<b>Contador Geral:</b> <?php
				      				print($imp05->getCont_geral());
				      				?> <br>
				      		</div>
				      		<img id="imgImp"src="img/printer.png" class="imgImp">

				      	</div><br>
				      		<h4>IMP_PAAS_05</h4>

			      		<div class="progress">
			      			<div id="barra" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:<?php print intval($porc5);?>%">
			      				
			      			<?php 
			      					
			      					if($porc5 >= 40){
			      						print('<span style="color:#fff;">'.intval($porc5).'%<span>

			      								</div>

			      							</div>
			      							');
			      					}else{
			      						print('</div>
			      								<div style="width: 200px; height:20px; z-index: 200; position: absolute;"><span style="color:#000; ">'.intval($porc5).'%<span></div>

			      							</div>
			      								
			      							');
			      					}

			      				?>	
			      		<p><?php  print($imp05->getCont_geral()-$imp05->getCont_atual()." / ".$imp_05_limite); ?></p>

			      		<!-- HTML to write -->
						


			      		</center>
			      		</div>
			      		
			      		
			      	</div><!-- /.span4 -->




			      	 
			      	<?php  if($imp06->getStatus()==False){ 
			      		print '<div class="cubo" style="background-color: #6b6b6b; color: #000; opacity: 0.5;">';
			      	}else{
			      		print '<div class="cubo">';
			      	}
			      	?>
			      		<div id="segIntoCubo">
			      		<center>
				      		<div style="width: 200px; height: 120px;">
				      		<div id="segTextCubo">
				      				<b>Local:</b> Administração Escolar	<br>		 
				      				<b>Responsável:</b> Francisco<br>
				      				
				      				<b>Tipo:</b> Preto e Branco <br>

				      				<b>Modelo:</b> <?php
				      				print($imp06->getModelo());
				      				?> <br>

				      				<b>Número de Série:</b> <?php
				      				print($imp06->getNum_serie());
				      				?> <br>

				      				<b>Contador Geral:</b> <?php
				      				print($imp06->getCont_geral());
				      				?> <br>
				      		</div>
				      		<img id="imgImp"src="img/printer.png" class="imgImp">

				      	</div><br>
				      		<h4>IMP_PAAS_06</h4>

			      		<div class="progress">
			      			<div id="barra" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:<?php print intval($porc6);?>%">
			      				
			      			<?php 
			      					
			      					if($porc6 >= 40){
			      						print('<span style="color:#fff;">'.intval($porc6).'%<span>

			      								</div>

			      							</div>
			      							');
			      					}else{
			      						print('</div>
			      								<div style="width: 200px; height:20px; z-index: 200; position: absolute;"><span style="color:#000; ">'.intval($porc6).'%<span></div>

			      							</div>
			      								
			      							');
			      					}

			      				?>	
			      		<p><?php  print($imp06->getCont_geral()-$imp06->getCont_atual()." / ".$imp_06_limite); ?></p>

			      		<!-- HTML to write -->
						


			      		</center>
			      		</div>
			      		
			      		
			      	</div><!-- /.span4 -->


	     </div>
	     


	     
	     

	      <?php 
	       if(isset($_SESSION['controle'])){
	           //fazer uma fução aki depois
	           if( $_SESSION['controle']=1){
	             include ("pagina_medicao.php");
	           }
	       }
	      ?>


	      <div role="tabpanel" class="tab-pane fade" id="ajuda" aria-labelledby="dropdown1-tab">
	        <br><center><h2>Em breve</h2></center>
	      </div>
	      <div role="tabpanel" class="tab-pane fade" id="sobrenos" aria-labelledby="dropdown2-tab">
	        <br><center><h2>Em breve</h2></center>
	      </div>
	    </div>
	</div>
	<?php
	include ("template/baixo.php");
	?>