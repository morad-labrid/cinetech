<?php
    if(!isset($_COOKIE['user'])){
        header('location:../index.html'); 
    }
?>

<?php require 'head.php'?>
<body>
<?php require 'header.php'?>
<main>
    <div class="titre-profil">
        <p class="mes-info">
            Mes informations
        </p>
        <p class="ma-liste">
            Ma liste
        </p>
    </div>
    <section class="case-profil">
        <div class="info">
            <div class="espace">
                <div class="nom-prenom-email">
                    Identifiant : 
                </div>
                <div class="information">
                    <?= $_COOKIE['user'] ?>
                </div>
            </div>
            <div class="espace">
                <div class="nom-prenom-email">
                    E-mail : 
                </div>
                <div class="information">
                    <?= $_COOKIE['email'] ?>
                </div>
            </div>
            <form class="form-button" action="" method="POST">
                <input class="button-info" name="modif-info" type="submit" value="Modifier information">
            </form>
            <div class="form-button">
                <button class="button-info" id="deconnexion" name="deconnect">Déconnexion</button>
            </div>
            <?php
                if(isset($_POST['deconnect'])){
                    $cinetech->deconnect();
                }
            ?>
        </div>
        <div class="liste">
            <div class="image-position">
                <img class="mini-liste" src="../styles/img/image-liste.png" alt="image-de-liste">
            </div>
            <form class="form-button" action="liste.php" method="post">
                <input class="button-liste" type="submit" value="accèder à ma liste">
            </form>
        </div>
    </section>
</main>
<?php require 'footer.php'?>
</body>
</html>