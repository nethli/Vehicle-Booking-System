function DriverValidate(){
    
if(document.DriverForm.firstName.value == ""){
        alert("Please provide your first name." );
        document.DriverForm.firstName.focus();
        return false;
    }

    if(document.DriverForm.lastName.value == ""){
        alert("Please provide your last name.");
        document.DriverForm.lastName.focus();
        return false;
    }

    if(document.DriverForm.email.value == ""){
        alert("Please provide your email.");
        document.DriverForm.email.focus();
        return false;
    }

    if(document.DriverForm.Password.value == ""){
        alert("Please provide your password.");
        document.DriverForm.Password.focus();
        return false;
    }

    if(document.DriverForm.address.value == ""){
        alert("Please provide the address.");
        document.DriverForm.address.focus();
        return false;
    }

    if(document.DriverForm.telephone.value == "" || isNaN(document.DriverForm.telephone.telephone.value)){
        alert("Please provide the telephone number.");
        document.DriverForm.telephone.focus();
        return false;
    }

    if(document.DriverForm.license.value == "-1"){
        alert("Please provide your blood group.");
        document.DriverForm.license.focus();
        return false;
    }

    if(document.DriverForm.gender.value == ""){
        alert("Please provide your gender.");
        document.DriverForm.gender.focus();
        return false;
    }

    var emailID = document.DriverForm.email.value;
    x = emailID.indexOf("@");
    y = emailID.lastIndexOf(".");
    if(x<1 || (y - x >2)){
        alert("Please enter a valid Email.");
        document.DriverForm.email.focus();
        return false;
    } 
    return true;

}

