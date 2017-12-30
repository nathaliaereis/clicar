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
       
        
          <div style="overflow:auto; color:#000000;  width:900px; height:450px; line-height:100%" id="box-conteudo" align="center"> 
         
                
                  <br />
                  <br />
                 <a ="" 
          	   <a target="_blank" href="boleto.php"> Clique aqui para impressão de seu boleto <img src="imagens/1381004955_062.png" /></a> <br /><br />
                  <a href="homeuser.php" class="classe5"> Concluir <img src="imagens/ok.png" /> </a> 
                                     
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                          <div class="box-anuncios">
                                          <div class="formanuncio">
                                          <form action="executauploadanuncio.php" method="post" enctype="multipart/form-data">
                                          
                                          <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                          <input type="file" name="arquivo1" size="1" />
                                          <input type="submit" name="addfoto" />
                                                                   
                                                                           
                                                                                
                                          </form>
                                          
                                          </div>
                                  <div class="fotoanuncio">
                                  
                                  
				  <img src="imagens/carros/<?php verifica_img($idVeiculo, 1);?>_1.jpg" width="200" height="200" />

                                  
                                  </div>
                         </div>
                         
                          <div class="box-anuncios">
                                          <div class="formanuncio">
                                          <form action="executauploadanuncio.php" method="post"  enctype="multipart/form-data">
                                          
                                           <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                          <input type="file" name="arquivo2" size="1" />
                                          <input type="submit" name="addfoto" />
                                          </form>
                                          
                                          </div>
                                  <div class="fotoanuncio">
                                  
				  <img src="imagens/carros/<?php  verifica_img($idVeiculo, 2);?>_2.jpg" width="200" height="200" />
                                  
                                  </div>
                         </div>
                         
                          <div class="box-anuncios">
                                          <div class="formanuncio">
                                          <form action="executauploadanuncio.php" method="post" enctype="multipart/form-data">
                                          
                                          <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                          <input type="file" name="arquivo3" size="1" />
                                          <input type="submit" name="addfoto" />
                                          </form>
                                          
                                          </div>
                                  <div class="fotoanuncio">
                                  
				  <img src="imagens/carros/<?php verifica_img($idVeiculo, 3);?>_3.jpg" width="200" height="200" />                                  
                                  
                                  </div>
                         </div>
                         
                          <div class="box-anuncios">
                                          <div class="formanuncio">
                                          <form action="executauploadanuncio.php" method="post"  enctype="multipart/form-data">
                                          
                                           <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                          <input type="file" name="arquivo4" size="1" />
                                          <input type="submit" name="addfoto" />
                                          </form>
                                          
                                          </div>
                                  <div class="fotoanuncio">
                                  
				  <img src="imagens/carros/<?php verifica_img($idVeiculo, 4);?>_4.jpg" width="200" height="200" />                                  
                                  
                                  </div>
                         </div>
                        
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
