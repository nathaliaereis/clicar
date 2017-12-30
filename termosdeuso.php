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
       
    	
        <div id="box-conteudo4">
       
<br />
<h2 class="titulos">Termos de Uso</h2>
<BR />
<P>O Clicar não realiza qualquer intermediação na negociação entre os usuários, seja com relação à compra, troca ou qualquer outro tipo de negociação.</P>
<P>As vendas e entregas aos usuários e/ou terceiros de produtos anunciados no site são de inteira responsabilidade do anunciante.</P> 
<P>As informações veiculadas nos anúncios deste site são de inteira responsabilidade do anunciante, não podendo o usuário responsabilizar o site pela veracidade e/ou autenticidade das mesmas, nem pelos danos diretos ou indiretos causados a terceiros. </P>
<P>O usuário reconhece como sendo de sua exclusiva responsabilidade os riscos assumidos nas negociações que vier a efetuar com outros usuários do site.</P>
<BR />
 <P>Estoque e preços sujeitos a conferência e confirmação do anunciante.</P>
<P>Os dados do veículo, acessórios e preço são informações meramente sugestivas, com base em levantamentos periódicos de pesquisa. O preço efetivamente praticado e os demais dados do veículo deverão ser confirmados na concessionária.</P>
<P>Os dados sobre os estoques de cada concessionária são obtidos mediante pesquisas periódicas. Como são apenas informações de referência, podem não refletir a situação atual, devido à movimentação diária. Recomendamos consultar a própria concessionária para obter informações atualizadas da existência em estoque do carro de sua preferência.</P>


 

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
