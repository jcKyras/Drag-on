<html><head>
<meta charset="UTF-8">

<?php
include ("classes/impressora.php");
include("control_bd.php");
session_start();


if(!isset($_SESSION["usuario"])) 
{ 
// Usuário não logado! Redireciona para a página de login 

header("Location: index2.php");


} 


?>
<style>


body{
	width:700px;
	margin:auto;
	font-family:'Arial';
	background-image:url(/static/contratos/img/footer.png);
    background-repeat:no-repeat;
    background-position:bottom right;
    line-height: 1.4em;
    -webkit-print-color-adjust: exact;
    -margin-top: 3cm;
}



div.table-title {
   display: block;
  margin: auto;
  max-width: 800px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 10px;
   -font-weight: 200;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  -border-radius:3px;
  border-collapse: collapse;
  height: 200px;
  margin: auto;
  max-width: 800px;
  padding:5px;
  width: 100%;
  -box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  -animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  -border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:13px;
  font-weight: 20;
  padding:10px;
  text-align:center;
  -text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}


  



 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 



 
td {
  background:#FFFFFF;
  padding:10px;
  text-align:center;
  vertical-align:middle;
  font-weight:300;
  font-size:15px;
 - text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}



</style>

<?php
$interessado = "Maq-Larem Máquinas Moveis e Equipamenos LTDA ME";
$usuario_nome = "Marco Antonio Silva e Araújo";
$usuario_matricula = "1953287";
$dia = date("d");   
$mes = date("m");
switch ($mes) {
	case '1':
		$mes_escrito="janeiro";
	break;
	
	case '2':
		$mes_escrito="fevereiro";
	break;
	
	case '3':
		$mes_escrito="março";
	break;

	case '4':
		$mes_escrito="abril";
	break;

	case '5':
		$mes_escrito="maio";
	break;

	case '6':
		$mes_escrito="junho";
	break;

	case '7':
		$mes_escrito="julho";
	break;

	case '8':
		$mes_escrito="agosto";
	break;

	case '9':
		$mes_escrito="setembro";
	break;

	case '10':
		$mes_escrito="outubro";
	break;

	case '11':
		$mes_escrito="novembro";
	break;

	case '12':
		$mes_escrito="dezembro";
	break;
}
$ano = date("Y");

$periodo="janeiro";
$impressora_1_contador_geral=45;
$impressora_1_contador_atual=10;
$impressora_1_nome="imp_paas_01";
$impressora_1_modelo="";
$impressora_1_numero_serie="";


?>
<link rel="stylesheet" type="text/css" media="print" />
</head><body>
	
	<font size="2px" style="float: right;">Gerado automaticamente pelo Sistema de Gerenciamento de Impressoras Drag.on
	</font><br>

	<h1 align="center" style="margin-top: 90px;">Declaração</h1>
	<p align="right">PARELHAS / RN, <?php print $dia." de ".$mes_escrito." de ".$ano?></p>
	<br>
	
	<p><b>Interessado:</b> <?php print $interessado; ?></p>
	<p><b>Assunto:</b> Contador das impressoras</p>
	<br>
	<p style="margin:30px">Senhor(a) Chefe do Setor responsável,</p>

	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estamos encaminhando os contadores das impressoras do IFRN - Campus Avançado Parelhas conforme solicitado.</p>
	<br>

	<table class="table-fill">
		<thead>
			<tr>
				<th class="text-left">Nome</th>
				<th class="text-left">Número de Série</th>
				<th class="text-left">Contador</th>
			
			</tr>
		</thead>
		<tbody class="table-hover">
			
				<?php 

				for($i=1;$i<=6;$i++){
					$imp=buscarDadosImp($i);
					print'<tr>';
					print '<td class="text-left">'.$imp->getNome().'</td>';
					print '<td class="text-left">'.$imp->getNum_serie().'</td>';
					print '<td class="text-left">'.$imp->getCont_geral().'</td>';
					print'</tr>';
				}

				?>
			
			
		</tbody>
	</table>
	
	
	<p style="margin:40px">Atenciosamente,</p><br<br<br<br <p="" align="center">
		<b>
		______________________________________________<br>
		<?php print $usuario_nome?><br>
		<?php print $usuario_matricula?><br>
		Fiscal do Contrato<br>
		</b>
	<p></p>
	
	<center><font size="2px">Rua Dr. Mauro Duarte, S/N, José Clóvis<br>
		Instituto Federal do Rio Grande do Norte<br>
		Parelhas/RN - 59360-000 
	</font></center>
	<br><br><br>
</br<br<br<br></body></html>