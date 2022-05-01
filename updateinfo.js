/* Problem 5 */
let email = document.getElementById("login-mail");
let username = document.getElementById("login-username");

// If the user logged in sucessfully, the username value will be stored
if (sessionStorage.getItem("loginSuccessful")) {
    email.textContent = sessionStorage.getItem("loginUsername") + "@abcxyz.com"; // The email will display the provided username with a cluster "@abcxyz.com"
    username.textContent = sessionStorage.getItem("loginUsername") // The email wil display the username that the user provided
}
