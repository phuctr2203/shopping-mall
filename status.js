/* Problem 5 */
/* Checking the status of the account:
 _ If the user has not logged in, when they click on the "Login" button, it will redirect them to the login page.
 _ If the user has logged in successfully before, when they click on the "Login" button, it will redirect them to the profile page.
*/

let accountPage = document.getElementsByClassName("login-account");
// Get the value when user logged in succesfully
if (sessionStorage.getItem("loginSuccessful")) { // If the user move to another pages, when they click on "Login" button, it always return to the profile page
    accountPage[0].href = "Profile.php"
    accountPage[1].href = "Profile.php"
}