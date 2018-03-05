<!DOCTYPE html>
<html>
    <head>
        
        <title>Select Product</title>
        
        <PHP><link href="ebus.css" rel="stylesheet" type="text/css"></PHP>

        <!-- jquery--> 
        <script type = "text/javascript" src="calc_cost.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    
    <body>
        

        <nav>
            <ul>
                <li><a href="/CVandMe/cv.html">About me</a></li>
                <li><a href="/CVandMe/education.html">Education</a></li>
                <li><a href="/CVandMe/experience.html">Experience</a></li>
                <li><a href="/Interests/Sports.html">Sports</a></li>
                <li><a href="/Interests/Travel.html">Travel</a></li>
                <li><a href="/Interests/cloudservices.html">Cloud Services</a></li>
                <li><a href="/ebusiness/ebushome.php">SkyCloud Services Online Shop</a></li>
                <li><a href="is1113117394951.herokuapp.com">Heroku</a></li>
                <li><a href="https://github.com/117394951/is1113117394951/graphs/commit-activity">Github</a></li>
            </ul>
        </nav>
        
        <br/><br/><br/>
        
        <h2 id="h2">Select a product</h2><br/>
        
        
        <div id="calcbox">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                    <button class="thebtn" onClick="calcSub();">Calculate Cost</button>&nbsp;&nbsp;
                        
     
                    <a href="ebus1.php">Clear Choice</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <br><br>
                    
        </div>
        
        <div id="calcbox">
            <!--creating form-->
            <form method= "POST" action="ebus2.php" onsubmit="return validateForm()">
                
                <!--populating the form with label and input boxs-->
                <label for ="salesforce">
                    &nbsp;&nbsp;
                    <input type="radio" id="salesforce" name="product" onClick="disablebtnProceed()" checked/>
                    &nbsp;&nbsp;SalesForce @ $100
                </label>
                <br/>
                
                <label for ="cloud9">
                    &nbsp;&nbsp;
                    <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                    &nbsp;&nbsp;Cloud 9 @ $200
                </label>
                <br/>
                
                <label for="aws">
                    &nbsp;&nbsp;
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    &nbsp;&nbsp;Amazon Web Services @ $300
                    <br/>
                </label>
                <br/>
                
                <label for ="Gmail">
                    &nbsp;&nbsp;
                    <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
                    &nbsp;&nbsp;Gmail @ $400
                </label>
                <br/><br/>
                
                <label for="subtotal">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Subtotal</strong>
                </label>
                <input type="text" id="subtotal" value="0.00" readonly/>
                 <br/><br/>
                 
                 <label for = "discount">
                    &nbsp;&nbsp;<strong>Discount @ 5%:</strong>
                    <input type = "text" id ="discount" name ="discount" readonly/>
                    <br><strong> &nbsp;&nbsp;(-Discount)</strong>
                </label>
                <br>
                
                <label for ="vat">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    
                    <strong>Vat @ 10%:</strong>
                    <input type = "text" id ="vat" name ="vat" readonly />
                </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________<br>
                 <br>
                 
                <label for="total">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Total:</strong>
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
                <br/><br/><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                
                
                
              <button class="thebtn" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                
            </form>
            
            <br/>
         </div>
                
    </body>
</html>
