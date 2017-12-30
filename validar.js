			function validar(formulario){
				if(formulario.nomeCliente.value == ''){
					alert("O campo NOME é obrigatório.");
					formulario.nomeCliente.focus;
					return false;
				}
				if(formulario.emailCliente.value == ''){
					alert("O campo EMAIL é obrigatório.");
					formulario.emailCliente.focus;
					return false;
				}
				if(formulario.emailCliente.value.indexOf(('@' && '.'),0)== -1){
					alert("EMAIL invalido.");
					return false;
				}
				if(formulario.cpfCliente.value == ''){
					alert("O campo CPF/CNPJ é obrigatório.");
					return false;
				}
				if(formulario.cpfCliente.value.indexOf(('.' && '-'),0)==-1){
					alert("O campo CPF/CNPJ deve conter ponto e ifem ");
					return false;
				}
				if(formulario.senhaCliente.value == ''){
					alert("Digite sua senha");
					return false;
			   }
				if(formulario.senhaCliente.value.length <5){
					alert("A senha deve conter mais que 5 caracteres");
			 		return false;
			   }
				if(formulario.confirmasenhaCliente.value == ''){
					alert("Confirme sua senha");
					return false;
			   }
			    if(formulario.confirmasenhaCliente.value !== formulario.senhaCliente.value){
					alert("As senhas não se coincidem. Favor digitar novamente");
				 	return false;		
							
				}
					return true;
			} 