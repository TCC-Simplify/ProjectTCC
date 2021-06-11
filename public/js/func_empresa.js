function verifica()
{
      
	if(jsbrasil.validateBr.cep(document.getElementById('cep').value) == false)
	{
		alert('CEP inválido! Por favor, confirme seu CEP.');
		document.getElementById('cep').focus();
		return false;
	} 
	if(jsbrasil.validateBr.cnpj(document.getElementById('cnpj').value) == false)
	{
		alert('CNPJ inválido! Por favor, confirme seu CNPJ.');
		document.getElementById('cnpj').focus();
		return false;
	}
	
}

function verifica2()
{ 
	if(jsbrasil.validateBr.cep(document.getElementById('cep').value) == false)
	{
		alert('CEP inválido! Por favor, confirme seu CEP.');
		document.getElementById('cep').focus();
		return false;
	} 
}

$(document).ready(function()
{	
	$("#cnpj").mask("99.999.999/9999-99");
	//$("#cep").mask("99.999-999");
	$("#ie").mask("999.999.999.999"); 
	$("#cnae").mask("9999-9/99");
});
 
$(document).ready(function(){
		$("#cep").mask("99999-999");
	});

$("#cep").blur(function(){
	// Remove tudo o que não é número para fazer a pesquisa
	var cep = this.value.replace(/[^0-9]/, "");
	
	// Validação do CEP; caso o CEP não possua 8 números, então cancela
	// a consulta
	if(cep.length != 8){
		return false;
	}
	
	// A url de pesquisa consiste no endereço do webservice + o cep que
	// o usuário informou + o tipo de retorno desejado (entre "json",
	// "jsonp", "xml", "piped" ou "querty")
	var url = "https://viacep.com.br/ws/"+cep+"/json/";
	
	// Faz a pesquisa do CEP, tratando o retorno com try/catch para que
	// caso ocorra algum erro (o cep pode não existir, por exemplo) a
	// usabilidade não seja afetada, assim o usuário pode continuar//
	// preenchendo os campos normalmente
	$.getJSON(url, function(dadosRetorno){
		try{
			// Preenche os campos de acordo com o retorno da pesquisa
			$("#endereco").val(dadosRetorno.logradouro);
			$("#bairro").val(dadosRetorno.bairro);
			$("#cidade").val(dadosRetorno.localidade);
			$("#uf").val(dadosRetorno.uf);
			document.getElementById('num').focus();
		}catch(ex){}
	});
});