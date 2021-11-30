function getprice(){

    var VroomFeatures = roomFeatures();
    var VbathroomFeatures = bathroomFeatures();
    var VcheckInFeatures = checkInFeatures();
    var Vprice = parseInt(VroomFeatures) + parseInt(VbathroomFeatures) + parseInt(VcheckInFeatures);
    
    var tax = Vprice * 0.13;
    var totalPrice = Vprice + tax;
    
    document.getElementById("subtotal").innerHTML = "Subtotal: $" + Vprice;
    document.getElementById("tax").innerHTML = "Tax: $" + tax.toFixed(2);
    document.getElementById("total").innerHTML = "Total: $" + totalPrice.toFixed(2);

function roomFeatures() { 
    var dec = document.getElementsByName('roomFeatures'); 
    
    for(i = 0; i < dec.length; i++) { 
        if(dec[i].checked){ 
        var price1 = dec[i].value;      
        }
    } 
    return price1;
} 

function bathroomFeatures() { 
    var dec = document.getElementsByName('bathroomFeatures'); 
    
    for(i = 0; i < dec.length; i++) { 
        if(dec[i].checked){
        var price2 = dec[i].value;                                          
        }
    } 
    return price2;
}

function checkInFeatures() { 
    var dec = document.getElementsByName('checkInFeatures'); 
   
    for(i = 0; i < dec.length; i++) { 
        if(dec[i].checked) {
        var price = dec[i].value;                             
        }
    }      
    return price; 
}
}
