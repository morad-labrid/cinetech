
<?php 
require 'head.php';
?>
<body>
<?php
require 'header.php';
?>
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
                    Nom : 
                </div>
                <div class="information">
                    Ziane
                </div>
            </div>
            <div class="espace">
                <div class="nom-prenom-email">
                    Prénom : 
                </div>
                <div class="information">
                    Nadir
                </div>
            </div>
            <div class="espace">
                <div class="nom-prenom-email">
                    E-mail : 
                </div>
                <div class="information">
                    machin@machin.com
                </div>
            </div>
            <input class="button-info" type="submit" value="modifier information">
        </div>
        <div class="liste">
            <div class="image-position">
                <img class="mini-liste" src="../styles/img/image-liste.png" alt="image-de-liste">
            </div>
            <input class="button-liste" type="submit" value="accèder à ma liste">
        </div>
    </section>
</main>