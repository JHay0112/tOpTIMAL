<?php 

    /* 
        contact.php
        Author: Jordan Hay
    */

    $title = "Contact Us";

    include("res/head.php");

?>

<main class="row">
    <aside class="col-5" id="side-img" style="background-image: url('img/contact.jpg'); background-position: center;"></aside>
    <div class="col-5"></div>
    <section id="subpage-content" class="col-7">
        <h1 class="desktop-only">Contact Us</h1>
        <h1 class="mobile-only">Contact Us</h1>
        <hr />

        <aside id="logos" class="col-12 contact">
            <img id="toptimal-logo" src="/img/logo.png" alt="tOpTIMAL Logo" />
            <img id="atp-logo" src="/img/atp_logo.jpg" alt="ATP Logo" />
        </aside>

        <h2>Get on track. Change your limits today. </h2>

        <p>tOpTIMAL coaching Ltd is tailored to your needs. We pride ourselves on our flexible, adaptive programmes and workshops. We understand that changing your limits can be challenging and we embrace helping you find your optimal self. Get in touch for more information, or feel free to to tell us your own success stories. Motivation and inspiration are what we thrive on.</p>

        <h3>Contact us here: </h3>
        <p><span class="fab fa-twitter"></span> <a href="https://twitter.com/taz111" target="_blank">@taz111</a> and <a href="https://twitter.com/ToptimalL" target="_blank">@ToptimalL</a></p>
        <p><span class="fab fa-facebook"></span> <a href="https://www.facebook.com/toptimalcoaching/" target="_blank">@toptimalcoaching</a></p>
        <p><span class="fas fa-envelope contact"></span> tasminepalmer@gmail.com</p>

        <h3>Or use our contact form: </h3>
        <form action="https://formspree.io/tasminepalmer@gmail.com" method="POST" id="contact">
            <input type="text" name="Name" placeholder="Name" />
            <input type="email" name="Reply to" placeholder="Email (e.g. example@domain.com)" />
            <textarea id="message" type="text" name="Message" placeholder="Message" rows="5"></textarea>
            <input type="submit" value="Send" />
        </form>
    </section>
</main>

<?php include("res/foot.php") ?>