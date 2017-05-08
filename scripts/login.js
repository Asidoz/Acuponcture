
function checkLoginForm() {
	var disabled = true;
	if($("#login_email").val() != "" && $("#login_pwd").val() != "") {
		disabled = false;
	}
	$("#login_submit").prop("disabled",disabled);
} 

function checkInscr() {
	var error = "";
	var btn = $("#register_submit");
	btn.prop("disabled",true);

	var email = $("#email_inscr").val();
	var emailConf = $("#email_confirm_inscr").val();
	var pwd = $("#pwd_inscr").val();
	var pwdConf = $("#pwd_confirm_inscr").val();
	var prenom = $("#prenom_inscr").val();
	var nom = $("#nom_inscr").val();

	if(email != emailConf) {
		error = "Erreur sur la confirmation d'adresse mail.\n";
	}
	else if(pwd != pwdConf) {
		error = "Erreur sur la confirmation de mot de passe.\n";
	} 
	else {
		$.post("../ajax/addUser.php",
		{
			e:email,
			n:nom,
			p:prenom,
			m:pwd
		},function(data) {
			if(data == "1") {
				document.location.href="/";
			} else {				error = "Erreur lors de la création du compte.";
				$("#inscr_form > .errorTxt").html(error);
				btn.prop("disabled",false);
			}
		});
	}
	$("#inscr_form > .errorTxt").html(error);
	return false;
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