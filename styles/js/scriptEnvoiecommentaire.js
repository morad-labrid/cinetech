$(document).ready(function() {
    const params = new URLSearchParams(window.location.search);
    linkid = params.get('id');
    linktype = params.get('genre');

    $("#envoiecommentaire").click(function() {
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
                    data = JSON.parse(data);
                    $("#response").html(data)
                    $("#commentaire").empty();
                }
            })
        } else {
            $("#response").html('Remplissez le champs')
        }
    });
})