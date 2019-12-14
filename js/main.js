/*
    js/main.js
    Author: Jordan Hay
*/

// Sleep function
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Exit loading screen once page has loaded
function exitLoadingScreen() {
    loadingScreen = document.getElementById("loading-screen"); // Get loading screen
    loadingSpinner = document.getElementById("loading-spinner"); // Get loading spinner
    backgroundImage = document.getElementById("background-image"); // Get background image

    loadingScreen.style.animation = "fade-out 2s 1s forwards ease"; // Fade out
    loadingSpinner.style.animation = "spin 1s infinite linear, fade-out 2s forwards"; // Fade out while still spinning
    backgroundImage.style.animation = "background-zoom 1.5s 1.25s forwards"; // Gentle zoom thing
}

// Slideshow
async function runSlideShow() {
    images = [
        "holly.jpg",
        "elaine.jpg",
        "heaphy.jpg",
        "phaedra.jpg"
    ];

    sideImg = document.getElementById("side-img");

    imageURL = "url('img/";
    imageURL = imageURL.concat(images[0], "')");

    for(var i = 0; i <= images.length; i++) {
        if(i >= images.length) {
            i = 0;
        }
        sideImg.style.animation = "slideshow-slide-out 2s forwards";
        await sleep(2000);
        sideImg.style.backgroundImage = "url(\"img/".concat(images[i], "\")");
        sideImg.style.animation = "slideshow-slide-in 2s forwards";
        await sleep(8000);
    }

}