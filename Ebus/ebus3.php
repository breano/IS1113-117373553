<?php
	session_start();
	?>
	
	
	<!DOCTYPE html>
	<html>
	    <head>
	        <title>RECEIPT</title>
	        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
	        
	        <style>
	            .receipt{
	            margin: auto;
	            width: 20%;
	            border: 3px solid grey;
	            border-color: #889675;
	            padding: 10px;
	            }
	        </style>
	        
	    </head>
	    
	    <body>
	        <h1 class="heading">Receipt</h1>
	        <div class="back">
	            <br/><br/>
	            
	  <ul>
	        <li><a href = "../Home/homepage.html">Home</a></li>
	        <li><a class= "active" href = "cv_page11.html">Curriculum Vitae</a></li>
	        <li><a href ="../Interests/sports.html">Sports</a></li>
	        <li><a href ="../Interests/travel.html">Travel</a></li>
	         <li><a href ="../Ebus/ebus1.php">EBusiness</a></li>
	         <li><a href ="../Interests/cloudservices.html">Cloud Services</a></li>
	
	        </ul>
	  
	        </div>
	        <h3 style=" text-align:center;">RECEIPT</h3>
	        <div class="receipt"> 
	            <p><strong>Congratulations on your purchase!!</strong><p>
	            <?php   
	            // Echo session variables that were set on previous page
	            echo "Name: ". $_POST["firstname"];
	            echo " " . $_POST["lastname"] .  "<br/>"; 
	            echo "Email: " . $_POST["email"] . "<br/>";
	            echo "Your total is: $" . $_SESSION["total"] . ".";
	            ?>
	            
	        </div> 
	        <br/><br/><br/><br/>



	    </body>
	</html>
