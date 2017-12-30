<?php
session_start();
include("includes/conexao.php");
if(isset($_GET["pesquisasimples"])){
	$pesquisasimples=$_GET["pesquisasimples"];
} else {
	$pesquisasimples="";
}

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
            
        <div style="overflow:auto; color:#000000;  width:900px; height:495px; line-height:100%" id="box-conteudo"> 
            	<div id="resultadopesquisa">
                <?php 
				
                $sqlpesquisa="SELECT * FROM cad_veiculo WHERE modeloVeiculo like '%$pesquisasimples%' or anoVeiculo like '%$pesquisasimples%' or corVeiculo like '%$pesquisasimples%' or precoVeiculo like '%$pesquisasimples%' or opcionaisVeiculo like '%$pesquisasimples%' or combVeiculo like '%$pesquisasimples%' or marcaVeiculo like '%$pesquisasimples%'";
				
                $rscarros=mysql_query($sqlpesquisa) or die ("ocorreu um erro ao realizar a pesquisa. " . mysql_error());
				$linhas=mysql_num_rows($rscarros);
					for($i=0;$i<$linhas;$i++){
						$dados =mysql_fetch_array($rscarros);
						$idVeiculo 		=$dados["idVeiculo"];
						$nomecarro		=$dados["modeloVeiculo"];
						$anocarro		=$dados["anoVeiculo"];
						$corcarro		=$dados["corVeiculo"];
						$precocarro		=$dados["precoVeiculo"];
						$opcionaiscarro	=$dados["opcionaisVeiculo"];
						$combcarro		=$dados["combVeiculo"];
						$marcacarro		=$dados["marcaVeiculo"]
				?>
                       			<div class="quadradinhoanuncio2">
                                    <div class="fotoquadradinho2">
                               <a href="anuncio.php?idVeiculo=<?php echo $idVeiculo?>">  <img src="imagens/carros/<?php verifica_img($idVeiculo, 1);?>_1.jpg" width="148" height="100" /></a>
                                    </div>
                                  <?php echo $nomecarro; ?> <br />
                                   <?php echo "R$ $precocarro"; ?> <br />
                                   <?php echo $anocarro; ?> 
                                  
                                </div>       
                         
               <?php
				}
			   ?>         
                </div>
       		 </div>
        	<div id="box-publi5">
            </div>
            
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
      
</div>		<div id="clear"> </div>
    	<div id="box-rodape"> 
         <?php 
		include ("includes/rodape.php");
		?> 
        </div>                
</body>
</html>
