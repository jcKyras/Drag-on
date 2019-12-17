
<div role="tabpanel" class="tab-pane fade" id="controle_sineta" aria-labelledby="profile-tab">


<div id="seg_pag_teste">

<?php




if(isset($_POST['desativarbtn'])){
   setEstado(0);
}

if(isset($_POST['ativarbtn'])){
   setEstado(1);
}

$res = getEstado();
$estado = $res["estado"];

if($estado == 1){
	print '

		<h1>Ativo</h1><br>
		<form method="POST" action="index2.php">
   			<input type="submit" class="btn"  name="desativarbtn" value="Desativar toque">
 		</form>
	';
}else if($estado ==0){
		print '
		<h1>Desativado</h1><br>
		<form method="POST" action="index2.php">
   			<input type="submit" class="btn"  name="ativarbtn" value="Ativar toque">
 		</form>
	';
}

?>

 
</div>


</div>