// all scripts for footer.html
// author: Eve Cho, eec5213
// date: Nov 25, 2020

// runs as soon as page loads, every 4 seconds
setInterval(run, 4000);

function run() {
    if (checkDevice() == true) {    // only runs if the device is mobile
        var profiles = document.getElementsByClassName('overlay');
        
        // parses through each element
        for (var i = 0; i < profiles.length; i++) {
            // changes the opacity of each element
            fadeIn(profiles[i]);
        }
        
    }
}

// function used to check if the device is mobile or not
function checkDevice() {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        // true for mobile device
        return true;
        
    } else {
        // false for not mobile device
        return false;
    }
}
    
function fadeIn(person) {
    if (parseFloat(person.style.opacity) > 0.0) {
        person.style.opacity = "0.0";
    } else {
        person.style.opacity = "0.8";
    }
}

function overlay(id) {
    document.getElementById(id).style.opacity = "0.75";
}

function mouseoutevent(id) {
    document.getElementById(id).style.opacity = "0.0";
}