function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

$("#connexion").click(function() {
    var user = $("#identifiant").val();
    var password = $("#password").val();

    if (user != '' && password != '') {
        $.ajax({
            url: '../api/api.php',
            method: 'GET',
            data: {
                connexion: 'true',
                user: user,
                password: password
            },
            success: function(data) {
                data = JSON.parse(data);
                if (data.login == user) {
                    setCookie("id", data.id, 1)
                    setCookie("user", data.login, 1)
                    setCookie("email", data.email, 1)
                    setCookie("password", data.password, 1)
                    $(location).attr('href', 'profil.php');
                } else($("#response").html(data))
            }
        })
    } else {
        $("#response").html('Remplissez tout les champs')
    }
})

$("#inscription").click(function() {

    var inscriptionUser = $("#inscription-login").val();
    var inscriptionEmail = $("#inscription-email").val();
    var inscriptionPass = $("#inscription-password").val();
    var inscriptionConfirm = $("#inscription-confirm").val();

    if (inscriptionUser != '' && inscriptionEmail != '' && inscriptionPass != '' && inscriptionConfirm != '') {
        if (inscriptionPass == inscriptionConfirm) {
            $.ajax({
                url: '../api/api.php',
                method: 'GET',
                data: {
                    inscription: 'true',
                    user: inscriptionUser,
                    email: inscriptionEmail,
                    password: inscriptionPass
                },
                success: function(data) {
                    data = JSON.parse(data);
                    if (data == 'Bienvenue !') {
                        $(location).attr('href', 'connexion.php');
                    } else($("#response").html(data));
                }
            })
        }
        $("#response").html('Les mots de passes ne sont pas identiques')
    }
    $("#response").html('Remplissez tout les champs')
})

$('#deconnexion').click(function() {
    document.cookie = "id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.cookie = "password=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    $(location).attr('href', '../index.html');
})