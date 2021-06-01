// $(document).onload(function() {
//     console.log('ok');
//     q = $('#searchBox').keyup();

//     let url_Search = 'https://api.themoviedb.org/3/search/multi?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US&query=' + q + '&page=1&include_adult=false';
//     if (q.lenght > 1) {
//         getSearch(url_Search);
//     } else {
//         $('#response1').empty();
//     }
// })

function getSearch(url_Search) {
    fetch(url_Search).then(Response => { return Response.json() }).then(data => {
        var title = '';
        var date = '';
        let articles = '';
        var loop = 5;
        // var data = JSON.parse(data);
        // console.log(data);
        for (i = 0; i <= 4; i++) {
            const movie = data.results[i];
            console.log(movie);
            if (movie.name) {
                title = movie.name;
                date = movie.first_air_date;
            } else {
                title = movie.original_title;
                date = movie.release_date;
            }
            var article = ` <a href='element.php?id=${movie.id}&genre=${movie.media_type}'>
                                <p>${movie.title}<p>
                            </a>`;
            articles = articles + article;
        }
        // data.results.forEach(movie => {
        //     if (movie.name) {
        //         title = movie.name;
        //         date = movie.first_air_date;
        //     } else {
        //         title = movie.original_title;
        //         date = movie.release_date;
        //     }
        //     var article = ` <a href='element.php?id=${movie.id}&genre=${movie.media_type}'>
        //                         <p>${movie.title}<p>
        //                     </a>`;
        //     articles = articles + article;
        //     if (loop == 0) {
        //         exit;
        //     }
        //     loop--;
        //     console.log(loop);
        // })
        $('#response1').html(articles);
    }).catch((error) => {
        console.log(error);
    })
}

$(document).ready(function() {
    $("#searchBox").keyup(function() {
        var query = $('#searchBox').val();
        let url_Search = 'https://api.themoviedb.org/3/search/multi?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US&query=' + query + '&page=1&include_adult=false';

        if (query.length > 1) {
            getSearch(url_Search);
        }
        if (query.length == 0) {
            $("#response1").empty();
        }
    });
});