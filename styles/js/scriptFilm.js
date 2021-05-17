let page = 1

$(document).ready(function() {
    console.log('ok');

    let url_News = 'https://api.themoviedb.org/3/movie/top_rated?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US&page=' + page;
    getMovies(url_News);


    $('#btn_next').click(() => {
        page++;
        let url_News = 'https://api.themoviedb.org/3/movie/top_rated?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US&page=' + page;
        getMovies(url_News);
    })
    $('#btn_prev').click(() => {
        page--;
        let url_News = 'https://api.themoviedb.org/3/movie/top_rated?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US&page=' + page;
        getMovies(url_News);
    })
})

function getMovies(url_News) {
    fetch(url_News).then(Response => { return Response.json() }).then(data => {
        var title = '';
        var date = '';
        let articles = '';
        data.results.forEach(movie => {
            if (movie.name) {
                title = movie.name;
                date = movie.first_air_date;
            } else {
                title = movie.original_title;
                date = movie.release_date;
            }
            var article = ` <a href='element.php?id=${movie.id}&genre=movie'>
                                <article>
                                    <div>
                                        <img src="https://www.themoviedb.org/t/p/w1280/${movie.poster_path}" alt="photo du film ">
                                    </div>
                                    <div>
                                        <p>${title}</p>
                                        <p>${date}</p>
                                    </div>
                                </article>
                            </a>`;
            articles = articles + article;

        })
        $('.articles').html(articles);
    }).catch((error) => {
        console.log(error);
    })
}