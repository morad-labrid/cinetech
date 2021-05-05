
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
                    <?= $_SESSION['login'] ?>
                </div>
            </div>
            <div class="espace">
                <div class="nom-prenom-email">
                    E-mail : 
                </div>
                <div class="information">
                    <?= $_SESSION['email'] ?>
                </div>
            </div>
            <form class="form-button" action="" method="POST">
                <input class="button-info" name="modif-info" type="submit" value="Modifier information">
            </form>
            <form class="form-button" action="" method="POST">
                <input class="button-info" name="deconnect" type="submit" value="Déconnexion">
            </form>
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
            <form class="form-button" action="" method="">
                <input class="button-liste" type="submit" value="accèder à ma liste">
            </form>
        </div>
    </section>
</main>
<?php require 'footer.php'?>
</body>
</html>