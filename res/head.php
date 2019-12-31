<?php
    /* 
        res/head.php
        Author: Jordan Hay
    */

    if(!isset($title)) {
        $title = "Unknown Page";
    }
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <!-- Meta Data -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Content: tOpTIMAL Coaching Ltd., Site: Jordan Hay" />
        <meta name="keywords" content="toptimal coaching ltd., toptimal, coaching, life coaching, life, keto, ketogenic, ketoptimal, optimal, Palmer, Tasmine, Tasmine Palmer, NCEA, workshops, tutor, blog" />

        <!-- Title -->
        <title><?php print($title) ?> - tOpTIMAL Coaching Ltd.</title>

        <!-- Links -->
        <link rel="icon" href="img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body onload="exitLoadingScreen()">

        <div id="loading-screen">
            <img id="loading-spinner" src="img/favicon.png" alt="Loading Spinner" />
        </div>

        <header>
            <img src="img/logo.png" alt="Logo" />
        </header>