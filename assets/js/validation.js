function validation() {
	var errors = [];
	//validando os inputs de texto
	if(document.register.name.value == "") {
		errors.push("- Insira um nome.");
	}
	if(document.register.surname.value == "") {
		errors.push("- Insira um sobrenome.");
	}
	//valida o radio do sexo
	if(document.register.sexo[0].checked==false && document.register.sexo[1].checked==false ) {
	   	errors.push("- Selecione o sexo.");
	}

	//valida o email
	var email = document.register.email.value;
		if (email.indexOf('@') == -1 ||	email.indexOf('.') == -1 ) {
			errors.push("- E-mail Inválido.");
	}

	//valida a senha
	var pass=document.register.password.value;
	var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;  
	if(!pass.match(passw)) {   
	errors.push('- Sua senha deve conter entre 6 e 20 caracteres, sendo ao menos uma letra maiúscula, uma letra minúscula e um número.'); 
	}


	if(!document.register.preferences[0].checked) {
	   errors.push("- Selecione ao menos um alimento de sua preferência.");
	}

	if(document.register.opinion.value =="") {
		errors.push("- Texto Obrigatório.");
	}	

	var element = $('<ul class="alert alert-danger">');

	for(var i = 0; i < errors.length; i++) {

		element.append('<li>'+errors[i]+'</li>');

	}  

	$('#errors').html(element);

	if(errors.length > 0) {
		return false;
	}



	return true;


}