/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementbyId("salesforce").checked) { 
    argSubTotal = 100;
    
}
 else {
     argSubtotal  = 300;
     
 }
 
 display (argSubTotal);
 
 }
 
 function dispaly(parm1) {
     
 document.getElementById("subtotal").value =parm1 ;
 document.getElementById("total").value =parm1 ;
 
 enablebtnProceed();
 
 }
 
function.enablebtnProceed() {
     $('#btnProceed').prop('disabled', false);
     
 }
 
 function.disablebtnProceed() {
     $('#btnProceed').prop('disabled', true):