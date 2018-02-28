<?php
//start the session
session_start();
?>



<html>
    <head>
        
        
        <title>Enter Details</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <PHP><head><link href="ebus.css" rel="stylesheet" type="text/css"></head></PHP>
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
        <h2 id="h2">Please enter your payment details.</h2>
        <br/>
                    
                
        <div id="calcbox">
            <form method= "POST" action="ebus3.php">    
            <br>
            
                <label for = "name">
                    <strong>Name:</strong>
                    
                    <input type ="text" id="name" name="name"/>
                </label>
                <br/><br/>
                
                <label for "email">
                        <strong>Email:</strong>
                        
                        &nbsp;<input type = "text" id ="email" name="email"/>
                </label>
                <br/><br/> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please enter your payment details.<br>
                <label for="user_number">
                        <strong>Card Number:</strong>
                </label>
                
            
                <input id="user_number" placeholder="Card Number" maxlength="16"/>
                <br><br>
            
                <label for="user_pin">
                        <strong>Pin:</strong>
                </label>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4"/>
                <br/><br/>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button  type="submit" id="btnPurchase" disabled>
                    Proceed with Purchase 
                </button>
             
        </form>
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="thebtn" onClick="validateDetails()">Validate </button><br><br>
    </div>   
    
            <script type="text/javascript" src="ebus2_validator.js"></script>
            
        
        <?php
            //set session variable 
            $_SESSION["total"]= $_POST['total'];
            $_SESSION["name"]= $_POST['name'];
            $_SESSION["email"]= $_POST['email'];
        ?>
        
   
</html>
