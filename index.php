<?php 

    /* 
        index.php
        Author: Jordan Hay
    */

    $title = "Home";

    include("res/head.php");

?>

<header class="index">
    <img src="img/logo.png" alt="Logo" />
</header>

<div id="background-image" class="index"></div>

<main class="index">
    <section id="home-page" class="col-12">
        <img src="img/slogan.png" id="slogan" class="desktop-only" alt="Slogan" />
        <img src="img/slogan.png" class="mobile-only" alt="Slogan" />
        <img src="img/atp_logo.png" id="atp" class="desktop-only" alt="ATP Logo" />
    </section>
</main>

<?php include("res/foot.php") ?>