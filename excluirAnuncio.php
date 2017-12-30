<?php
include ("valida_session.php");
if(isset($_GET['idVeiculo'])){
	$idVeiculo = $_GET['idVeiculo'];
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
        </div>
      
    		<div id="box-central">
         		<div id="box-conteudo3"> 
         
                        <div id="box-excluir">
                                <div id="cxfoto-excluir">
                                
                                <img src="imagens/carros/<?php verifica_img($idVeiculo, 1);?>_1.jpg" width="150" height="100" />                                
                                </div>
                                <div id="cxinfo-excluir">
		<?php                                
        $sql = "SELECT * FROM cad_veiculo where idVeiculo = '$idVeiculo'";
		$tb_Veiculo = mysql_query($sql);
		$linhas=mysql_num_rows($tb_Veiculo);
		for($i=0;$i<$linhas;$i++){
		$dados =mysql_fetch_array($tb_Veiculo);

			$marcaVeiculo		= $dados["marcaVeiculo"];
			$modeloVeiculo		= $dados["modeloVeiculo"];
			$anoVeiculo			= $dados["anoVeiculo"];
			$placaVeiculo		= $dados["placaVeiculo"];
			$dataAnuncio 		= $dados["dataAnuncio"];
		}
		 $_SESSION['idVeiculo'] = $idVeiculo;
		
		?>	

        Marca: <?php echo $marcaVeiculo; ?><br/><br/>
        Modelo: <?php echo $modeloVeiculo; ?><br/><br/>
        Ano: <?php echo $anoVeiculo; ?><br/><br/>
        Placa: <?php echo $placaVeiculo; ?><br/><br/>
        Data da publicação: <?php echo $dataAnuncio; ?><br/><br/>
                            
                                </div>
                        
                          <p class="titulos"> Deseja realmente excluir o seu anúncio? <img src="imagens/1381004548_101.png" /> </p>
                      
                      
                        <a href="apagar-anuncio.php" class="classe4"> Excluir </a>  | <a href="homeuser.php" class="classe4"> Cancelar </a>
                    
                        </div>
				</div>
 		
              
               
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