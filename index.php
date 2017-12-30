<?php
session_start();
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
<link href="css/fisheye.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/interface.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<link href="css/carousel.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jcarousellite.js"></script>
<script type="text/javascript">

		$(function(){
			$(".carousel").jCarouselLite({
						btnNext:".next",
					btnPrev:".prev",
					auto:6000,
					speed:1000,
					visible:1,
			
			
			})
			
			
			
		});
</script>
<script type="text/javascript">

var dock = function (dock, sMin, sMax) {
	/* ---- private vars ---- */
	var xm = xmb = ov = 0;
	var M = true;
	var icons = document.getElementById(dock).getElementsByTagName('img');
	var N = icons.length;
	var s = sMin;
	var ovk = 0;
	var addEvent = function (o, e, f) {
		if (window.addEventListener) o.addEventListener(e, f, false);
		else if (window.attachEvent) r = o.attachEvent('on' + e, f);
	}
	var pxLeft = function(o) {
		for(var x=-document.documentElement.scrollLeft; o != null; o = o.offsetParent) x+=o.offsetLeft;
		return x;
	}
	for(var i=0;i<N;i++) {
		var o = icons[i];
		o.style.width = sMin+"px";
		o.style.height = sMin+"px";
		o.className = "dockicon";
	}
	var run = function() {
		for(var i=0;i<N;i++) {
			var o = icons[i];
			var W = parseInt(o.style.width);
			if(ov && ov.className=="dockicon") {
				if(ov!=ovk){
					ovk=ov;
					document.getElementById("legend").innerHTML = ov.lang;
				}
				if(M) W = Math.max((s*Math.cos(((pxLeft(o)+W/2)-xm)/sMax)),sMin);
				s = Math.min(sMax,s+.5);
			} else {
				s = Math.max(s-.5,sMin);
				W = Math.max(W-N,sMin);
			}
			o.style.width = W+"px";
			o.style.height = W+"px";
		}
		if(s >= sMax) M = false;
	}
	addEvent(document, 'mousemove', function (e) {
		if(window.event) e=window.event;
		xm = (e.x || e.clientX);
		if(xm!=xmb){
			M = true;
			xmb = xm;
		}
		ov = (e.target)?e.target:((e.srcElement)?e.srcElement:null);
	});
	setInterval(run, 16);
};

window.onload = function() {
	dock("dock",85, 128);
}


</script>
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
            	<?php
				   include("includes/acessorestrito.php");
				   ?>	
            
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
        		
				<div id="box-pesquisadetalhada"> 
				  <div id="carousel">
						<div class="carousel">
							<ul>
							<li> <img src="imagens/BANNER1.png" alt=""  /></li>
							<li>  <img src="imagens/Banner3.png" alt="" /></li>
							
							</ul>
					
                    </div>	
						</div>
                        <?php
						include ("includes/conexao.php");
						$tb_anuncios = mysql_query("SELECT * FROM cad_veiculo order by idVeiculo desc limit 3") or die ("Ocorreu um erro" . mysql_error());
						$linhas = mysql_num_rows($tb_anuncios)or die ("Ocorreu um erro" . mysql_error());
						for($i=0;$i<$linhas;$i++){
							$campos = mysql_fetch_array($tb_anuncios)or die ("Ocorreu um erro" . mysql_error());
							
							$idVeiculo 			= $campos['idVeiculo'];
							$nomeVeiculo		= $campos['marcaVeiculo'];
							$modeloVeiculo		= $campos["modeloVeiculo"];
							$precoVeiculo		= $campos["precoVeiculo"];
							
						?>
               		<div class="quadradinhoanuncio2">
                       <div class="fotoquadradinho2">
                       
                                   
              
                                           
                <a href="anuncio.php?idVeiculo=<?php echo $idVeiculo?>">  <img src="imagens/carros/<?php verifica_img($idVeiculo, 1);?>_1.jpg" width="150" height="100" /></a>
                     
                     </div>
                     
                      <?php echo $nomeVeiculo ?>  <br>
 	        	Modelo:<td> <?php echo $modeloVeiculo ?> </td> <br>
	            Preço:<td> <?php echo $precoVeiculo ?> </td> <br>
                     
                     
                 
                         
                        </div>
                                
                        <?php
						}
						?>
				  					
        		</div>
       
        		<div id="box-publi1">
				</div>
                
        		<div id="box-publi2">
				</div>
      
		</div>
     
       <div id="box-mobile">
       		
       		<div id="dock">
                    <a href="resultadopesquisa.php?pesquisasimples=gol" target="_blank"><img src="imagens/1gol.jpg" lang="CARRO"></a>
                    <a href="resultadopesquisa.php?pesquisasimples=fiesta" target="_blank"><img src="imagens/4fiesta.jpg"lang="CARRO"></a>
                   	<a href="resultadopesquisa.php?pesquisasimples=uno" target="_blank"><img src="imagens/3uno.gif" lang="CARRO"></a>
                  	<a href="resultadopesquisa.php?pesquisasimples=fox" target="_blank"><img src="imagens/2fox.jpg" lang="CARRO"></a>
                    <a href="resultadopesquisa.php?pesquisasimples=siena" target="_blank"><img src="imagens/5siena.jpg"lang="CARRO"></a>
           			<a href="resultadopesquisa.php?pesquisasimples=hb20" target="_blank"><img src="imagens/6hb20.jpg" lang="CARRO"></a>
                    <a href="resultadopesquisa.php?pesquisasimples=onix" target="_blank"><img src="imagens/7onix.jpg"lang="CARRO"></a>
                    <a href="resultadopesquisa.php?pesquisasimples=estrada" target="_blank"><img src="imagens/8strada.jpg" lang="CARRO"></a>
              
                  
                  
                     
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
      

	
    	<div id="clear"> </div>
        
    	<div id="box-rodape"> 
        <?php 
		include ("includes/rodape.php");
		?>
        </div>
        
   </div>   
 
</body>
</html>
