/* global $ */
var argSubTotal;
var argDiscount;

function calcSub(){
    
    if(document.getElementbyId('salesforce').checked) { 
                                    argSubTotal = 100;
                                                        }
                                                    
    else if(document.getElementById('aws').checked) {
                                    argSubtotal  = 300;
                                                        }
                                                    
    else if(document.getElementById('cloud9').checked) {
                                    argSubTotal = 200;
                                                        }
                                    
    else {
        argSubTotal = 400;
            }
 
    (calcDVTotal(argSubTotal))
            }
 
 Function DVTotal() {
            var parmSubTotal = (argSubTotal)
            var discountAmt = 0.05;
            var vatAmt = 0.10
            var totalPrice
            
            discountAmt = (parmSubTotal) * (discountAmt) ;
            vatAmt = (parmSubTotal - discountAmt) * vatAmt;
            totalPrice = (parmSubTotal-discountAmt) + (vatAmt);
            display(argSubTotal,discountAmt,vatAmt,totalPrice);
                        }
                        
Function Display(parm1, parm2, parm3, parm4){
    
            document.getElementById("subtotal").value =parm1;
            document.getElementById("discount").value=parm2
            document.getElementById("vat").value=parm3
            document.getElementById("total").value =parm4;
 
 enablebtnProceed();
                                                }
                                                
 
function.enablebtnProceed() {
     $('#btnProceed').prop('disabled', false);
                                }
 
 function.disablebtnProceed() {
     $('#btnProceed').prop('disabled', true):
                                } 