const params = new URLSearchParams(window.location.search);
link = params.get('id');
const url_News = `https://api.themoviedb.org/3/movie/${link}?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=fr-FR`;

$(document).ready(function() {
    fetch(url_News).then(Response => { return Response.json() }).then(data => {
        console.log();
        var article = ` <div>
                            <img src="${data.poster_path}" alt="Photo du film">
                        </div>
                        <div>
                            <h1>${data.original_title}</h1>
                            <p class="date">${data.release_date} - Action - 2h45</p>
                            <br><br><br>
                            <p>Synopsis:</p>
                            <p class="description">${data.overview}</p>
                            <br><br><br>
                            <p>Réalisateur: ${data.production_companies.name}</p>
                        </div>`;
        $('.movie').append(article);
    }).catch((error) => {
        console.log(error);
    })
})