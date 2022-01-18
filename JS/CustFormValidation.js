
function custValidate(){
    if(document.CustForm.firstName.value == ""){
        alert("Please provide your first name." );
        document.CustForm.firstName.focus();
        return false;
    }

    if(document.CustForm.lastName.value == ""){
        alert("Please provide your last name.");
        document.CustForm.lastName.focus();
        return false;
    }

    if(document.CustForm.email.value == ""){
        alert("Please provide your email.");
        document.CustForm.email.focus();
        return false;
    }

    if(document.CustForm.Password.value == ""){
        alert("Please provide your password.");
        document.CustForm.Password.focus();
        return false;
    }

    if(document.CustForm.address.value == ""){
        alert("Please provide the address.");
        document.CustForm.address.focus();
        return false;
    }

    if(document.CustForm.telephone.value == "" || isNaN(document.CustForm.telephone.value)){
        alert("Please provide the telephone number.");
        document.CustForm.telephone.focus();
        return false;
    }

    if(document.CustForm.bloodgroup.value == "-1"){
        alert("Please provide your blood group.");
        document.CustForm.bloodgroup.focus();
        return false;
    }

    if(document.CustForm.gender.value == ""){
        alert("Please provide your gender.");
        document.CustForm.gender.focus();
        return false;
    }

    var emailID = document.CustForm.email.value;
    x = emailID.indexOf("@");
    y = emailID.lastIndexOf(".");
    
    if(x<1 || (y - x >2)){
    alert("Please enter a valid Email.");
    document.CustForm.email.focus();
    return false;
} 

return true;
}