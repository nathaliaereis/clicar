<?php
session_start();
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
        <div id="box-banner">
		
        </div>
    	<div id="box-central">
        
        <div id="box-conteudo2">
        		<P>Visitado por milhões de potenciais compradores de veículos todos os meses, o Clicar é um facilitador tanto para quem quer comprar quanto para quem quer vender automóveis, e oferece ao seu público o meio mais rápido e fácil de encontrar o que você realmente procura sem precisar sair de casa. </P>
                <BR />
<P>Clicar foi criado em 2010. Hoje nossa filosofia se pauta pela solidez, ética, respeito, empreendedorismo e união.<P> 
<BR />
<P>Estes valores permeiam a relação do Clicar com seus clientes, parceiros e colaboradores em busca pelo desenvolvimento sustentável. </P>
<P>Além disso, o Clicar investe em tecnologia de ponta continuamente para manter a segurança dos dados e a sua privacidade durante toda a navegação. Usando as mais novas ferramentas, tecnologias e métodos disponíveis, o Clicar garante disponibilidade e performance adequada para que sua experiência de navegação seja rápida e agradável.</P>


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
