<?php
session_start();
include("../class/function.php");
$cinetech = new cinetech();
?>

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
    <script src="https://kit.fontawesome.com/d34f22fe3f.js" crossorigin="anonymous"></script>
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
        <?php
        if(isset($_COOKIE['user'])){
        echo '<form class="envoie-commentaire" action="" method="post">
            <textarea class="commentaire" name="" id="commentaire" cols="100" rows="10"></textarea>
            <br>
            </form>
            <button class="button-envoie" id="envoiecommentaire">Envoyer</button>';
        }

        if(isset($_POST['commentaire'])){
            $commentaire = $_POST['commentaire'];
            $ok = $cinetech->envoyercommentaire($_COOKIE['id'], $_POST['id'], $commentaire, date('Y-m-d H:i:s'));
            echo json_decode($ok);

        }
        ?>
        <div class="response" id="response"></div>
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
    <script src="../styles/js/scriptEnvoiecommentaire.js "></script>
    <!-- <script src="../styles/js/scriptSimilaire.js "></script> -->
</body>
</html>