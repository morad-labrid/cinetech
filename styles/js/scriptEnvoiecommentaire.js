$("#envoiecommentaire").click(function() {
    console.log('btn ok');
    var commentaire = $("#commentaire").val();
    if (commentaire != '') {
        $.ajax({
            url: '../pages/element.php',
            method: 'POST',
            data: {
                commentaire: commentaire
            },
            success: function(data) {
                data = JSON.parse(data);
                console.log(data);
                if (data.login == user) {
                    $(location).attr('href', 'profil.php');
                } else($("#response").html(data))
            }
        })
    } else {
        $("#response").html('Remplissez le champs')
    }
})