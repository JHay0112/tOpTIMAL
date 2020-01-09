<?php 

    /* 
        testimonials.php
        Author: Jordan Hay
    */

    $title = "Success Stories";

    include("res/head.php");

?>

<main class="row">
    <aside class="col-5" id="side-img"></aside>
    <div class="col-5"></div>
    <section id="subpage-content" class="col-7">
        <h1 class="desktop-only">Success Stories</h1>
        <h1 class="mobile-only">Success Stories</h1>
        <hr />

        <p><em>"Tasmine is a positive and inspirational influence who poured everything she had into helping me succeed. She understands how to motivate anyone into achieving their goals, no matter how impossible they might appear."</em></p>
        <p class="test-attr"><strong> - Jono, WELLINGTON</strong></p>

        <!-- Apparently onload has to be on the body or an image so it's going here -->
        <img src="/img/elaine.jpg" class="col-12 testimonial-pic mobile-only" alt="Elaine" onload="runSlideShow();" />
        <div class="testimonial-container col-12">
            <section class="col-6">
                <p><em>"Tasmine provided excellent guidance and a training programme specific to what I wanted to achieve. She is encouraging, inspiring and offers continued support and contagious enthusiasm. I feel privileged to have had the support from Tasmine that ensured success with my goals."</em></p>
                <p class="test-attr"><strong> - Elaine, OAMARU</strong></p>
            </section>
            <aside class="col-6 desktop-only" id="elaine"></aside>
        </div>

        <p><em>"Tasmine challenged me to change my outlook into positive reframing. Her workshops have inspired me to be a better person in all areas of my life."</em></p>
        <p class="test-attr"><strong> - Jacob, NELSON</strong></p>

        <p><em>"Tasmine provided clarity, insight and practical tools to use everyday."</em></p>
        <p class="test-attr"><strong> - Marie, CHRISTCHURCH</strong></p>

        <img src="/img/holly.jpg" class="col-12 testimonial-pic mobile-only" alt="Holly" />
        <div class="testimonial-container col-12">
            <section class="col-6">
                <p><em>As a motivator, coach and human being, Tasmine is completely exceptional in every sense. It is rare to find somebody with such assurance, empathy and authenticity."</em></p>
                <p class="test-attr"><strong> - Holly, GOLDEN  BAY</strong></p>
            </section>
            <aside class="col-6 desktop-only" id="holly"></aside>
        </div>
    </section>
</main>

<?php include("res/foot.php") ?>