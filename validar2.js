				function validar(formulario2){
				if(formulario2.marcaVeiculo.value == ''){
					alert("O campo Marca é obrigatório.");
					formulario.marcaVeiculo.focus;
					return false;
				}
				if(formulario2.modeloVeiculo.value == ''){
					alert("O campo Modelo é obrigatório.");
					formulario.modeloVeiculo.focus;
					return false;
				}

				if(formulario2.anoVeiculo.value == ''){
					alert("O campo Ano do Veiculo é obrigatório.");
					return false;
				}
	
				if(formulario2.corVeiculo.value == ''){
					alert("O campo Cor é obrigatório");
					return false;
			   }
			   if(formulario2.kmVeiculo.value == ''){
					alert("O campo Quilometragem é obrigatório");
					return false;
			   }
						 if(formulario2.precoVeiculo.value == ''){
					alert("O campo Preço é obrigatório");
					return false;
			   }
			   		 if(formulario2.formapagaVeiculo.value == ''){
					alert("O campo Forma de Pagamento é obrigatório");
					return false;
			   	
				}
					return true;
			} 