
<html>
    <head>
        <img src=""
        <title>select products</title>
        
        <!-- jquery--> 
        <script src="https://ajax.googleapps.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type = "text/javascript" src="cost_calc.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <h4>select a product</h4>
    
    <br/>
    
    <form method= "post" action="ebusiness2.php">
    
    <label for ="salesforce">
    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
    salesForce @ $100
    </label>
    
    <br/>
    
            <label for="aws">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
  
              <br/>
        
            <label for="subtotal">
          <input type="text" id="subtotal" value="0.00" readonly/>
  
              <br/>
  
          <label for="total">
          <input type="text" id="total" name="total" value="0.00" readonly/>
  
              <br/>
  
          <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
  
  </form>
  
             <br/>
 
         <button onClick="calcSub()">Calculate Cost</button>
         <a role="button" href="ebus1.php">Clear Choice</a>
  
    </body>
</html>
