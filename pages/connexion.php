<?php 
if(isset($_GET['statut']) == 'inscription'){
    $form = '<div class="cadre-connexion">
                <form class="form-connexion" action="" method="">
                    <div class="ipt">
                        <input class="input-inscription" type="text" placeholder="Identifiant">
                        <input class="input-inscription" type="email" placeholder="E-mail">
                        <input class="input-inscription" type="password" placeholder="Mot de passe">
                        <input class="input-inscription" type="password" placeholder="Confirmer MDP">
                        <input class="input-valider" class="input-button" type="submit" value="inscription">
                    </div>
                </form>';
$link = '<a href="connexion.php">Connexion</a>';
}else{
    $form = '<div class="cadre-connexion1">
                <form class="form-connexion" action="" method="">
                    <div class="ipt">
                        <input class="input-inscription" type="text" placeholder="Identifiant">
                        <input class="input-inscription" type="password" placeholder="Mot de passe">
                        <input class="input-valider" class="input-button" type="submit" value="inscription">
                    </div>
                </form>';
$link = '<a href="connexion.php?statut=inscription">Inscription</a>';
}

require 'head.php'?>
<body>
<?php require 'header.php'?>
<main>
    <div class="titre-connexion">
        Connexion-inscription
    </div>
    <section class="section-connexion">
            <?=$form?>
            <section class="bas-cadre">
                <div class="mdp-oublie">
                    <?=$link?>
                </div>
                <div class="mdp-oublie">
                    <a href="">MDP oublié ?</a>
                </div>
            </section>
            </div>
    </section>
</main>
<?php require 'footer.php'?>
</body>
</html>