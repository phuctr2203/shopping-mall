/* Checking if the user has logged in or not */
var addToCartBtn = document.getElementById("add");
var BuyNowBtn = document.getElementById("buy");

addToCartBtn.onclick = () => {
    if (sessionStorage.getItem("loginSuccessful")) {
        return true;
    }
    else {
        addToCartBtn.href = "javascript:void(0)";
        alert("You have not logged in/signed up");
        return false;
    }
}

BuyNowBtn.onclick = () => {
    if (sessionStorage.getItem("loginSuccessful")) {
        return true;
    }
    else {
        BuyNowBtn.href = "javascript:void(0)";
        alert("You have not logged in/signed up!");
        return false;
    }
}
