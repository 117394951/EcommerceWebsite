
<html>
    <head>
        
        
            <title>Select products</title>
            <style type="text/css">
                
            </style>
            <link rel=stylesheet href="../mystylesheets.css" type="text/css">
            
            <!-- jquery--> 
            <script src="https://ajax.googleapps.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type = "text/javascript" src="cost_calc.js"></script>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <PHP><head><link href="ebus.css" rel="stylesheet" type="text/css"></head></PHP>
        <nav>
            <ul>
                <li><a href="/CV And Me/cv.html">About me</a></li>
                <li><a href="/CV And Me/education.html">Education</a></li>
                <li><a href="/CV And Me/experience.html">Experience</a></li>
                <li><a href="/Interests/Sports.html">Sports</a></li>
                <li><a href="/Interests/Travel.html">Travel</a></li>
                <li><a href="/Interests/cloudservices.html">Cloud Services</a></li>
                <li><a href="/ebusiness/ebus1.php">Cloud Services Online Shop</a></li>
            </ul>
        </nav>
        <br/><br/><br/><br/><br/><br/>
        <h2 id="h2">Select a product</h2>
        <br/>
        
            <form method= "POST" action="/ebusiness2.php">
            <div id="calcbox">
                <label for ="salesforce">
                    &nbsp;&nbsp;
                    <input type="radio" id="salesforce" name="product" onClick="disablebtnProceed()"/>
                    &nbsp;&nbsp;SalesForce @ $100
                </label>
                <br/>
                
                <label for ="cloud9">
                    &nbsp;&nbsp;
                    <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                    &nbsp;&nbsp;Cloud 9 @ $200
                </label>
                <br/>
                
                <label for="Aws">
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
                
                <label for="Subtotal">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Subtotal</strong>
                <input type="text" id="subtotal" value="0.00" readonly/>
                 <br/><br/>
                 
                 <label for = "Discount">
                    &nbsp;&nbsp;<strong>Discount @ 5%:</strong>
                    <input type = "text" id ="discount" name ="discount" readonly/>
                    <br><strong> &nbsp;&nbsp;(-Discount)</strong>
                </label>
                <br>
                
                <label for ="vat">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    <strong>Vat @ 10%:</strong>
                    <input type = "text" id ="vat" name ="vat" readonly />
                </label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________<br>
                 <br>
                 
                <label for="Total">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Total:</strong>
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
                <br/><br/>
          
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="buttoncalc" type="submit" id="btnProceed" disable>Add to Shopping Cart</button>
                 <br> 
            </form>
            
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="buttoncalc" onClick="calcSub();calcDisVatTotal()">Calculate Cost</button>
                    
 
                <a href="ebus1.php"><button id="buttoncalc" color="black">Clear Choice</a></button>
        </div>
  
    </body>
</html>
