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
<link href="css/links.css" media="all" rel="stylesheet" type="text/css" /></head>
<link href="css/pesquisas.css" media="all" rel="stylesheet" type="text/css" />
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
        
        <div style="overflow:auto; color:#000000;  width:912px; height:430px; line-height:100%" id="box-conteudo2"> 
        
        	  <form name="formulario2" action="resultadopesqdetalhada.php" method="POST" class="cadastro">
             
              <h3 class="titulos"> Busca Detalhada <img src="imagens/1384231008_search.png" /></h3>
             <br />
        
             

        <p><P>Marca:<tr>
    <td>
    <select id="marca" name="marcaVeiculo">
      <option value="NULL">Selecione uma Marca</option>
      <option value="Audi">Audi</option>
      <option value="BMW">BMW</option>
      <option value="Chevrolet">Chevrolet</option>
      <option value="Citroen">Citroen</option>
      <option value="Fiat">Fiat</option>
      <option value="Ford">Ford</option>
      <option value="Honda">Honda</option>
      <option value="Hyundai">Hyundai</option>
      <option value="Mercedes-Benz">Mercedes-Benz</option>
      <option value="Mitsubish">Mitsubish</option>
      <option value="Nissan">Nissan</option>
      <option value="Peugeot">Peugeot</option>
      <option value="Porsche">Porsche</option>
      <option value="Renault">Renault</option>
      <option value="Subaru">Subaru</option>
      <option value="Toyota">Toyota</option>
      <option value="Volkswagen">Volkswagen</option>
      <option value="Volvo">Volvo</option>
    </select>
    </td>
    </tr>
  <p>Modelo: <input size="35" type="text" name="modeloVeiculo"></p>
    
<tr>
    <td>
    Ano:<select id="anoV" name="anoVeiculo">
      <option value="NULL">Selecione</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2006</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
  	  <option value="1983">1983</option>
  	  <option value="1982">1982</option>
  	  <option value="1981">1981</option>
	  <option value="1980">1980</option>
	  <option value="1979">1979</option>
	  <option value="1978">1978</option>
	  <option value="1977">1977</option>
	  <option value="1976">1976</option>
	  <option value="1975">1975</option>
	  <option value="1974">1974</option>
	  <option value="1973">1973</option>
	  <option value="1972">1972</option>
	  <option value="1971">1971</option>
	  <option value="1970">1970</option>
	  <option value="1969">1969</option>
	  <option value="1968">1968</option>
	  <option value="1967">1967</option>
	  <option value="1966">1966</option>
	  <option value="1965">1965</option>
	  <option value="1964">1964</option>
	  <option value="1963">1963</option>
	  <option value="1962">1962</option>
	  <option value="1961">1961</option>
	  <option value="1960">1960</option>
    </select>
    </td>
    </tr>
    
<p>Combustivel:
  <label>
    	<input type="radio" name="combVeiculo" value="Gasolina" id="combVeiculo_0" />
    	Gasolina</label>
 <label>
    	<input type="radio" name="combVeiculo" value="Alcool" id="combVeiculo_1" />
   		Álcool</label>
        <label>
   		<input type="radio" name="combVeiculo" value="Diesel" id="combVeiculo_2" />
   		Diesel</label>
 <label>
   		<input type="radio" name="combVeiculo" value="GNV" id="combVeiculo_3" />
   		GNV</label>
 <label>
		<input type="radio" name="combVeiculo" value="Flex" id="combVeiculo_4" />
   		FLEX</label>
        
    
</p>
<P>Cor: <input type="text" name="corVeiculo">
<P>Quilometragem: De <input type="text" name="kmminVeiculo" size="8"> até <input type="text" name="kmmaxVeiculo" size="8"> </p>   
<P>Preço: R$<input type="text" name="precominVeiculo" size="8"> até R$<input type="text" name="precomaxVeiculo" size="8"> </p>
<br />
      
        <p><input type="submit" value="Pesquisar" />
		<INPUT type="reset"  name="b2" value="Limpar"> </p>
        </form>              
        
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
      
</div>
		<div id="clear"> </div>
    	<div id="box-rodape">
         <?php 
		include ("includes/rodape.php");
		?> 
        
        </div>
    
</body>
</html>
