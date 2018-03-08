<?php
	// Start the session
	session_start();
	?>
	
	
	
	<!DOCTYPE html>
	<html>
	    <head>
	        <title>Enter Details Below</title>
	        
	        
	        <!--jQuery-->
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <script type="text/javascript" src="ebus2_validator.js"></script>
	        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
	        <style>
	        
	            button{
	                padding: 8px 16px;
	            }
	            
	            
	            .button {
	                background-color: white; 
	                color: black; 
	                border: 2px solid #008cba;
	                padding: 8px 16px;
	                text-align: center;
	                text-decoration: none;
	                display: inline-block;
	                font-size: 16px;
	                margin: 8px 4px;
	                -webkit-transition-duration: 0.7s; /* Safari */
	                transition-duration: 0.7s;
	                cursor: pointer;
	            }
	            
	            
	            .validate:hover {
	               background-color: #008cba;
	                color: white;
	            }
	            
	            
	            input {
	                width: 40%;
	                padding: 12px 20px;
	                margin: 8px 0;
	                box-sizing: border-box;
	            }
	            
	            
	            .name{
	                width:20%;
	                padding: 12px 20px;
	                margin: 8px 0;
	                box-sizing: border-box;
	            }
	            
	        </style>
	    </head>
	    
	    <body>
	        <h1 class="heading">eBusiness</h1>
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
	            <br/><br/>
	        
	        <h4>Please enter your payment details</h4>
	        
	        
	            <form action="../Ebus/ebus3.php" method="POST">
	                    <label for="Name">Full Name: </label><br/>
	                    <input type="text" name="firstname" id="user_name" maxlength="20" class="name">
	                    <input type="text" name="lastname"id="last_name" maxlength=20 class="name">
	                    <br/><br/>
	                    <label for="email">Email:</label>
	                    <br/>
	                    <input type="text" name="email" id="user_Email" maxlength="30" >
	                    <br/><br/>
	                    <label for="user_pin" >PIN:</label>
	                    <br/>
	                    <input type="password" id="user_pin"  maxlength="4" >
	                <a href="../Ebus/ebus3.php">
	                    <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
	                </a>
	              
	            </form>
	            
	            <br/>
	            <button class="button validate" onClick="return validateDetails()">Validate</button>
	            
	            <?php
	            // Set session variables
	            $_SESSION["total"] = $_POST["total"];
	        
	            ?>
	        <br/><br/><br/><br/>



	    </body>
	    
	    
	    
	</html>
