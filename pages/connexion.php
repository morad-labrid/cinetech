<?php
if(isset($_COOKIE['id'])){
    header('location:profil.php');
}
?>
<?php require 'head.php'?>
<body>
<?php require 'header.php'?>
<main>
    <div class="titre-connexion">
        Connexion-inscription
    </div>
    <section class="section-connexion">
        <?php
        if(isset($_GET['statut']) == 'inscription'){
            $form = '<div class="cadre-connexion">
                        <div class="form-connexion" action="" method="POST">
                            <div class="ipt">
                                <input class="input-inscription" name="inscription-login" id="inscription-login" type="text" placeholder="Identifiant">
                                <input class="input-inscription" name="inscription-email" id="inscription-email" type="email" placeholder="E-mail">
                                <input class="input-inscription" name="inscription-password" id="inscription-password" type="password" placeholder="Mot de passe">
                                <input class="input-inscription" name="inscription-confirm" id="inscription-confirm" type="password" placeholder="Confirmer MDP">
                                <input class="input-valider" name="inscription" id="inscription" class="input-button" type="submit" value="inscription">
                            </div>
                        </div>';
        $link = '<a href="connexion.php">Connexion</a>';
        }else{
            $form = '<div class="cadre-connexion1">
                        <div class="form-connexion" action="" method="POST">
                            <div id="ipt" class="ipt">
                                <input class="input-inscription" name="identifiant" id="identifiant" type="text" placeholder="Identifiant">
                                <input class="input-inscription" name="password" id="password" type="password" placeholder="Mot de passe">
                                <input class="input-valider" name="connexion" class="input-button" type="submit" value="connexion" id="connexion">
                            </div>
                        </div>';
        $link = '<a href="connexion.php?statut=inscription">Inscription</a>';
        }
        ?>
            <?=$form?>
            <section class="bas-cadre">
                <div class="mdp-oublie">
                    <?=$link?>
                </div>
                <div class="mdp-oublie">
                    <a href="">MDP oubli?? ?</a>
                </div>
            </section>
            <div class="response" id="response"></div>
            </div>
    </section>
</main>
<?php require 'footer.php'?>
</body>
</html>