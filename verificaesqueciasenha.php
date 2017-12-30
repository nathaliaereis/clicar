<?php
if(isset($_POST['email'])){
	$email = $_POST['email'];
}else{ 
	$email = "";
}

if(isset($_POST['cpf'])){
	$cpf = $_POST['cpf'];
}else{ 
	$cpf = "";
}

include ('includes/conexao.php');

$sql =  "SELECT * FROM cad_login where emailCliente = '$email' and cpfCliente = '$cpf'";
$tb_Cliente = mysql_query($sql);
$linhas=mysql_num_rows($tb_Cliente);
for($i=0;$i<$linhas;$i++){
$dados =mysql_fetch_array($tb_Cliente);

			$login		= $dados["emailCliente"];
			$senha		= $dados["senhaCliente"];
}

	
if(isset($login)){
	$login = $login;
}else{ 
	echo "<script> alert('Este usuario não existe'); window.location.href='login.php';</script>";
}


if(isset($senha)){
	$senha = $senha;
echo "<script> alert('Usuario: $login \\n \\n Senha: $senha'); window.location.href='login.php';</script>";
}else{ 
	echo "<script> alert('Este usuario não existe'); window.location.href='login.php';</script>";
}

?>




