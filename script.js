function validateForm(){

    let name =
    document.getElementById("name").value;

    let email =
    document.getElementById("email").value;

    let password =
    document.getElementById("password").value;

    if(name == ""){

        alert("Please enter your name");

        return false;
    }

    if(email == ""){

        alert("Please enter your email");

        return false;
    }

    if(password.length < 6){

        alert("Password must contain at least 6 characters");

        return false;
    }

    return true;
}