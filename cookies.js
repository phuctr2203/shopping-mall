/* Problem 1 */
let cookiesBox = document.querySelector(".cookies-wrap");
acceptBtn = cookiesBox.querySelector("#accept"); // Setting the accept button
declineBtn = cookiesBox.querySelector("#decline"); // Setting the decline button

acceptBtn.onclick = () => {
    //Setting cookies for a week, after that, it will dissapear automatically
    document.cookie = "name=The Infinis Mall;  max-age=" + 60*60*24*7;
    if (document.cookie) {
        cookiesBox.classList.add("hide"); //If the client accept, the cookies box will be hidden
    } 
    else {
        alert("You're not accept!");// Alert an error if cookies can't be set (This happens when you run it directly from VSC without via Live Server, it also happens when you block the cookies)
    }
};

// If the client click the decline button, the cookies box will dissapear but the cookies hasn't been saved yet
declineBtn.onclick = () => {
    document.querySelector(".cookies-wrap").style.display = "none";
}

//Hide the cookies box if the cookies has been set (Click the accept button)
let checkCookie = document.cookie.indexOf("The Infinis Mall");
//If the cookies are set, the cookies will not show anymore except the client delete that cookies
checkCookie != -1 ? cookiesBox.classList.add("hide"): cookiesBox.classList.remove("hide");