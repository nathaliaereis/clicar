<?php
include ("valida_session.php");

$idVeiculo		= $_SESSION['idVeiculo'];

if (isset($_FILES['arquivo1']))
{

			set_time_limit(0);
			include("config_uploadanuncio.php");
			
			$nome_arquivo		= $idVeiculo."_1.jpg"; //$_FILES['arquivo']['name'];
			
			$tamanho_arquivo	= $_FILES['arquivo1']['size']; 
			
			$arquivo_temporario	= $_FILES['arquivo1']['tmp_name'];
			
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
				else{
				die("Selecione o arquivo a ser enviado");
				
				
			}
}

	if(isset($_FILES['arquivo2'])){
		set_time_limit(0);
include("config_uploadanuncio.php");

$nome_arquivo		= $idVeiculo."_2.jpg"; //$_FILES['arquivo']['name'];

$tamanho_arquivo	= $_FILES['arquivo2']['size']; 

$arquivo_temporario	= $_FILES['arquivo2']['tmp_name'];

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
	else{
	die("Selecione o arquivo a ser enviado");
	
	}	
	}
			
		if(isset($_FILES['arquivo3'])){ 
	set_time_limit(0);
include("config_uploadanuncio.php");

$nome_arquivo		= $idVeiculo."_3.jpg"; //$_FILES['arquivo']['name'];

$tamanho_arquivo	= $_FILES['arquivo3']['size']; 

$arquivo_temporario	= $_FILES['arquivo3']['tmp_name'];

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
	else{
	die("Selecione o arquivo a ser enviado");
	

				
		}						
		}
		
	if(isset($_FILES['arquivo4'])){
	set_time_limit(0);
include("config_uploadanuncio.php");

$nome_arquivo		= $idVeiculo."_4.jpg"; //$_FILES['arquivo']['name'];

$tamanho_arquivo	= $_FILES['arquivo4']['size']; 

$arquivo_temporario	= $_FILES['arquivo4']['tmp_name'];

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
	else{
	die("Selecione o arquivo a ser enviado");
	
								
	}
}

header('Location:addfotoanuncio.php');
?>

