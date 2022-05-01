function validation(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");

    var text;
    var message_temp;

    error_message.style.padding = "10px";

    //Name Validation

    if (name.length < 3){
        text = "Please Enter Valid Name";
        error_message.innerHTML = text;
        return false;
    }

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

    //Check Box Validation
 
    var valid = false;
    if(document.getElementById("mon").checked){
        valid = true;
    }
    else if(document.getElementById("tue").checked){
        valid = true;
    }

    else if(document.getElementById("wed").checked){
        valid = true;
    }

    else if(document.getElementById("thu").checked){
        valid = true;
    }

    else if(document.getElementById("fri").checked){
        valid = true;
    }

    else if(document.getElementById("sat").checked){
        valid = true;
    }

    else if(document.getElementById("sun").checked){
        valid = true;
    }

    if (!valid){
        text = "Please Choose A Contact Day";
        error_message.innerHTML = text;
        return false;
    }
    
    //Message Validation

    if(message.length < 50){
        message_temp = 50 - message.length;
        text = "Please Enter More " + message_temp.toString() + " Characters.";
        error_message.innerHTML = text;
        return false;
    }

    else if(message.length > 500){
        message_temp = message.length - 500;
        text = "Please Delete " + message_temp.toString() + " Characters.";
        error_message.innerHTML = text;
        return false;
    }

    alert("Form Submitted");
    return true;
}