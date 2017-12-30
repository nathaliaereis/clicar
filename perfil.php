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
<link href="css/menu-user.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/pesquisas.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/interface.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
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
         
         <div style="overflow:auto; color:#000000;  width:750px; height:450px; line-height:100%" id="box-conteudo6">
						
                      <h2 align="center" class="titulos"> Seus Dados <img src="imagens/1381004876_183.png" /></h2>

                   		  <?php
					include("includes/conexao.php");
					$emailCliente = $_SESSION['usuario'];
					$sql 	= "SELECT * FROM cad_login WHERE emailCliente = '$emailCliente'";
					$tb_Contatos = mysql_query($sql);
					$dados = mysql_fetch_array($tb_Contatos) or die("Não foi possível realizar a consulta Erro: " .mysql_error());
					
	  		$idCliente 			= $dados['idCliente'];
	  		$nomeCliente		= $dados['nomeCliente'];
			$emailCliente		= $dados['emailCliente'];
			$cpfCliente			= $dados['cpfCliente'];
			$diaCliente			= $dados['diaCliente'];
			$mesCliente			= $dados['mesCliente'];
			$anoCliente			= $dados['anoCliente'];
	  		$sexoCliente 		= $dados['sexoCliente'];
	  		$telefoneCliente	= $dados['telefoneCliente'];
			$celularCliente		= $dados['celularCliente'];
			$enderecoCliente	= $dados['enderecoCliente'];
			$numeroendCliente	= $dados['numeroendCliente'];
			$complementoCliente	= $dados['complementoCliente'];
			$bairroCliente		= $dados['bairroCliente'];
			$cepCliente			= $dados['cepCliente'];
			$estadoCliente		= $dados['estadoCliente'];
			$senhaCliente		= $dados['senhaCliente'];
  
            ?>          
                   
          	<div class="fotouser">
                    
            
           <?php if (file_exists("C:/xampp/htdocs/clicar/imagens/perfil/$idCliente.jpg")){ ?>      
                  
           <img src="imagens/perfil/<?php echo $idCliente; ?>.jpg" width="120px" height="140px" />               
           
           <?php }else{ ?>
			   
           <img src="imagens/perfil/padrao.jpg" width="120px" height="140px" />                  
           
           <?php } ?>
			   
                                                          
            </div>

            
            <P>Nome:  <td><?php echo $nomeCliente ?></td> </P>
			<P>Email:  <td><?php echo $emailCliente ?></td> </P>	
			<P>CPF:  <?php echo $cpfCliente ?></td> </P>		
			<P>Data Nascimento:   <td><?php echo $diaCliente?> de <?php echo $mesCliente?> de <?php echo $anoCliente?></td> </P>
            <P>Sexo:  <?php echo $sexoCliente?> </P>
	  		<P>Telefone:  <?php echo $telefoneCliente?> </P>	
			<P>Celular:  <?php echo $celularCliente?> </P>		
			<P>Endereço:  <?php echo $enderecoCliente?> </P>	
			<P>N°:  <?php echo $numeroendCliente?> Complemento: <?php echo $complementoCliente?> </P>
			<P>Bairro:  <?php echo $bairroCliente?> </P>			
			<P>CEP:  <?php echo $cepCliente?> </P>		
			<P>Estado:  <?php echo $estadoCliente?> </P>

			</div>
                
        		<div id="box-linksuser">
                   <div id="box-links3">
                        
       					 <?php 
						include ("includes/link3.php");
						?>
                         
             			 </div>
                
        	                  
                    <div id="box-fotouser">
                    
					
					
					<?php
		function verifica_img($idContato){
		if(file_exists("imagens/perfil/$idCliente.jpg")){
			echo $idCliente;	
		}else{
			echo 'padrao';
		}
}
?>
				  <img src="imagens/perfil/<?php verifica_img($idContato);?>.jpg" width="150" height="100"/>
                  
                    	</div>
       			</div>		
				
      		 </div>
            
             </P>
            <div id="box-publi3">
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