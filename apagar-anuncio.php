<?php
include ("valida_session.php");
if(isset($_SESSION['idVeiculo'])){
	$idVeiculo = $_SESSION['idVeiculo'];
}else{ 
	$idVeiculo = "";
}
include("includes/conexao.php");
mysql_query("delete from cad_veiculo where idVeiculo = $idVeiculo") or die("Não foi possivel excluir o registro. Erro: " .mysql_error()) ;
echo "<script> alert('O Anúncio foi apagado com Sucesso'); window.location.href='homeuser.php';</script>"; 
?>


