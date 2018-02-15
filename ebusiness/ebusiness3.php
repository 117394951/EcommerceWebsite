<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>RECIEPT</title>
</head>
<body>
    <h4>Reciept</h4>
    
    <?php
    //echo session variables that were on the previous page
    echo "Total is " . $_SESSION["total"] . ".";
    ?>
</body>
</html>