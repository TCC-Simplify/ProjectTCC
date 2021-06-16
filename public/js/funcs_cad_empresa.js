function mostrarSenha(){
	var tipo = document.getElementById("senha");
	if(tipo.type == "password"){
		tipo.type = "text";
	}else{
		tipo.type = "password";
	}
}

function mostrarSenha2(){
	var tipo = document.getElementById("senha2");
	if(tipo.type == "password"){
		tipo.type = "text";
	}else{
		tipo.type = "password";
	}
}

$(document).ready(function()
{	
	$("#cnpj").mask("99.999.999/9999-99");
});
 
$(document).ready(function(){
		$("#cep").mask("99999-999");
});