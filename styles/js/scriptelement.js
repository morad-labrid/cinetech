const params = new URLSearchParams(window.location.search);
linkid = params.get('id');
linktype = params.get('genre');
const url_News = `https://api.themoviedb.org/3/${linktype}/${linkid}?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=fr-FR`;
const url_acteur = `https://api.themoviedb.org/3/${linktype}/${linkid}/credits?api_key=f2fd763fba76bb7c9b8ce5ea49552e82&language=en-US`;

$(document).ready(function() {
    fetch(url_News).then(Response => { return Response.json() }).then(data => {
        var num = data.runtime;
        var hours = (num / 60);
        var rhours = Math.floor(hours);
        var minutes = (hours - rhours) * 60;
        var rminutes = Math.round(minutes);

        if (data.name) {
            title = data.name;
            date = data.first_air_date;
            var time = '';
        } else {
            title = data.original_title;
            date = data.release_date;
            var time = '- ' + rhours + "h" + rminutes;
        }

        var text = '';
        if (getCookie('user')) {
            text = '<i class="far fa-heart"></i> Ajouter a ma liste';
            console.log('cookie oui');
        }

        var titre = title.replace(/'/g, "\\'");
        var article = ` <div>
                            <img src="https://www.themoviedb.org/t/p/w1280${data.poster_path}" alt="Photo du film">
                        </div>
                        <div class="cadre-description">
                            <h1>${title}(${linktype})</h1>
                            <p class="date">${date} - ${data.genres[0].name} ${time}</p>
                            <br><br><br>
                            <p>Synopsis:</p>
                            <p class="description">${data.overview}</p>
                            <br><br><br>
                            <p>Réalisateur: ${data.production_companies[0].name}</p>
                            <p class="addToListe" onclick="addwish('` + linkid + `','` + linktype + `')">${text}<p>
                        </div>`;
        $('.movie').append(article);
    }).catch((error) => {
        console.log(error);
    })


    fetch(url_acteur).then(Response => { return Response.json() }).then(data => {
        for (let i = 0; i < 9; i++) {
            const movie = data.cast[i];
            var article = ` <nav>
                                <div style="background-image: url(https://www.themoviedb.org/t/p/w1280/${movie.profile_path});"></div>
                                <p class="nom-acteur">${movie.original_name}</p>
                            </nav>`;
            $('.acteur article').append(article);
        }
    }).catch((error) => {
        console.log(error);
    })



})

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function addwish(id, type) {
    $.ajax({
        url: '../pages/element.php',
        method: 'GET',
        data: {
            addwish: 'addwish',
            idFilm: id,
            typeFilm: type
        },
        success: function(data) {
            $(location).attr('href', 'liste.php');
        }
    })
}