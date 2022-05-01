/* Problem 5 */
/* Making a function for checking password that the user provide */
function passwordChecking() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (password === "password") { // If the user type the correct password, no notifications pop-up
        sessionStorage.setItem("loginSuccessful", "true"); // Set the value if the password is correct
        sessionStorage.setItem("loginUsername", username); // Set the username value either
        return true;
    } else { // If the user type the wrong password, a notifications will pop-up
        let incorrectPassword = document.getElementById("incorrect");
        incorrectPassword.style.display = "block"; // Notifications display that the password is incorrect, enter password again
        return false;
    }
}