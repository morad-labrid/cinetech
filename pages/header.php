<header class="headerphp">
    <div class="div1-header">
        <h3>CINETECH</h3>
        <form class="form1" action="recherche.php" method="GET">
                    <input class="input-recherche1" type="text" name="search" placeholder="Rechercher" id="searchBox">
                    <!-- <input class="input-submit1" type="submit" value="rechercher"> -->
                    <div class="liste-recherche1" id="response1"></div>
        </form>
        <nav>
            <ul>
                <li><a href="../index.html ">Home</a></li>
                <li><a href="film.php ">Films</a></li>
                <li><a href="series.php ">Séries</a></li>
                <?php
                    if(isset($_COOKIE['id'])){
                        echo '<li><a href="profil.php ">Profil</a></li>';
                    }
                    else{
                        echo '<li><a href="connexion.php ">Connexion</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>