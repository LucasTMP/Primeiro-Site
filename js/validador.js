
//validador para formulários

var exp = /[a-zA-Z]+$/;
//campos obrigatórios
var obrField = 	$("#form .obr");

function setWarn(object){
	object.removeClass("tested");
	object.addClass("warn");
}

function setTested(object){
	object.removeClass("warn");
	object.addClass("tested");
}

var testForm = function(){
	var valid = true;

	obrField.each(function(){
		if($(this).val().length == 0){
			$(this).focus();
			valid = false;
			return valid;
		}else if ($(this).attr("type") == "tel"){
			if($(this).val().match(exp)){
				$(this).focus();
				valid = false;
				return valid;
			}else if($(this).val().length < 10){
				$(this).focus();
				valid = false;
				return valid;
			}
		}else if(($(this).attr("type") == "checkbox") && ($(this).prop('checked') == false)){
	 		valid = false;
		}
	});

	

	if(!valid){
		alert("Preencha correntamente todos os campos com *");
		obrField.each(function(){
			$(this).next().remove();
			if($(this).val().length == 0){
				setWarn($(this));
				$(this).parent().append("<p class='warn'>Este campo é obrigatório</p>");
			}else{
				setTested($(this));
			}

			if ($(this).attr("type") == "tel"){
				$(this).next().remove();
				if($(this).val().match(exp)){
					setWarn($(this));
					$(this).parent().append("<p class='warn'>Digite apenas números</p>");
				}else if($(this).val().length < 10){
					setWarn($(this));
					$(this).parent().append("<p class='warn'>Digite um número válido com DDD</p>");
				}else{
					setTested($(this));
				}
			}
		});
	}
	return valid;
};

$("#form").submit(testForm);