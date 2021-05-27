<?php
    include('../class/function.php');
    $wish = new cinetech();

    $selectWish = $wish->selectwish(5);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/css/style.css">
    <link rel="stylesheet" href="../styles/css/header.css">
    <link rel="stylesheet" href="../styles/css/footer.css">
    <title>Document</title>
</head>

<body>
    <?php include'header.php'?>
    <main class="list">
        <!-- <section class="sideBar">
            <div class="filter">
                <p>Filter par gategorie</p>
                <hr>
                <div class="center">
                    <input type="checkbox" name="action" id="action">
                    <label for="action">Action</label>
                    <br>
                    <input type="checkbox" name="animation" id="Aanimation">
                    <label for="animation">Animation</label>
                    <br>
                    <input type="checkbox" name="aventure" id="aventure">
                    <label for="aventure">Aventure</label>
                    <br>
                    <input type="checkbox" name="comedie" id="comedie">
                    <label for="comedie">Comédie</label>
                    <br>
                    <input type="checkbox" name="crime" id="crime">
                    <label for="crime">Crime</label>
                    <br>
                    <input type="checkbox" name="duerre" id="duerre">
                    <label for="duerre">Guerre</label>
                    <br>
                    <input type="checkbox" name="dorreur" id="dorreur">
                    <label for="dorreur">Horreur</label>
                    <br>
                    <input type="checkbox" name="documentaire" id="documentaire">
                    <label for="documentaire">Documentaire</label>
                </div>
            </div>
        </section> -->

        <section class="sidBarRight">
            <div class="articles ">
            <?php

foreach ($selectWish as $key) {
    echo '  <a href="element.php?id='.$key->id_element.'&genre='.$key->type.'">
            <article>
                <div>
                    <img src="https://www.themoviedb.org/t/p/w1280/'.$key->img.'" alt="photo du film ">
                </div>
                <div>
                    <p>'.$key->name.'</p>
                    <p>'.$key->date.'</p>
                </div>
            </article>
            </a>';
}
        
        ?>
            </div>
        </section>
    </main>
    <?php include'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>