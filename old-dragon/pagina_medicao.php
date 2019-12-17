
<?php
if(!isset($_SESSION["usuario"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header("Location: index2.php");
}





?>

<script language="JavaScript">
		function abriJanelaImpressao() {
			window.open('declaracao.php', 'janela', "status=0, width=800, height=768, scrollbars=1,resizable=1")
		}


		function resetarContadores(){
			r=confirm('Realmente quer resetar os contadores das impressoras?');
			if(r==true){
				$("#d").load("medicao.php", function() {});		
						//$().load("testealert.php", function() {});
				alert("Contadores resetados com sucesso!");	
				window.location.reload();			
			}
		}
		//alert(r);
</script>



<div role="tabpanel" class="tab-pane fade" id="pagina_medicao" aria-labelledby="profile-tab">
	<div id="seg_pag_medicao">
		<h1>Medição de impressões</h1>
		<spam class="btn" onclick="javascript:abriJanelaImpressao();">IMPRIMIR RELATÓRIO</spam>
		<br>
				<spam class="btn" onclick="resetarContadores();">RESETAR CONTADORES</spam>
			
				<script language="JavaScript">

					
					
				</script>
<br>
				<div id="d" sytle="display: hidden;"></div>

	</div>
</div>