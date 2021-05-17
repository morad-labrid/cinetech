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
        </section>
        <form action="" method="post">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <br>
            <button>Envoyer</button>
        </form>
        <section id="similaire">
            <div class="title">
                <p>Similaire</p>
            </div>
            <div class="articles">
            </div>
        </section>
    </main>
    <?php include'footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <script src="../styles/js/scriptelement.js "></script>
    <script src="../styles/js/scriptCommentaire.js "></script>
    <script src="../styles/js/scriptSimilaire.js "></script>
</body>

</html>