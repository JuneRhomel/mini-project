// chat

function exit() {
    document.getElementById("chat").style.display = "none";
}

function chatBtn() {
    document.getElementById("chat").style.display = "block";
}



// validation

const email = document.querySelector("email");
const password = document.querySelector("#password");

const passwordlError = document.querySelector("#pasword-error");
const emailError = document.querySelector("#email-error");
const submit = document.querySelector("#submit-login");

const errorForm = document.querySelector("#form")

errorForm.addEventListener("submit", function (e) {
    if (email === "" || email === null) {
        emailError.innerText = "Email is Required";
        e.preventDefault();
    }
    if (password.value.length <= 6) {
        passwordlError.innerHTML = "Password must be longer than 6 characters";
        e.preventDefault();
    }
    if (password.value.length >= 20) {
        passwordlError.innerHTML = "Your password is too long";
        e.preventDefault();
    }
    if (password.value === "1234567") {
        passwordlError.innerHTML = "Password 1234567 is not accepted";
        e.preventDefault();
    }

});


function close_btn() {
    document.querySelector(".click-log-in").style.display = "none";
    console.log("asdasdasd")
}
function account() {
    document.querySelector(".click-log-in").style.display = "block";
    console.log("asdasdasd")
}


// tome date 

const countdown = () => {
    const countDate = new Date("November 20, 2022 00:00:00").getTime();
    const now = new Date().getTime();
    const gap = countDate - now;
    // Time works 
    const second = 1000;
    const minuts = second * 60;
    const hour = minuts * 60;
    const day = hour * 24;

    // calculate
    const textDay = Math.floor(gap / day);
    const textHour = Math.floor((gap % day) / hour)
    const textMinuts = Math.floor((gap % day) / minuts)
    const textSecond = Math.floor((gap % minuts) / second)


    // Display in DOM 
    document.querySelector("#day").innerHTML = textDay;
    document.querySelector("#hour").innerHTML = textHour;
    document.querySelector("#minute").innerHTML = textMinuts;
    document.querySelector("#second").innerHTML = textSecond;
};

setInterval(countdown, 1000)


function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}