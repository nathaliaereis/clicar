<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CLICAR - Clique aqui e encontre seu carro</title>
<link href="css/estilos.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/pseudo-classes.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/menu.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/links.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="validar.js"></script>
<!-- Aqui está os Auto Preencimento dos Campos :]]]] -->
<script type="text/javascript" src="scripts/jquery-1.2.6.pack.js"></script>
<script src="scripts/maskeinput.js" type="text/javascript"></script> 

<script type="text/javascript">  
jQuery.noConflict(); 
jQuery(function($){ 
   $("#cpfCliente").mask("999.999.999-99"); 
   $("#telefoneCliente").mask("(099) 9999-9999"); 
   $("#celularCliente").mask("(99) 9-9999-9999"); 
   $("#cepCliente").mask("99999-999");  
}); 
</script>  
</head>
<!--- Termina Aqui :]]]]] -->
<body>

<?php 

function validaemail(){

$email = $_POST['emailCliente'];
$sql = mysql_query("SELECT * FROM cad_login WHERE emailCliente = '$email'");
$linhas = mysql_num_rows($sql);
 if ($linhas >= '1'){
echo "<script> alert('Este email ja está cadastrado, utilize outro email');</script>"; 
 }else{
 }}?>

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
    	<div id="box-central">
       
        <div style="overflow:auto; color:#000000;  width:900px; height:450px; line-height:100%" id="box-conteudo"> 
          <h2 align="center" class="h2"> Formulário de Cadastro </h2>
      
  <form name="formulario" action="verificaremail.php" method="POST" onsubmit="return validar(this);" class="cadastro">
  <p>Nome <input size="35" type="text" name="nomeCliente"></p>
  <P>E-mail <input size="35" type="text" name="emailCliente"></p>
<P>CPF <input size="35" type="text" name="cpfCliente" id="cpfCliente"></p>
<P>Data de Nascimento
<tr>
    <td>
    <select id="dia" name="diaCliente">
      <option value="">Dia</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    </td>
    </tr>
  
  
    <tr>
    <td>
    <select id="mes" name="mesCliente">
      <option value="">Mês</option>
      <option value="Janeiro">Janeiro</option>
      <option value="Fevereiro">Fevereiro</option>
      <option value="Março">Março</option>
      <option value="Abril">Abril</option>
      <option value="Maio">Maio</option>
      <option value="Junho">Junho</option>
      <option value="Julho">Julho</option>
      <option value="Agosto">Agosto</option>
      <option value="Setembro">Setembro</option>
      <option value="Outubro">Outubro</option>
      <option value="Novembro">Novembro</option>
      <option value="Dezembro">Dezembro</option>
    </select>
    </td>
    </tr>
    
<tr>
    <td>
    <select id="ano" name="anoCliente">
      <option value="">Ano</option>
      <option value="2015">2015</option>
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
	  <option value="1959">1959</option>
	  <option value="1958">1958</option>
	  <option value="1958">1958</option>
	  <option value="1957">1957</option>
	  <option value="1956">1956</option>
	  <option value="1955">1955</option>
	  <option value="1954">1954</option>
	  <option value="1953">1953</option>
	  <option value="1952">1952</option>
	  <option value="1951">1951</option>
	  <option value="1950">1950</option>
	  <option value="1949">1949</option>
	  <option value="1948">1948</option>
	  <option value="1947">1947</option>
	  <option value="1946">1946</option>
	  <option value="1942">1942</option>
	  <option value="1941">1941</option>
	  <option value="1940">1940</option>
	  <option value="1939">1939</option>
	  <option value="1934">1934</option>
	  <option value="1931">1931</option>
	  <option value="1929">1929</option>
	  <option value="1928">1928</option>
	  <option value="1927">1927</option>
    </select>
    </td>
    </tr>
    
<p>Sexo
  <label>
    <input type="radio" name="sexoCliente" value="Feminino" id="sexoCliente_0" />
    Feminino</label>
  <label>
    <input type="radio" name="sexoCliente" value="Masculino" id="sexoCliente_1" />
    Masculino</label>
  <br />
</p>
<P>Telefone <input type="text" name="telefoneCliente" id="telefoneCliente" >  Celular<input type="text" name="celularCliente" id="celularCliente"></p>
<P>Endereço <input size="45" type="text" name="enderecoCliente"/> N° <input size="5" type="text" name="numeroendCliente" /></p>
<P>Cidade <input type="text" name="complementoCliente"> Bairro<input type="text" name="bairroCliente"></P>
<P> CEP <input type="text" name="cepCliente" id="cepCliente" />

<tr>
<td>
   Estado
    <select id="estado" name="estadoCliente">
      <option value="">Selecione...</option>
      <option value="AC">Acre</option>
      <option value="AL">Alagoas</option>
      <option value="AP">Amapá</option>
      <option value="AM">Amazonas</option>
      <option value="BA">Bahia</option>
      <option value="CE">Ceará</option>
      <option value="ES">Espirito Santo</option>
      <option value="DF">Distrito Federal</option>
      <option value="MA">Maranhão</option>
      <option value="MT">Mato Grosso</option>
      <option value="MS">Mato Grosso do Sul</option>
      <option value="MG">Minas Gerais</option>
      <option value="PA">Pará</option>
      <option value="PB">Paraíba</option>
      <option value="PR">Paraná</option>
      <option value="PE">Pernambuco</option>
      <option value="PI">Piaui</option>
      <option value="RJ">Rio de Janeiro</option>
      <option value="RN">Rio Grande do Norte</option>
      <option value="RS">Rio Grande do Sul</option>
      <option value="RO">Rondonia</option>
      <option value="RR">Roraima</option>
      <option value="SC">Santa Catarina</option>
      <option value="SP">São Paulo</option>
      <option value="SE">Sergipe</option>
      <option value="TO">Tocantins</option>
    </select>
 
    </p>
      </tr></td>
    <p>&nbsp;</p>


  <P>Senha <input type="password" name="senhaCliente" /></P>
  <P>Confirme a Senha <input type="password" name="confirmasenhaCliente"/></P>
 <br />
        <p><input type="submit" value="Salvar Cadastro" />
		<INPUT type="reset"  name="b2" value="Limpar"> </p>
        </form>
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
