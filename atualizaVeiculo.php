<?php
include ("valida_session.php");
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

				$_SESSION['marcaVeiculo'] 		= 		$_POST['marcaVeiculo'];
				$_SESSION['modeloVeiculo']		=		$_POST['modeloVeiculo'];
				$_SESSION['anoVeiculo']			=		$_POST['anoVeiculo'];
				if (isset($_POST['combVeiculo'])){$_SESSION['combVeiculo'] = $_POST['combVeiculo'];}else{$_SESSION['combVeiculo'] ="";}
				$_SESSION['corVeiculo']			= 		$_POST['corVeiculo'];
				$_SESSION['kmVeiculo']			=		$_POST['kmVeiculo'];
				$_SESSION['precoVeiculo']		=		$_POST['precoVeiculo'];
				$_SESSION['formapagaVeiculo']	=		$_POST['formapagaVeiculo'];
				$_SESSION['opcionaisVeiculo']	=		$_POST['opcionaisVeiculo'];
				$_SESSION['placaVeiculo']		=		$_POST['placaVeiculo'];

						echo "<script> alert('Seu anuncio foi atualizado com sucesso!'); window.location.href='cadastroanuncio3.php';</script>"; 
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
