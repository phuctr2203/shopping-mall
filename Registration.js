function validation(){
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var zip = document.getElementById("zip").value;
    var error_message = document.getElementById("error_message");
    var password = document.getElementById("password").value;
    var retype_password = document.getElementById("retype_password").value;
    var owner = document.getElementById("owner");
    
    error_message.style.padding = "10px";

    const email_regex = /^([a-zA-Z0-9\.-]{3,})@([a-zA-Z0-9\.-]+).([a-z]{2,5})$/;
        
    //Email Validation
    
    if (!email_regex.test(email)){
        text = "Please Enter Valid Email";
        error_message.innerHTML = text;
        return false;
    }

    const phone_regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3,5})$/;

    //Phone Validation
    
    if (!phone_regex.test(phone)){
        text = "Please Enter Valid Phone Number";
        error_message.innerHTML = text;
        return false;
    }

    //First Name Validation
    
    if (firstname.length < 3){
        text = "Please Enter Valid First Name";
        error_message.innerHTML = text;
        return false;
    }

    //Last Name Validation
    
    if (lastname.length < 3){
        text = "Please Enter Valid Last Name";
        error_message.innerHTML = text;
        return false;
    }

    //Address Validation
    
    if (address.length < 3){
        text = "Please Enter Valid Address";
        error_message.innerHTML = text;
        return false;
    }

    //City Validation
    
    if (city.length < 3){
        text = "Please Enter Valid City";
        error_message.innerHTML = text;
        return false;
    }

    const zip_regex = /^([0-9]{4,6})$/

    //Zip Number Validation
    
    if (!zip_regex.test(zip)){
        text = "Please Enter Valid Zip Number";
        error_message.innerHTML = text;
        return false;
    }

    //Password Validation
    
    if (password.length < 8){
        text = "Password Too Short (8 to 20 characters)";
        error_message.innerHTML = text;
        return false;
    }

    else if (password.length > 20){
        text = "Password Too Long (8 to 20 characters)";
        error_message.innerHTML = text;
        return false;
    }

    else if (password.search(/[0-9]/) == -1){
        text = "Password Needs At Least 1 Numberic Value";
        error_message.innerHTML = text;
        return false;
    }

    else if (password.search(/[a-z]/) == -1){
        text = "Password Needs At Least 1 Lower Case Letter";
        error_message.innerHTML = text;
        return false;
    }

    else if (password.search(/[A-Z]/) == -1){
        text = "Password Needs At Least 1 Upper Case Letter";
        error_message.innerHTML = text;
        return false;
    }

    else if (password.search(/[!\@\#\$\%\^\&\*]/) == -1){
        text = "Password Needs At Least 1 Special Character";
        error_message.innerHTML = text;
        return false;
    }

    if (password != retype_password){
        text = "Please Retype The Correct Password";
        error_message.innerHTML = text;
        return false;
    }

    //Form Submit
    
    alert("Form Submitted");
    return true;
}

//Function Shows Radio Store Owner

function showForm(x){
    if (x==0){
        document.getElementById("store-owner").style.display = "block";    
    }
    else{
        document.getElementById("store-owner").style.display = "none";
    }
}
