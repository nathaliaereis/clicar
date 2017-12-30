<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CLICAR - Clique aqui e encontre seu carro</title>
<link href="css/estilos.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/pseudo-classes.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/menu.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/links.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
   <div id="box-tudo">
    	<div id="box-top">
        	<div id="box-logo">
      			
      		</div>
            <div id="box-pesquisa">
				<?php
			   include("includes/menuPesquisa.php");
			   ?>
			</div>
			
            <div id="box-busca">
            </div>
        </div>
    	<div id="box-menu">
			<div id="menu">
						
				<?php
				include ("includes/menu.php");
				?>
			</div>
            
            </div>  
       
        <div id="box-conteudo2">
         <?php
include ("includes/conexao.php");
	
			$nomeCliente		= $_SESSION['nomeCliente'];
			$emailCliente		= $_SESSION['emailCliente'];
			$cpfCliente			= $_SESSION['cpfCliente'];
			$diaCliente			= $_SESSION['diaCliente'];
			$mesCliente			= $_SESSION['mesCliente'];
			$anoCliente			= $_SESSION['anoCliente'];
			if (isset($_SESSION['sexoCliente'])){$sexoCliente = $_SESSION['sexoCliente'];}else{$sexoCliente ="";}
			$telefoneCliente	= $_SESSION['telefoneCliente'];
			$celularCliente		= $_SESSION['celularCliente'];
			$enderecoCliente	= $_SESSION['enderecoCliente'];
			$numeroendCliente	= $_SESSION['numeroendCliente'];
			$complementoCliente	= $_SESSION['complementoCliente'];
			$bairroCliente		= $_SESSION['bairroCliente'];
			$cepCliente			= $_SESSION['cepCliente'];
			$estadoCliente		= $_SESSION['estadoCliente'];
			$senhaCliente		= $_SESSION['senhaCliente'];
			
			$sql = "insert into cad_login(nomeCliente,emailCliente,cpfCliente,diaCliente,mesCliente,anoCliente,sexoCliente,telefoneCliente,celularCliente,enderecoCliente,numeroendCliente,complementoCliente,bairroCliente,cepCliente,estadoCliente,senhaCliente) values('$nomeCliente','$emailCliente','$cpfCliente','$diaCliente','$mesCliente','$anoCliente','$sexoCliente','$telefoneCliente','$celularCliente','$enderecoCliente','$numeroendCliente','$complementoCliente','$bairroCliente','$cepCliente','$estadoCliente','$senhaCliente')";
			$gravar = mysql_query($sql);
						echo "<script> alert('Seu cadastro foi efetuado com sucesso'); window.location.href='index.php';</script>"; 
	?>
        
        </div>
     	<div id="box-links">
			<div class="linkregra">
		<?php 
		include ("includes/link1.php");
		?>
			</div>
		</div>
		
			<div id="box-links2">
            	<div class="link2">
		<?php 
		include ("includes/link2.php");
		?>
			</div>
		</div>
      
		<div id="clear"> </div>
    	<div id="box-rodape">
         
        <?php 
		include ("includes/rodape.php");
		?>
        </div>
                    
    
</body>
</html>
