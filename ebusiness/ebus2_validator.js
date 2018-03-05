/* global $ */

/*validating the card number and pin*/
function validateDetails(){
            /*declaring variables*/
            var pin;
            var name;
            var email;
            /*assingin gvalues to our variables*/
            pin = document.getElementById("user_pin").value;
            name = document.forms["myForm"]["name"].value;
            email =document.forms["myForm"]["email"].value;

    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else if (name == "") {
        alert("Please enter your name");
        return false;
    }
    else if (email == "") {
        alert("Please enter your email");
        return false;
    }
    else {
        enablebtnPurchase();
    }
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
                            }

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
                                }