<?php 

    /* 
        blog.php
        Author: Jordan Hay
    */

    $title = "Blog";
    $posts_to_load = 10;
    $posts_loaded = 0;

    include("res/head.php");
    include("res/connect.php");

    // By setting these $_GET to be an int SQL injection is not possible
    if(isset($_GET["page"])) {
        $page = max((int) $_GET["page"], 0); // Page number, always rounded to zero or above
    } else {
        $page = 0;
    }

    if(isset($_GET["post"])) {
        $post = max((int) $_GET["post"], 0); // Page number, always rounded to zero or above
    } else {
        $post = NULL;
    }

?>

<main class="row">
    <aside class="col-5" id="side-img" style="background-image: url('img/blog.jpg');"></aside>
    <div class="col-5"></div>
    <section id="subpage-content" class="col-7">
        <h1 class="desktop-only">Blog</h1>
        <h1 class="mobile-only">Blog</h1>
        <hr />

        <?php

            if($post == NULL) {
                try {
                    $sql = "SELECT * FROM `blog_posts` WHERE `post_publish_date` <= NOW() ORDER BY `post_id` DESC LIMIT ".($page * $posts_to_load).", ".(($page + 1) * $posts_to_load).";";
                    $posts = $link->query($sql);

                    while($post = $posts->fetch_assoc()) {
                        print("<article class='col-12 blog-post'>");
                        print("<h2>".$post["post_title"]."</h2>");
                        print("<h3>Written by: ".$post["post_author"]."</h3>");
                        print("<p>Published: ".$post["post_publish_date"]."</p>");
                        print("<hr />");
                        print("<p>".$post["post_content"]."</p>");
                        print("</article>");
                        $posts_loaded++;
                    }
                } catch(\Exception $e) {
                    print("<article class='col-12'>");
                    print("<h3>Something went wrong!</h3>");
                    print("</article>");
                }

                // No results notice
                if($posts_loaded == 0) {
                    print("<h2>No results.</h2>");
                }

                // Back button
                if($page != 0) {
                    print("<a class=\"navigate-result-buttons\" id=\"previous-page-button\" href=\"blog?page=".($page - 1)."\"><span class=\"fa fa-arrow-left\"></span> Previous Page</a>");
                }

                // Next page button
                // If the amount of trails loaded is not the same as the trails to load then do not offer another page
                if($posts_loaded == $posts_to_load) {
                    print("<a class=\"navigate-result-buttons\" id=\"next-page-button\" href=\"blog?page=".($page + 1)."\">Next Page <span class=\"fa fa-arrow-right\"></span></a>");
                }
            } else {
                // This looks risky but I know that $post will always be an int so it cannot be used to SQL inject
                $sql = "SELECT * FROM `blog_posts` WHERE `post_id` = ".$post.";";
                $post = $link->query($sql);
                $post = $post->fetch_assoc();

                if($post["post_title"] != "") {
                    print("<article class='col-12 blog-post'>");
                    print("<h2>".$post["post_title"]."</h2>");
                    print("<h3>Written by: ".$post["post_author"]."</h3>");
                    print("<p>Published: ".$post["post_publish_date"]."</p>");
                    print("<hr />");
                    print("<p>".$post["post_content"]."</p>");
                    print("</article>");
                } else {
                    print("<article class='col-12 blog-post'>");
                    print("<h2>Something went wrong!</h2>");
                    print("</article>");
                }
            }
        ?>
    </section>
</main>

<?php include("res/foot.php") ?>