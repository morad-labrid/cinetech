var linkid = params.get('id');

$.ajax({
    url: '../api/api.php',
    method: 'GET',
    data: {
        linkid: params.get('id')
    },
    success: function(data) {
        console.log(data);
        var data = JSON.parse(data);
        data.forEach(element => {
            var login = '';
            var avis = '';
            let date = '';
            username = element.login;
            content = element.avis;
            created = element.date;
            console.log(username);

            var commentaires = `
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
                    `;
            $('#avis').append(commentaires);
        })

    }
})


// function getComment() {

//     $.ajax({

//     })
//     var login = '';
//     var avis = '';
//     let date = '';
//     data.results.forEach(url_News => {
//         username = login;
//         content = avis;
//         created = date;

//         var commentaire = `
//                     <div class="username-element">
//                     Auteur :
//                     </div>
//                     <div class="date-element">
//                         ${username}
//                     </div>
//                     <article>
//                         <div class="content-element">
//                             ${content}
//                         </div>
//                         <div class="date-element">
//                             <p>${created}</p>
//                         </div>
//                     </article>
//                     `;
//         commentaires = commentaires + commentaire;

//     })
//     $('#avis').html(commentaires);
// }