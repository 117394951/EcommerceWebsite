<?php
session_start();
?>
<!DOCTYPE html>
<html>
        <head>
            <title>RECIEPT</title>
        </head>
        <body>
            <PHP><head><link href="ebus.css" rel="stylesheet" type="text/css"></head></PHP>
            <h2 id="h2">Reciept</h2>
            
            <?php
            //echo session variables that were on the previous page
            echo "Total Price is $" .$_SESSION["total"] . ".";
            echo "Name:" .$_SESSION["email"] . ".";
            ?>
        </body>
</html>