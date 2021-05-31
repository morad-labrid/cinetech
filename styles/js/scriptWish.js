$(document).ready(function() {
    $.ajax({
        url: '../pages/wish.php',
        method: 'POST',
        data: {
            show: 'show'
        },
        success: function(data) {
            var data = JSON.parse(data);
            data.forEach(element => {
                const url = `https://api.themoviedb.org/3/${element.type}/${element.id_element}?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=fr-FR`;
                fetch(url).then(Response => { return Response.json() }).then(data => {
                    var num = data.runtime;
                    var hours = (num / 60);
                    var rhours = Math.floor(hours);
                    var minutes = (hours - rhours) * 60;
                    var rminutes = Math.round(minutes);
                    var name = '';

                    if (element.type == 'tv') {
                        name = data.original_name;
                        date = data.first_air_date;
                    } else {
                        name = data.original_title;
                        date = data.release_date;
                    }
                    var article = ` <a href="element.php?id=${element.id_element}&genre=${element.type}">
                                        <article>
                                            <div>
                                            <img src="https://www.themoviedb.org/t/p/w1280${data.poster_path}" alt="Photo du film">
                                            </div>
                                            <div>
                                                <p>${name}</p>
                                                <p>${date}</p>
                                            </div>
                                        </article>
                                    </a>`;
                    $('.articles').append(article);
                }).catch((error) => {
                    console.log(error);
                })
            });
        }
    });
})