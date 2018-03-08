<!DOCTYPE html>
	<html>
	    <head>
	        <Title>Select Product</Title>
	        <!--jQuery-->
	        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <script type="text/javascript" src="cost_calc.js"></script>        
	        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
	        <style>
	         
	            
	            
	            .Calculate{
	                background-color: #2de5c0; /* Blue */
	                border: none;
	                color: white;
	                padding: 8px 16px;
	                text-align: center;
	                text-decoration: none;
	                display: inline-block;
	                font-size: 14px;
	                margin: 4px 2px;
	                -webkit-transition-duration: 0.5s; /* Safari */
	                transition-duration: 0.8s;
	                clear: left;
	            }   
	            
	            
	                .button1:hover {
	                background-color: #2de5c0;
	                color: white;
	                }
	                
	                
	            .inline {
	                width: 20%;
	                padding: 14px 22px;
	                margin: 8px 0px;
	                box-sizing: border-box;
	            }
	
	        </style>
	    </head>
	    <body>
	        <h1 class="heading">eBusiness</h1>
	            
	             <div class="back">
	  <ul>
	        <li><a href = "../Home/homepage.html">Home</a></li>
	        <li><a class= "active" href = "cv_page11.html">Curriculum Vitae</a></li>
	        <li><a href ="../Interests/sports.html">Sports</a></li>
	        <li><a href ="../Interests/travel.html">Travel</a></li>
	         <li><a href ="../Ebus/ebus1.php">EBusiness</a></li>
	         <li><a href ="../Interests/cloudservices.html">Cloud Services</a></li>
	
	        </ul>
	  
	
	        </div class="form">
	                <br/><br/>
	            <div>
	                <h4>Select a Product</h4>
	                <br/>
	                <article>
	                <form method = "POST" action = "../Ebus/ebus2.php">
	                    <label for="salesforce">
	                        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
	                        salesforce for $100
	                    </label>
	                    
	                    <br/>
	                    
	                    <label for="Cloud9">
	                        <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
	                        Cloud 9 for $200
	                    </label>
	                    
	                    
	                    <br/>
	                                
	                    <label for="aws">
	                        <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
	                        AWS for $300
	                    </label>
	                    <br/>
	                    <label for="Gmail">
	                        <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
	                        Gmail for $400
	                        
	                        
	                    </label>
	                    
	                    <br/>
	                    <br/>
	                    <label for="subtotal">
	                        Sub Total: 
	                        <br/>
	                            <input type="text" id="subtotal" class="inline" readonly/>
	                    </label>
	                    
	                    <br/><br/>
	                    
	                    <label for="discount">
	                        Discount:
	                        <br/>
	                        <input type="text" id="discount" name="total" class="inline" readonly/>
	                    </label>
	                    <br/><br/>
	                    <label for="vat">
	                        VAT:
	                        <br/>
	                        <input type="text" id="vat" name="vat" class="inline" readonly/>
	                    </label>
	                    <br/><br/>
	                    
	                    <label for="Total">
	                    Total:
	                    <br/>
	                        <input type="text" id="total" name="total" class="inline" readonly/>
	                    </label>
	                    <br/>
	                    <a href="../Ebus/ebus2.php">
	                        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
	                    </a>
	                </form>
	                
	                <br/>
	                
	                <button onClick="calcSub()" class="Calculate button1">Calculate Cost</button>
	                <a role="button" href="../Ebus/ebus1.php">Clear Choice</a>
	        </article>
	        </div>
	        <br/><br/><br/><br/>



	    </body>
	</html>
