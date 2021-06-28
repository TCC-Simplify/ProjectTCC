//mascaras cadastro profissisonal

$(document).ready(function()
{	
	$("#cpf").mask("999.999.999-99");
});
 
$(document).ready(function(){
		$("#dt_nasc").mask("99/99/9999");
});


function mostrarSenha(){
	var tipo = document.getElementById("password");
	if(tipo.type == "password"){
		tipo.type = "text";
	}else{
		tipo.type = "password";
	}
}

function mostrarSenha2(){
	var tipo = document.getElementById("confirm_password");
	if(tipo.type == "password"){
		tipo.type = "text";
	}else{
		tipo.type = "password";
	}
}



