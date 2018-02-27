<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Purchase Receipt</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <PHP><head><link href="ebus.css" rel="stylesheet" type="text/css"></head></PHP>
        <br><br><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;<div id="calcbox">
          
          <h1 align="center">SkyCloud &copy;</h1><br>
          <h2 id="h2">Purchase Receipt</h2><br>
        <?php
        //echo session variables that were set on previous page 
        echo "Total is: $" . $_SESSION["total"] .".<br>";
        echo "Name: " . $_SESSION["name"] .".<br>";
        echo "Email: " . $_SESSION["email"] .".<br>";
        ?>
        
        <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="calculatebutton" onclick="print()">Print your receipt.</button>
    </div>
        
        
        <script>
function print() {
    window.print();
}
</script>
    </body>
    
    
    
</html>
