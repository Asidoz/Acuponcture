function checkMail()
{
    //initialisation de variable
    var retour;
    retour = 0;

    //Tests
    if ($("#email_addr2").val() =="" |$("#email_addr_repeat2").val() =="" ){       //Adresse non vide
        retour =  0;
    }
    else if ( $("#email_addr_repeat2").val()!=  $("#email_addr2").val() ) {
        $("#email_addr_repeat2").css('outline', 'none');
        $("#email_addr_repeat2").css('border-color', 'red');
        retour = 0;
    }
    else {
        $("#email_addr_repeat2").css('outline', 'none');
        $("#email_addr_repeat2").css('border-color', 'initial');
        retour = 1;
    }
    return retour;
}

function checkPassword()
{
    var retour;
    retour = 0;

    if ($("#password").val() =="" |$("#password_repeat").val() =="" ){       //Adresse non vide
        retour =  0;
    }
    else if ( $("#password").val()!=  $("#password_repeat").val() )
    {
        $("#password_repeat").css('outline','none');
        $("#password_repeat").css('border-color','red');
        retour =  0;
    }
    else {
        $("#password_repeat").css('outline', 'none');
        $("#password_repeat").css('border-color', 'initial');
        retour = 1;
    }
    return retour;
}

function checkGloboalInformation()
{
    var retour;
    retour = 0;

    if ($("#nom").val() == "" | $("#prenom").val() == "") {
        retour = 0;
    }
    else
    {
        retour = 1
    }
    return retour
}

function checkFormInscription()
{
    if (checkMail() == 1 && checkPassword()==1 && checkGloboalInformation()==1){
        $("#register-submit").prop("disabled", false);
    }
    else {
        $("#register-submit").prop("disabled", true);
    }
}

$().ready(function() //Désactivation du bouton s'enregistrer si tous les inputs ne sont pas OK
{
    $("#register-submit").prop("disabled", true);
});


function checkMailAviability() {
    var username= $("#email_addr_repeat2").val();
    $('#email_status').text('Searching database.');
    if(username != ''){
        $.ajax({
            type: "POST",
            url: "/ajax/verifEmailInscription.php",
            data : "username="+username,
            datatype : String,
            success: function(data) {
                alert(data);
            }
        });

    } else {
        $('#email_status').text('');
    }

};
