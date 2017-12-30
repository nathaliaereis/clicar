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
<link href="css/pesquisas.css" media="all" rel="stylesheet" type="text/css" />
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
             <div id="infoanuncio">
                </div> 
                
            	<div id="carousel2">
						<div class="carousel">
							<ul>
							<li> <a href="#"><img src="imagens/car1.gif" alt="" /></li></a>
							<li> <a href="#"> <img src="imagens/car2.gif" alt="" /></li></a>
							<li> <a href="#"> <img src="imagens/car3.gif" alt="" /></li></a>
							<li> <a href="#"> <img src="imagens/car4.gif" alt="" /></li></a>
							</ul>
        <button class="prev">Anterior </button> <button class="next"> Proximo </button>
						
						</div>
                   </div>
                   <br />
               <a href="#"> Excluir o anuncio </a>
               <br />
               <a href="#"> Renovar o anúncio</a>
			</div>
          
		</div>
       
    	<div id="box-publi3">
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
                        
    </div>
</body>
</html>
