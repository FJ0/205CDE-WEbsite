'use strict';
function authLogin() {
    var user_textbox = document.getElementById("username");
    var pass_textbox = document.getElementById("password");
    var userText = user_textbox.value;
    var passText = pass_textbox.value;
    if (userText == "Guest" && passText == "Guest") {
        window.location.href = "static/index.html";
    }
    else {
        window.alert("Invalid username or password. Please try again.");
    }
    user_textbox.value = "";
    pass_textbox.value = "";
    return false;
}
var button = document.getElementById("login_button");
button.onclick = authLogin;
