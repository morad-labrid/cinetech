$(document).ready(function() {
    showcomment();
});

function showcomment() {

    $.ajax({
        url: '../api/api.php',
        method: 'GET',
        data: {
            linkid: params.get('id')
        },
        success: function(data) {
            var data = JSON.parse(data);
            data.forEach(element => {
                var login = '';
                var avis = '';
                let date = '';
                username = element.login;
                content = element.avis;
                created = element.date;


                var commentaires = `<div id='morad'>
                        <div class="username-element">
                        Auteur :
                        </div>
                        <div class="date-element">
                            ${username}
                        </div>
                        <article>
                            <div class="content-element">
                                ${content}
                            </div>
                            <div class="date-element">
                                <p>${created}</p>
                            </div>
                        </article>
                        </div>
                        `;
                $('#avis').append(commentaires);
            })

        }
    })

}

$('#envoiecommentaire').click(function() {
    $('#avis #morad').remove();
    showcomment();
})