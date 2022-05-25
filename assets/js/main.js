// scripts for the main index.html


// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("sticky");

// Get the offset position of the navbar
var sticky = sticky.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position.
// Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= sticky) {
        sticky.classList.add("sticky")
    } else {
        sticky.classList.remove("sticky");
    }
}

/*
// Array of words
var words = ['Lorem', 'dolor', 'ipsum '];
// Function that executes every 2000 milliseconds
var t = setInterval(function() {
// Random number generator
    var randomNumber = Math.round( Math.random() * (words.length-1) );
    var curWord = (words [randomNumber]);
    // Change the word in the span for a random one in the array of words
        $('#changing').html(curWord);
}, 1500); */