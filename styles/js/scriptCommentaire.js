let page = 1

$(document).ready(function() {

    linkid = params.get('id');

    let url_News = "https://api.themoviedb.org/3/movie/" + linkid + "/reviews?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US";
    getComment(url_News);



    function getComment(url_News) {
        fetch(url_News).then(Response => { return Response.json() }).then(data => {
            // console.log(data.results);
            var username = '';
            var content = '';
            let created = '';
            var commentaires = '';
            data.results.forEach(movie => {
                username = movie.author;
                content = movie.content;
                created = movie.created_at;

                var commentaire = `
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
                commentaires = commentaires + commentaire;

            })
            $('#avis').append(commentaires);
        }).catch((error) => {
            console.log(error);
        })
    }
})