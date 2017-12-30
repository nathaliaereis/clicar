<?php
$idCliente		= $_GET["idCliente"];

set_time_limit(0);
include("config_upload.php");
$nome_arquivo		= $idCliente . ".jpg"; //$_FILES['arquivo']['name'];

$tamanho_arquivo	= $_FILES['arquivo']['size'];

$arquivo_temporario	= $_FILES['arquivo']['tmp_name'];

if(!empty($nome_arquivo))
{
	if($sobrescrever == "nao" && file_exists("$caminho_absoluto/$nome_arquivo"))
	die("Arquivo já existe.");
	if(($limitar_tamanho == "sim") && ($tamanho_arquivo > $tamanho_bytes))
	die ("Arquivo deve ter no máximo $tamanho_bytes.");
	$ext = strrchr($nome_arquivo,'.');
	if($limitar_ext == "sim" && !in_array($ext, $extensoes_validas))
	die("Extensão de arquivo inválida para upload.");
	move_uploaded_file($arquivo_temporario, "$caminho_absoluto/$nome_arquivo");
}
	else
	die("Selecione o arquivo a ser enviado");
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
            
             <div id="box-login">
              <?php
              include("includes/menu-login.php");
              ?>
              </div>
		</div>
        
    
       
        <div id="box-conteudo2">
         <?php
include ("includes/conexao.php");
			$nomeCliente		= $_POST["nomeCliente"];
			$emailCliente	= $_POST["emailCliente"];
			$cpfCliente		= $_POST["cpfCliente"];
			$diaCliente		= $_POST["diaCliente"];
			$mesCliente		= $_POST["mesCliente"];
			$anoCliente		= $_POST["anoCliente"];
			if (isset($_POST["sexoCliente"])){$sexoCliente = $_POST["sexoCliente"];}else{$sexoCliente ="";}
			$telefoneCliente		= $_POST["telefoneCliente"];
			$celularCliente		= $_POST["celularCliente"];
			$enderecoCliente		= $_POST["enderecoCliente"];
			$numeroendCliente		= $_POST["numeroendCliente"];
			$complementoCliente		= $_POST["complementoCliente"];
			$bairroCliente		= $_POST["bairroCliente"];
			$cepCliente		= $_POST["cepCliente"];
			$estadoCliente		= $_POST["estadoCliente"];
			$senhaCliente		= $_POST["senhaCliente"];
			$sql = "update cad_login set nomeCliente='$nomeCliente',emailCliente='$emailCliente',cpfCliente='$cpfCliente',diaCliente='$diaCliente',mesCliente='$mesCliente',anoCliente='$anoCliente',sexoCliente='$sexoCliente',telefoneCliente='$telefoneCliente',celularCliente='$celularCliente',enderecoCliente='$enderecoCliente',numeroendCliente='$numeroendCliente',complementoCliente='$complementoCliente',bairroCliente='$bairroCliente',cepCliente='$cepCliente',estadoCliente='$estadoCliente',senhaCliente='$senhaCliente' where emailCliente = '$emailCliente'";
			$gravar = mysql_query($sql) or die("Aviso! ==> " .mysql_error());
						echo "<script> alert('Seu perfil foi atualizado com sucesso'); window.location.href='perfil.php';</script>"; 
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
      
</div>

		<div id="clear"> </div>
    	<div id="box-rodape">
         
        <?php 
		include ("includes/rodape.php");
		?>
        </div>
                    
    
</body>
</html>
