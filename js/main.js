/*
    js/main.js
    Author: Jordan Hay
*/

// Exit loading screen once page has loaded
function exitLoadingScreen() {
    loadingScreen = document.getElementById("loading-screen"); // Get loading screen
    loadingSpinner = document.getElementById("loading-spinner"); // Get loading spinner
    backgroundImage = document.getElementById("background-image"); // Get background image

    loadingScreen.style.animation = "fade-out 2s 1s forwards ease"; // Fade out
    loadingSpinner.style.animation = "spin 1s infinite linear, fade-out 2s forwards"; // Fade out while still spinning
    backgroundImage.style.animation = "background-zoom 1.5s 1.25s forwards"; // Gentle zoom thing
}