
<?php
header ('Content-type: text/html; charset=ISO-8859-1 lang="en-US" ');
include ("valida_session.php");
include("includes/conexao.php");
header ('Content-type: text/html; charset=ISO-8859-1');
//header ('Content-type:text/html; charset=windows-1252" ');
//header ('Content-type: text/html; charset=ISO-8859-1 lang="en-US" ');
//header ('Content-type: text/html; charset=win-1251 " ');


  					$idVeiculo = $_SESSION['idVeiculo'];
					$marcaVeiculo =	$_SESSION['marcaVeiculo'];
					$modeloVeiculo = $_SESSION['modeloVeiculo'];
					$anoVeiculo = $_SESSION['anoVeiculo'];
					$combVeiculo = $_SESSION['combVeiculo'];
					$corVeiculo = $_SESSION['corVeiculo'];
					$kmVeiculo = $_SESSION['kmVeiculo'];
					$precoVeiculo = $_SESSION['precoVeiculo'];
					$formapagaVeiculo = $_SESSION['formapagaVeiculo'];
					$opcionaisVeiculo = $_SESSION['opcionaisVeiculo'];
					$placaVeiculo = $_SESSION['placaVeiculo'];
					
					$sql6 	= "SELECT * FROM cad_veiculo WHERE idVeiculo = '$idVeiculo'";
					$tb6 = mysql_query($sql6);
					$dados6 = mysql_fetch_array($tb6) or die("Não foi possível realizar a consulta Erro: " .mysql_error());	
					
					$idCliente = $dados6['idCliente'];
					$sql2 	= "SELECT * FROM cad_login WHERE idCliente = '$idCliente'";
					$tb2 = mysql_query($sql2);
					$dados2 = mysql_fetch_array($tb2) or die("Não foi possível realizar a consulta Erro: " .mysql_error());	
					$nomeCliente		= $dados2['nomeCliente'];
					$cpfCliente         = $dados2['cpfCliente'];
					$enderecoCliente         = $dados2['enderecoCliente'];
					$numeroendCliente         = $dados2['numeroendCliente'];
					$complementoCliente       = $dados2['complementoCliente'];
					$bairroCliente         = $dados2['bairroCliente'];
					$estadoCliente         = $dados2['estadoCliente'];
					
  

/*
Dados do boleto - Obrigatórios
*/
$dias=3;   // Informe o nº de dias a serem colocados a mais para criar a data de VENCIMENTO
$dadosboleto['data_vencimento'] = date ("d/m/Y",mktime (0,0,0,date("m"),date("d")+$dias,date("Y")) ); // Data de Vencimento do Boleto
$dadosboleto['data_documento'] = date ("d/m/Y",mktime (0,0,0,date("m"),date("d"),date("Y")) ); // Data de emissão do boleto
$dadosboleto["data_processamento"] = ""; // Data de processamento do boleto (opcional)
$dadosboleto['valor_boleto'] = "0,25"; // Valor do Boleto, com vírgula, sempre com duas casas depois da virgula

//opcionais
$dadosboleto["quantidade"] = "";
$dadosboleto["valor_unitario"] = "";
$dadosboleto["aceite"] = "N";		
$dadosboleto["uso_banco"] = ""; 	
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "RC";

//dados da sua conta e convênio
$dadosboleto["agencia"] = "1234"; // Num da agencia, sem digito
$dadosboleto["conta"] = "12345"; 	// Num da conta, sem digito
//convenio e contrato podem ser vistos no gerenciador financeiro do BB
$dadosboleto["convenio"] = "123456";  // Num do convênio
$dadosboleto["contrato"] = "12345678910"; // Num do seu contrato

/*
FORMATAÇÃO DO NOSSO NUMERO
*/

$dadosboleto["formatacao_nosso_numero"] = "1";

/*
#################################################
Sei que isso funciona pra carteira 18....pras outras, deixe opção 1

1	=	Formatação gerada: Num do convenio + 5 digitos informados por você + digito verificador
		(neste caso, informe de 1 a 5 digitos somente)

2	=	para 17 digitos informados por você ( de 1 a 99999999999999999)

Se você não entendeu, deixe a opção 1 e informe até 5 digitos no nosso numero

Nosso número:
de 1 a 99999 para opção de 12 dígitos
de 1 a 99999999999999999 para opção de 17 dígitos
#################################################
*/

$dadosboleto["nosso_numero"] = rand(00001,99999);   // Nosso número de até 5 dígitos gerado automático e aleatório
$dadosboleto["numero_documento"] = $dadosboleto['nosso_numero'];	// Apenas para orientação - mesmo que o nosso número
$dadosboleto["carteira"] = "18";  // Código da Carteira 18 - 17 ou 11
$dadosboleto["variacao_carteira"] = "-019";  // Variação da Carteira, com traço (opcional)

/*
DADOS DO CEDENTE
*/
$dadosboleto["cpf_cnpj"] = "89.308.735/0002-73";
$dadosboleto["endereco"] = "Rua Geraldo de Souza, 157/221  CEP: 13.170-232";
$dadosboleto["cidade"] = "Sumaré/SP";
$dadosboleto["cedente"] = "Clicar";

/*
DADOS DO SEU CLIENTE
*/
//$string1 . " " . $string2;
$dadosboleto["sacado"] = "$nomeCliente" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."$cpfCliente";
$dadosboleto["endereco1"] = "$enderecoCliente" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". "$bairroCliente";
$dadosboleto["endereco2"] = "$complementoCliente" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". "$estadoCliente"; 	

/*
INSTRUÇÕES PARA O CLIENTE
*/

$dadosboleto["instrucoes"] = "Sr.(a) Caixa, não receber após o vencimento.";

/*
ENVIO DE E-MAIL PARA O CEDENTE
*/
   if( isset( $recipient ) && !empty( $recipient ) && is_array( $HTTP_POST_VARS ) )
   {
         // Criação do Destinatário
         if( !isset( $email ) || empty( $email ) )
         {
      	   $email = $recipient;
         }
         reset( $HTTP_POST_VARS );

         // Criação da Mensagem
         $mensagem = null;
         while( list( $campo, $conteudo ) = each( $HTTP_POST_VARS ) )
         {
            $conteudo  = stripslashes( $conteudo );
            $mensagem .= $campo.": ".$conteudo;
            $mensagem .= " \n";
         }

         // Criação do Assunto
         if( !isset( $assunto ) )
         {
            if( isset( $subject ) )
            {
               $assunto = $subject;
            }
            else
            {
               $assunto = "BOLETO EMITIDO";
            }
         }

         // Enfim, envia o e-mail
         $cabecalho  = "From: <".$email.">\n";
         $cabecalho .= "BOLETO EMITIDO\n";

         mail(
               $recipient,
               $assunto,
               $mensagem,
               $cabecalho
             );
   }

//SÓ MEXA DEPOIS DISSO SE VOCÊ FOR EXPERIENTE EM PHP
include("includes/funcoesbb.php"); 
include("includes/layoutbbhtml.php");

?>
