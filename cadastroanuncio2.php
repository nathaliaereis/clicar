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
<?php
include ("includes/conexao.php");
			$_SESSION['marcaVeiculo'] 		= 		$_POST['marcaVeiculo'];
			$_SESSION['modeloVeiculo']		=		$_POST['modeloVeiculo'];
			$_SESSION['anoVeiculo']			=		$_POST['anoVeiculo'];
			if (isset($_POST['combVeiculo'])){$_SESSION['combVeiculo'] = $_POST['combVeiculo'];}else{$_SESSION['combVeiculo'] ="";}
			$_SESSION['corVeiculo']			= 		$_POST['corVeiculo'];
			$_SESSION['kmVeiculo']			=		$_POST['kmVeiculo'];
			$_SESSION['precoVeiculo']		=		$_POST['precoVeiculo'];
			$_SESSION['formapagaVeiculo']	=		$_POST['formapagaVeiculo'];
			$_SESSION['opcionaisVeiculo']	=		$_POST['opcionaisVeiculo'];
			$_SESSION['placaVeiculo']		=		$_POST['placaVeiculo'];


		?>

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
          <h2 align="center" class="h2">Termos de Uso</h2>
        
          <br />
          	
          <div class="marcadores">
           
                         <div class="marcadorespag"> 
                         <img src="imagens/bolinha.png" />
                                    </div>
                         <div class="marcadorespag">
                         <img src="imagens/bolinha3.png" /> 
                                    </div>
                         <div class="marcadorespag"> 
                         <img src="imagens/bolinha7.png" />
                                   </div>
                        <div class="marcadorespag"> 
                         <img src="imagens/bolinha6.png">
                                    </div>
           	 </div>   
           
          <form name="formulario2" action="cadastroanuncio3.php" method="post" class="cadastro">
          
          
          
       <BR />
<P>O Clicar não realiza qualquer intermediação na negociação entre os usuários, seja com relação à compra, troca ou qualquer outro tipo de negociação.</P>
<P>As vendas e entregas aos usuários e/ou terceiros de produtos anunciados no site são de inteira responsabilidade do anunciante.</P> 
<P>As informações veiculadas nos anúncios deste site são de inteira responsabilidade do anunciante, não podendo o usuário responsabilizar o site pela veracidade e/ou autenticidade das mesmas, nem pelos danos diretos ou indiretos causados a terceiros. </P>
<P>O usuário reconhece como sendo de sua exclusiva responsabilidade os riscos assumidos nas negociações que vier a efetuar com outros usuários do site.</P>
<P>Estoque e preços sujeitos a conferência e confirmação do anunciante.</P>
<P>Os dados do veículo, acessórios e preço são informações meramente sugestivas, com base em levantamentos periódicos de pesquisa. O preço efetivamente praticado e os demais dados do veículo deverão ser confirmados na concessionária.</P>
<P>Os dados sobre os estoques de cada concessionária são obtidos mediante pesquisas periódicas. Como são apenas informações de referência, podem não refletir a situação atual, devido à movimentação diária. Recomendamos consultar a própria concessionária para obter informações atualizadas da existência em estoque do carro de sua preferência.</P>
        
        <br /><br/>
           
			 <input type="submit" value="Concordo"/>
		        </form>	


		    <form name="formulario3" action="homeuser.php" class="cadastro"><br/>
          	<input type="submit" value="Sair"/>
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
