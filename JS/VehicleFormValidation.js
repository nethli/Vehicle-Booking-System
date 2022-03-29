function VehicleValidate(){
    if(document.vehicleForm.vehiclenumber.value == ""){
        alert("Please provide your vehicle number.");
        document.vehicleForm.vehiclenumber.focus();
        return false;
    }

    if(document.vehicleForm.vehicle.vehiclemodel.value == ""){
        alert("Please provide your vehicle model.");
        document.vehicleForm.vehiclemodel.focus();
        return false;
    }

    if(document.vehicleForm.vehiclemake.value == ""){
        alert("Please provide your vehicle maker.");
        document.vehicleForm.vehiclemake,focus();
        return false;
    }

    if(document.vehicleForm.vehicletype.value ==""){
        alert("Please provide your vehicle type.");
        document.vehicleForm.vehicletype.focus();
        return false;
    }

    if(document.vehicleForm.duration.value ==""){
        alert("Please provide your duration.");
        document.vehicleForm.duration.focus();
        return false;
    }
}