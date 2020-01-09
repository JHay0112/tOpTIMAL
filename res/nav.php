<?php 

    /* 

        res/nav.php 
        Author: Jordan Hay

    */

    $found_active_page = false; // Flag if page is expected or not

    function checkIfActive($expected_title) {
        if($GLOBALS["title"] == $expected_title) {
            print("active");
            $GLOBALS["found_active_page"] = true;
        }
    }
    
?>

<nav id="page-nav">
    <a href="/" class="fas fa-home <?php checkIfActive("Home"); ?>">
        <span class="nav-text">Home</span>
    </a>
    <a href="/about" class="fas fa-user-check <?php checkIfActive("About Us"); ?>">
        <span class="nav-text">About Us</span>
    </a>
    <a href="/services" class="fas fa-hands-helping <?php checkIfActive("What we can offer"); ?>">
        <span class="nav-text">What we can offer</span>
    </a>
    <a href="/online-training" class="fas fa-sign-in-alt <?php checkIfActive("Online tOpTIMAL Training"); ?>">
        <span class="nav-text">Online tOpTIMAL Training</span>
    </a>
    <a href="/keto" class="fas fa-utensils <?php checkIfActive("KetOPTIMAL"); ?>">
        <span class="nav-text">KetOPTIMAL</span>
    </a>
    <a href="/blog" class="fab fa-discourse <?php checkIfActive("Blog"); ?>">
        <span class="nav-text">Blog</span>
    </a>
    <a href="/testimonials" class="fas fa-file-signature <?php checkIfActive("Success Stories"); ?>">
        <span class="nav-text">Success Stories</span>
    </a>
    <a href="/vacancies" class="fas fa-users-cog <?php checkIfActive("Vacancies"); ?>">
        <span class="nav-text">Vacancies</span>
    </a>
    <a href="/contact" class="fas fa-edit <?php checkIfActive("Contact"); ?>">
        <span class="nav-text">Contact</span>
    </a>
</nav>