<?php
session_start();
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Purchase Receipt</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        
        <style type="text/css">
            #receipt{
        font-size:26px;
        text-align:center;  
        background-color:#eae6f4;
            }
        </style>
        
    </head>
    <body>
        
        <PHP><head><link href="ebus.css" rel="stylesheet" type="text/css"></head></PHP>
        
            
        <br><br><br>  
        
            <div id="receipt">
                  <h1 align="center">SkyCloud&copy;</h1><br>
                  <h2 id="h2" align="center">Purchase Receipt</h2><br>
                  
                      Order Number: 231839<br>
                      
                        <?php
                        //echo session variables that were set on previous page 
                        echo "Total is: $" . $_SESSION["total"] .".<br>";
                        echo ("Name: ". $name);
                        echo ("<br>A confirmation of your purchase has been sent to your e-mail " . $email);
                        ?>
                        
                    <br><br>
                    Thank you for shopping with SkyCloud&copy;.<br><br>

                    <button class="thebtn" onclick="print()">Print your receipt.</button><br>
                    
                
            </div>
        
        
        
        <script>
                function print() {
                    window.print();
                }
        </script>
        
    </body>
</html>
