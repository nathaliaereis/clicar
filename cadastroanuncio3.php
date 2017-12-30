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
<link href="css/pesquisas.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="validar2.js"></script>
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
    	<div id="box-central">
       
        
         <div style="overflow:auto; color:#000000;  width:900px; height:450px; line-height:100%" id="box-conteudo">  
          <h2 align="center" class="h2">Confirme Seus Dados</h2>
          		 	<div class="marcadores">
           
                         <div class="marcadorespag"> 
                         <img src="imagens/bolinha.png" />
                                    </div>
                         <div class="marcadorespag"> 
                           <img src="imagens/bolinha9.png">
                         
                                    </div>
                         <div class="marcadorespag"> 
                         <img src="imagens/bolinha4.png" />
                                   </div>
                        <div class="marcadorespag">
                        <img src="imagens/bolinha6.png" /> 
                                    </div>
           			 </div>   
          <br />
          <br />
           <?php
					include("includes/conexao.php");
					$marcaVeiculo =	$_SESSION['marcaVeiculo'];
					$modeloVeiculo = $_SESSION['modeloVeiculo'];
					$anoVeiculo = $_SESSION['anoVeiculo'];
					$combVeiculo = $_SESSION['combVeiculo'];
					$corVeiculo = $_SESSION['corVeiculo'];
					$kmVeiculo = $_SESSION['kmVeiculo'];
					$precoVeiculo = $_SESSION['precoVeiculo'];
					$formapagaVeiculo = $_SESSION['formapagaVeiculo'];
					$opcionaisVeiculo = $_SESSION['opcionaisVeiculo'];
					$placaVeiculo = $_SESSION['placaVeiculo'];

  ?>
            
            <P>Marca do Veiculo:<td> <?php echo $marcaVeiculo ?> </td> </P>
            <P>Modelo:<td> <?php echo $modeloVeiculo ?> </td> </P>
            <P>Ano:<td> <?php echo $anoVeiculo ?> </td> </P>
            <P>Combustivel :<td> <?php echo $combVeiculo ?> </td> </P>
             <P>Cor:<td> <?php echo $corVeiculo ?> </td> </P>
              <P>Quilometragem(km):<td> <?php echo $kmVeiculo ?> </td> </P>
               <P>Preço:<td> <?php echo $precoVeiculo ?> </td> </P>
                <P>Forma de Pagamento:<td> <?php echo $formapagaVeiculo ?> </td> </P>
                 <P>Opcionais:<td> <?php echo $opcionaisVeiculo ?> </td> </P>
                 <P>Placa:<td> <?php echo $placaVeiculo ?> </td> </P>
            
      
        <br />
			
  <form name="formulario3" action="cadastroanuncio4.php" method="POST" class="cadastro">    
          
       <input type="submit" value="Proxima Etapa"/> <br />
        </form>
         <p><form name="formulario4" action="editaranuncio.php" method="POST"  class="cadastro">    
          
        <input type="submit" value="Editar Anuncio">
        </form>
        </div>
            
      </div>
      
        <div id="box-publi5">
       
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
