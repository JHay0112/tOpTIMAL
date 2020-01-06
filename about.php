<?php 

    /* 
        about.php
        Author: Jordan Hay
    */

    $title = "About Us";

    include("res/head.php");

?>

<main class="row">
    <aside class="col-5" id="side-img" style="background-image: url('img/about.jpg');"></aside>
    <div class="row">
        <div class="col-5"></div>
        <section id="subpage-content" class="col-7">
            <h1 class="desktop-only">About Us</h1>
            <h1 class="mobile-only">About Us</h1>
            <hr />
            <div class="row">
                <section class="col-7">
                    <h2>Tasmine Palmer</h2>
                    <h4>CEO and Director</h4>
                    <h4>BA, PG Dip.Tchg, Cert.LifeCoach ANZI, PG Cert.Sports Nutrition.</h4>
                    <p>After several years as an advertising writer, education support worker,  nutrition coach, fitness trainer and endurance athlete; Tasmine changed careers to become a secondary English, Health and Media teacher.</p>
                    <p>She currently manages a busy English department in South Canterbury, New Zealand.</p>
                    <p>With a heartfelt passion to help mentor and coach people, Tasmine’s nutrition and lifestyle brand - ATP (authentic Tasmine Palmer) has now merged to become part of the successful business - tOpTIMAL Coaching Ltd. As the CEO, Tasmine enjoys motivating those of all ages to become the best version of themselves.</p>
                </section>
                <aside class="col-5 desktop-only palmer-pic" style="background-image: url('img/tasmine_palmer.jpg');"></aside>
            </div>
            <img class="col-12 mobile-only palmer-pic" src="img/tasmine_palmer.jpg" alt="Tasmine Palmer" />
            <p class="col-12">She says “ I believe that everyday YOU have the power to be amazing. It’s about changing your perceived limits. Motivating and inspiring people is my passion  and taking life coaching to optimal level means I am proud to help you find ways to break your own perceived limits. Setting and achieving goals, and then maintaining lifestyle habits that will optimise your success is just part of our training and/or workshop approach. ​With an array of skills at tOpTIMAL Coaching Ltd - an accredited life coach, keto trainer, optimal living mentor, teacher, wellness trainer and educational tutor, we have the tools to help you to become your optimal self. Personally, I look forward to helping you on your journey, no matter how big, small or challenging.”</p>
        </section>
    </div>
</main>

<?php include("res/foot.php") ?>