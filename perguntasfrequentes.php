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
        
    	
        <div id="box-conteudo"> 
        
<h1 class="titulos">Como anuncio o meu carro no Clicar?</h1> 
<p>Para fazer o anuncio é simples, basta se cadastrar no site e criar um perfil.</p>
<p>Assim que cadastrado você terá um nome de usuário e senha, efetue o login utilizando esses dados e dentro do seu perfil terá a opção para criar um anuncio.</p>
<p>A partir daí, é só preencher todos os dados do formulário corretamente e seguir os passos para efetuar o pagamento via boleto. Assim que o pagamento for registrado seu anuncio estará no ar.</p>


<h4>Como posso editar meu anúncio? </h4>
<p> Acesse sua conta com seu login e clique em editar anúncio.</p>

<h4>Em quanto tempo o anúncio é publicado após o pagamento? </h4>
<p>O prazo para o seu anúncio ir ao ar depende da forma de pagamento utilizada.</p>

<p>Boleto Bancário: Um dia útil após a realização do pagamento;</p>
<p>Se o seu pagamento já foi confirmado mas seu anúncio ainda não está ativo, contate nossa central de atendimento pelo telefone: (19) 3873 4307 ou e-mail:faleconosco@clicar.com.br.</p>

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
