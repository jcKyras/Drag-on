<?php
function buscarDadosImp($id){
	

$link=abrirConexao();
		$sql = "SELECT * FROM impressoes where id='1';";
 		$resultado = mysqli_query($link, $sql);

 		if (!$resultado) {
			$texto="Falha em buscar os dados";
			alertAviso($texto);
			return;
		}else{
			 $row = mysqli_fetch_array($resultado);

			 print $nome = $row["nome"];
			$id = $row["id"];
			$cont_geral = $row["cont_geral"];
			$cont_atual = $row["cont_atual"];
			$atualizacao_data = $row["atualizacao_data"];
			$atualizacao_hora = $row["atualizacao_hora"];
			$data_medicao = $row["data_medicao"];
		}

	fecharConexao($link);
}


function abrirConexao(){
		$link=mysqli_connect("127.0.0.1","root","","dragon1");
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

?>