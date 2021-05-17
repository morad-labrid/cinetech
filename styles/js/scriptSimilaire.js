linkid = params.get('id');
linktype = params.get('genre');
const url = `https://api.themoviedb.org/3/${linktype}/${linkid}/similar?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=fr-FR&page=1`;




$(document).ready(function() {
    fetch(url).then(Response => { return Response.json() }).then(data => {
        var title = '';
        var date = '';
        var loop = 3;
        data.results.forEach(movie => {
            if (movie.name) {
                title = movie.name;
                date = movie.first_air_date;
            } else {
                title = movie.original_title;
                date = movie.release_date;
            }
            var article = ` <article>
                                <div>
                                <img src="https://www.themoviedb.org/t/p/w1280/${movie.poster_path}" alt="photo du film ">
                                </div>
                                <div>
                                    <p>${title}</p>
                                    <p>${date}</p>
                                </div>
                            </article>`;
            $('#similaire .articles').append(article);
            if (loop == 0) {
                exit;
            }
            loop--;
        });
    }).catch((error) => {
        console.log(error);
    })
})