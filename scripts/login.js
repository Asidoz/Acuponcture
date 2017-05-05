
function checkLoginForm() {
	var disabled = true;
	if($("#login_email").val() != "" && $("#login_pwd").val() != "") {
		disabled = false;
	}
	$("#login_submit").prop("disabled",disabled);
} 

function checkInscr() {
	var ok = true;
	var endAjax = false;
	var error = "";
	if($("#email_inscr").val() != $("#email_confirm_inscr").val() != "") {
		ok = false;
		error += "Erreur sur la confirmation d'adresse mail.\n";
	}
	if($("#login_email").val() != $("#login_pwd").val() != "") {
		ok = false;
		error += "Erreur sur la confirmation de mot de passe.\n";
	}
	/*if(ok == true) {
		$.post("../ajax/verifEmailDispo.php",{e:$("#email_inscr").val()},function(data) {
			alert(data);
			endAjax = true;
			if(data != 0) {
				ok = false;
			}
		});	
	}
	while(ok==true && endAjax==false) { }*/
	return ok;
}

function loginUser() {
	var btn = $("#login_submit");
	btn.prop("disabled",true);
	$.post("../ajax/loginUser.php",
	{
		e:$("#login_email").val(),
		p:$("#login_pwd").val()
	},function(data) {
		if(data == "OK") {
			document.location.href="/index.php";
		} else {
			$("#login_form > .errorTxt").html(data);
			btn.prop("disabled",false);
		}
	});
	return false;
}