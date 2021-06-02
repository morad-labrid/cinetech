let page = 1

$(document).ready(function() {

    let url_News = 'https://api.themoviedb.org/3/tv/top_rated?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US&page=' + page;
    getTv(url_News);


    $('#btn_next').click(() => {
        page++;
        let url_News = 'https://api.themoviedb.org/3/tv/top_rated?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US&page=' + page;
        getTv(url_News);
    })
    $('#btn_prev').click(() => {
        if (page > 1) {
            page--;
        }
        let url_News = 'https://api.themoviedb.org/3/tv/top_rated?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US&page=' + page;
        getTv(url_News);
    })
})

function getTv(url_News) {
    fetch(url_News).then(Response => { return Response.json() }).then(data => {
        var title = '';
        var date = '';
        let articles = '';
        data.results.forEach(tv => {
            if (tv.name) {
                title = tv.name;
                date = tv.first_air_date;
            } else {
                title = tv.original_title;
                date = tv.release_date;
            }
            var article = ` <a href='element.php?id=${tv.id}&genre=tv'>
                                <article>
                                    <div>
                                        <img src="https://www.themoviedb.org/t/p/w1280/${tv.poster_path}" alt="photo du film ">
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