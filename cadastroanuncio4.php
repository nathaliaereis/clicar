<?php
include ("valida_session.php");
include ("includes/conexao.php");
	
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
					
					$dataAnuncio = date("d/m/y");				
		
        $emailCliente = $_SESSION['usuario'];
        $sql = mysql_query("select * from cad_login where emailCliente = '$emailCliente' ");
        $dados = mysql_fetch_row($sql);
        $idCliente  = $dados[0];
		
		$_SESSION['placaVeiculo'] = $placaVeiculo;
						
			$sql = "insert into cad_veiculo(marcaVeiculo,modeloVeiculo,anoVeiculo,combVeiculo,corVeiculo,kmveiculo,precoVeiculo,formapagaVeiculo,opcionaisVeiculo,idCliente,placaVeiculo, dataAnuncio) values('$marcaVeiculo','$modeloVeiculo','$anoVeiculo','$combVeiculo','$corVeiculo','$kmVeiculo','$precoVeiculo','$formapagaVeiculo','$opcionaisVeiculo','$idCliente','$placaVeiculo','$dataAnuncio')";
			$gravar = mysql_query($sql) or die("Aviso! ==> " .mysql_error());
			
			$sql2 = mysql_query("select * from cad_veiculo where placaVeiculo = '$placaVeiculo'");
			$dados2 = mysql_fetch_array($sql2);
			$idVeiculo = $dados2['idVeiculo'];
			
			$_SESSION['idVeiculo'] = $idVeiculo;
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
          <h2 align="center" class="h2">Forma de Pagamento</h2>
          
          	 <div class="marcadores">
           
                          <div class="marcadorespag"> 
                         <img src="imagens/bolinha.png" />
                                    </div>
                         <div class="marcadorespag"> 
                           <img src="imagens/bolinha9.png">
                         
                                    </div>
                         <div class="marcadorespag"> 
                         <img src="imagens/bolinha10.png" />
                                   </div>
                        <div class="marcadorespag">
                        <img src="imagens/bolinha5.png" /> 
                                    </div>
           			 </div>   
          <br />
          <br />
          
          
  <form name="formulario2" action="addfotoanuncio.php" method="POST" onsubmit="return validar(this);" class="cadastro">
    
  <br />
  <br />
  <br />

    

   <br />
   <br />
   
   <br /> Assim que confirmado o pagamento,o anúncio estará disponivel em nosso site.

		<br />
        <br />
        
    
    
          
        <p><input type="submit" value="Enviar imagens" />
        </form>
            
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
