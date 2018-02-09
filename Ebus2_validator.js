/*glodal$*/

function validateDetails(){
    
    var pin;
    
    pin=document.getElementById("user_pin").value;
    
    if(pin  ==""){
        alert("pleaseenter your PIN")
    }
    else if(String(pin).lenght < 4){
        alert("please make sure your PIN is accurate");
        
    }
    else{
        enablebtnPurxhase();
    }
}

function enablebtnPurxhase(){
    $("#btnPurchase").prop("disable", false)
    
}
function disablebtnPurxhase(){
    $("#btnPurchase").prop("disable", true)
}