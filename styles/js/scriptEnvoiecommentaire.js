$(document).ready(function() {
    const params = new URLSearchParams(window.location.search);
    linkid = params.get('id');
    linktype = params.get('genre');

    $("#envoiecommentaire").click(function() {
        console.log('btn ok');
        var commentaire = $("#commentaire").val();
        if (commentaire != '') {
            $.ajax({
                url: '../pages/element.php',
                method: 'POST',
                data: {
                    id: linkid,
                    commentaire: commentaire
                },
                success: function(data) {
                    console.log(ok);
                    data = JSON.parse(data);
                    $("#response").html(data)
                }
            })
        } else {
            $("#response").html('Remplissez le champs')
        }
    });
})