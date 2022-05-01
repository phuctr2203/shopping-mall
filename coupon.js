function discountCode() {
    let total = document.getElementById("cart-total-b").value;
    let code = document.getElementById("promo").value;
    let new_total;
    let coupon_1 = "COSC2430-HD";
    let coupon_2 = "COSC2430-DI";
    
    var check_1 = code.localeCompare(coupon_1);
    var check_2 = code.localeCompare(coupon_2);

    if (check_1 == "0") {
        new_total = parseFloat(total) * 0.8;
        document.getElementById("cart-total-b").innerHTML = parseFloat(new_total);
    }
    else if (check_2 == "0") {
        new_total = parseFloat(total) * 0.9;
        document.getElementById("cart-total-b").innerHTML = parseFloat(new_total);
    }
    else if (code == "") {
        alert("Please enter a promotion code!")
    }
    else {
        alert("Invalid promotion code!")
    }
}