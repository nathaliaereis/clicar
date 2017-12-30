<?php
session_start();

if(isset($_POST["usuario"])  && isset($_POST["senha"])){

	$login_user = $_POST["usuario"];
	$senha_user = $_POST["senha"];
	if(!(empty($login_user) or empty($senha_user)))
	{
		include("includes/conexao.php");
		$sql="select * from cad_login where emailCliente = '$login_user' and senhaCliente='$senha_user'";
	 
		$res = mysql_query($sql);
		$linha = mysql_num_rows($res);

		if($linha==0)
			{
				session_destroy();
				echo "<script> alert('Login ou Senha invalidos'); window.location.href='login.php';</script>"; 
				exit;
			}
		else
			{
				$_SESSION["usuario"] = $_POST["usuario"];
				$_SESSION["senha"] = $_POST["senha"];
				header("Location: homeuser.php");
			}
	}
	else
	{
				session_destroy();
				echo "Você não efetuou o login!";
				exit;
		
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
        
            <div id="box-conteudo5">
           
                <div id="box-cxlogin">
 					<form action="login.php" method="post" > <H1> LOGIN </H1>
             	<p>Endereço de Email </p> <input type="text" name="usuario" class="cxlogin"  />
                <br />
                <br /> 
             
                  <p> Senha</p> <input type="password" name="senha" class="cxlogin"   />
               			 <br />
                		<br />
                 <a href="esqueciasenha.php" class="classe1"> Esqueci a Senha </a>
                 <br />
                 <br />
                    <input type="submit" value="Entrar" class="botaologin2"/>
                   </form> 
                    <br />
             Ainda não tem cadastro? <a href="cadastrologin.php" class="classe1"> Clique aqui e crie o seu!  </a>
                  
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
