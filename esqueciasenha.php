﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <div id="box-banner">
		
        </div>
    	<div id="box-central">
        
        <div id="box-conteudo2">
			 <div id="box-cxlogin2">     
                     
 				<form name="form" action="verificaesqueciasenha.php" method="post">
                               
               <H3> Email </H3> <input type="text" name="email" size="50"  />
               <br /><br />
               <H3> CPF </H3> <input type="text" name="cpf" size=25 />
                   <br /><br />  <br />
               <input type="submit" name="Entrar" />
               </form>
             
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
