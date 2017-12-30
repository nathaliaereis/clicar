<?php
session_start();
if(isset($_SESSION['usuario']))
	$login_user = $_SESSION['usuario'];
	
if(isset($_SESSION["senha"]))
	$senha_user = $_SESSION["senha"];
	
if(!(empty($login_user) or empty($senha_user)))
{
	include("includes/conexao.php");
	$res = mysql_query("select * from cad_login where emailCliente = '$login_user' and senhaCliente='$senha_user'");
	$linha = mysql_num_rows($res);
	if($linha==0)
	{
		session_destroy();
		echo "Você não efetuou o login!";
		exit;
	}
}
else
{
		header("Location: login.php");
		exit;
}
mysql_close($conexao);
?>