/* global $ */
function validateDetails(){
            var pin;
            var number;
            pin = document.getElementById("user_pin").value;
            pin = document.getElementById("user_number").value;
    
                    if (pin == ""){
                            alert("Please enter your PIN");
                                    }
                    else if (String(pin).length < 4){
                            alert("Please make sure your PIN is accurate");
                                    }
                    else{
                        enablebtnPurchase();
                    }
                    if (number==""){
                        alert("Please enter your Card Number");
                    }
                    else if (String(pin).length<16){
                        alert("Please make sure your Card Number is accurate");
                    }
                    else{
                        enablebtnPurchase();
                    }
                        }

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
                            }

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
                                }