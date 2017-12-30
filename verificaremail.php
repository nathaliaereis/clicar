<?php
session_start();
?>
<?php
   include ("includes/conexao.php");
			
			$_SESSION['nomeCliente']	    = $_POST["nomeCliente"];	
			$_SESSION['emailCliente']		= $_POST["emailCliente"];
			$_SESSION['cpfCliente']			= $_POST["cpfCliente"];
			$_SESSION['diaCliente']			= $_POST["diaCliente"];
			$_SESSION['mesCliente']			= $_POST["mesCliente"];
			$_SESSION['anoCliente']			= $_POST["anoCliente"];
			if (isset($_POST['sexoCliente'])){$_SESSION['sexoCliente'] = $_POST['sexoCliente'];}else{$_SESSION['sexoCliente'] ="";}
			$_SESSION['telefoneCliente']	= $_POST["telefoneCliente"];
			$_SESSION['celularCliente']		= $_POST["celularCliente"];
			$_SESSION['enderecoCliente']	= $_POST["enderecoCliente"];
			$_SESSION['numeroendCliente']	= $_POST["numeroendCliente"];
			$_SESSION['complementoCliente']	= $_POST["complementoCliente"];
			$_SESSION['bairroCliente']		= $_POST["bairroCliente"];
			$_SESSION['cepCliente']			= $_POST["cepCliente"];
			$_SESSION['estadoCliente']		= $_POST["estadoCliente"];
			$_SESSION['senhaCliente']		= $_POST["senhaCliente"];
			
			$email = $_POST["emailCliente"];


   $sql = mysql_query("SELECT * FROM cad_login WHERE emailCliente = '$email'");

   if (mysql_num_rows($sql) > 0) {
						echo "<script> alert('Email Já Cadastrado'); window.location.href='cadastrologin.php';</script>"; 
   } else {
      mysql_query("INSERT INTO clientes (email) VALUES ('$emailCliente')");
 						echo "<script> window.location.href='gravadados.php';</script>"; 
   }
?>