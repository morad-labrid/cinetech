const API_KEY = 'f2fd763fba76bb7c9b8ce5ea49552e82';
const url_News = 'https://api.themoviedb.org/3/trending/all/day?api_key=f2fd763fba76bb7c9b8ce5ea49552e82';



$(document).ready(function() {
    fetch(url_News).then(Response => { return Response.json() }).then(data => {
        console.log(data.results);
        var title = '';
        var date = '';
        data.results.forEach(movie => {
            if (movie.name) {
                title = movie.name;
                date = movie.first_air_date;
            } else {
                title = movie.original_title;
                date = movie.release_date;
            }
            var article = ` <a href='pages/element.php?id=${movie.id}&genre=${movie.media_type}'>
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
            $('.articles').append(article);
        });
    }).catch((error) => {
        console.log(error);
    })
})

fetch().then