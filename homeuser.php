<?php
include ("valida_session.php");
if(isset($_SESSION['idVeiculo'])){
	$idVeiculo = $_SESSION['idVeiculo'];
}else{ 
	$idVeiculo = "";
}


header("Cache-Control: no-cache, must-revalidate");

function verifica_img($idVeiculo, $numeroimagem){
if(file_exists("imagens/carros/" . $idVeiculo . "_". $numeroimagem .".jpg")){
echo $idVeiculo;	
}else{
echo 'padraocarro';
}
}
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
<link href="css/menu-user.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/interface.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</head>
<?php
include("includes/conexao.php");
?>
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
        
      
    		<div id="box-central">
         <div style="overflow:auto; color:#000000;  width:750px; height:450px; line-height:100%" id="box-conteudo3"> <?php
					include("includes/conexao.php");
         ?>
    
      <?php
								
        $emailCliente = $_SESSION['usuario'];
        $sql = mysql_query("select * from cad_login where emailCliente = '$emailCliente' ");
        $dados2 = mysql_fetch_row($sql);
        $idCliente  = $dados2[0];
									
		$sql = "SELECT * FROM cad_veiculo where idCliente = '$idCliente'";
		$tb_Contatos = mysql_query($sql);
		$linhas=mysql_num_rows($tb_Contatos);
		for($i=0;$i<$linhas;$i++){
		$dados =mysql_fetch_array($tb_Contatos);
			
			$idVeiculo  		= $dados["idVeiculo"];
			$marcaVeiculo		= $dados["marcaVeiculo"];
			$modeloVeiculo		= $dados["modeloVeiculo"];
			$anoVeiculo			= $dados["anoVeiculo"];
			if (isset($dados["combVeiculo"])){$combVeiculo = $dados["combVeiculo"];}else{$combVeiculo ="";}
			$corVeiculo			= $dados["corVeiculo"];
			$kmVeiculo			= $dados["kmVeiculo"];
			$precoVeiculo		= $dados["precoVeiculo"];
			$formapagaVeiculo	= $dados["formapagaVeiculo"];
			$opcionaisVeiculo	= $dados["opcionaisVeiculo"];
			$placaVeiculo		= $dados["placaVeiculo"];
			$dataAnuncio 		= $dados["dataAnuncio"];
			
			
		  ?>
                     
                    	 		
 		<div class="quadradinhoanuncio2">
                         
        <div class="fotoquadradinho2">
			  <a href="anuncio.php?idVeiculo=<?php echo $idVeiculo?>">	<img src="imagens/carros/<?php verifica_img($idVeiculo, 1);?>_1.jpg" width="150" height="100" /></a>
             </div>
                
            <?php echo $marcaVeiculo ?>  <br>
 	        Placa:<td> <?php echo $placaVeiculo ?> </td> <br>
          
            <a href="excluirAnuncio.php?idVeiculo=<?php echo $idVeiculo?>" class="classe4"> <img src="imagens/1381004548_101.png"/> Excluir </a> 
                           
				</div>
 		
               <?php } ?>
               
               </div>
                      
        		<div id="box-linksuser">
                   <div id="box-links3">
                        
       					 <?php 
						include ("includes/link3.php");
						?>
            		</div>
                        <div id="box-fotouser">
                    	</div>
       			 </div>

           
             <div id="box-publi4">
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
       </div>
    
</body>
</html>