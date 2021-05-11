<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/css/style.css">
    <link rel="stylesheet" href="../styles/css/style1.css">
    <link rel="stylesheet" href="../styles/css/header.css">
    <link rel="stylesheet" href="../styles/css/footer.css">
    <title>Document</title>
</head>

<body>
    <?php include'header.php' ?>
    <main class="element">
        <section class="movie">
        </section>
        <section class="acteur">
            <h3 class="titre-acteurs">Acteurs:</h3>
            <br>
            <article>
            </article>
        </section>
        <section class="avis" id="avis">
            <h3>Avis</h3>
            <!--
            <div>
                <p>Par: Morad</p>
                <p>Lorem ipsum dolaperiam at aliquam numquam ea adipisci odio eius harum similique tempore reiciendis consequatur.</p>
            </div>
            <br>
            <div>
                <p>Par: Morad</p>
                <p>Lorem ipsuquam numquam ea adipisci odio eius hariendis consequatur.</p>
            </div>
            <br>
            <div>
                <p>Par: Morad</p>
                <p>Lorem ipsum vident corporis ratione aperiam at aliquam numquam ea adipisci odio eius harum similique tempore reiciendis consequatur.</p>
            </div>
            <br>
            <div>
                <p>Par: Morad</p>
                <p>Lorem i aliquam numquam ea adipisci odio eius harum similique tempore reiciendis consequatur.</p>
            </div>
            <div></div> -->
            <form action="" method="post">
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <br>
                <button>Envoyer</button>
            </form>
        </section>

        <section id="similaire">
            <div class="title">
                <p>Similaire</p>
            </div>
            <div class="articles">
                <article>
                    <div>
                        <img src="../styles/img/film.jpeg" alt="photo du film">
                    </div>
                    <div>
                        <p>Titre PSY4</p>
                        <p>24-03-2020</p>
                    </div>
                </article>
                <article>
                    <div>
                        <img src="https://www.filmoflix.org/uploads/posts/covers/0f262757dfb4095f7556b89f94aabece.jpg" alt="photo du film">
                    </div>
                    <div>
                        <p>Titre PSY4</p>
                        <p>24-03-2020</p>
                    </div>
                </article>
                <article>
                    <div>
                        <img src="https://www.filmoflix.org/uploads/posts/2021-05/1619864795_obqh9.jpg" alt="photo du film">
                    </div>
                    <div>
                        <p>Titre PSY4</p>
                        <p>24-03-2020</p>
                    </div>
                </article>
                <article>
                    <div>
                        <img src="https://www.filmoflix.org/uploads/posts/2021-05/1619860809_v03uy.jpg" alt="photo du film">
                    </div>
                    <div>
                        <p>Titre PSY4</p>
                        <p>24-03-2020</p>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <?php include'footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <script src="../styles/js/scriptelement.js "></script>
    <script src="../styles/js/scriptCommentaire.js "></script>
</body>

</html>