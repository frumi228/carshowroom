<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Cart</title>
        <link rel="icon" href="slidimage/cc.png" type="image/x-icon">
		<!--
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        !-->
        
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
       
       <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" type="text/css" href="css/style6.css" />
        <link rel="stylesheet" href="cart/stylesheet.css" type="text/css" media="screen" />

<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 41px;
	top: 877px;
	width: 348px;
	height: 63px;
	z-index: 1;
	font-family: Arial, clean, sansSerif;
	background-color: #6CF;
	padding-left: 5px;
	padding-top: 2px;
}

.pos{
	position:fixed;}
.error {color: #FF0000;}

</style>


        
        
        
     <script type="text/javascript" language="javascript">
 function validate()
{
	var Name = document.dataform.name.value;	
	var Email= document.dataform.txtemail.value;
	var Grade=document.dataform.txtgrade.value;
	var Marks=document.dataform.txtmarks.value;
	var Age=document.dataform.txtage.value;

	if(
		   (Grade=="") 
		|| (Age =="")
		|| (document.getElementById('Year').selectedIndex==0)
		
		|| (document.getElementById('cid').selectedIndex==0)
		|| (Marks=="")
		|| (Name==""))
{
	alert(" Failure") ;
}
else {
	alert(" Success") ;
}
}
    function checkE()
{
	if(!document.dataform.txtemail.value.match(/\S+@\S+\.\S+/))
	{
		document.getElementById('eid').style.backgroundColor="red"	;
	}
	else{
		document.getElementById('eid').style.backgroundColor="green";

	}
}
</script>    
    </head>
    
 
    <body id="page">
    
   
    
     
   			
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h4>AutoWorld at your Home</h4></div></li>
            <li><span>Image 02</span><div><h4>Just a Step Ahead</h4></div></li>
            <li><span>Image 03</span><div><h4>Drive your own Car</h4></div></li>
            <li><span>Image 04</span><div><h4>Book Your Car Now</h4></div></li>
            <li><span>Image 05</span><div><h4>Service at your door</h4></div></li>
            <li><span>Image 06</span><div><h4>All New 2015 Series</h4></div></li>
        </ul>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
             <span>
             <a href="#" onClick="alert('Warning! Network Connection Error.!!')">Find a car</a>
                </span>
                <span class="right">
                <a href="#" target="_blank" class="active">Register</a>
                <a href="#" target="_blank">&copy;AtoWorld</a>
                <a href="#"><strong>Show my cart</strong></a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            
            	<div id="tab" border="solid" class="pos">
                <a href="index.html" class="pos">
                <img src="slidimage/logo22.png" width="280" id="logo" class="ajaxloader"></a>
                </div>
           
            <header>
            	<div id="sub" >
               <!-- <h1><span id="h3" class="pos">AutoWorld</span></h1>!-->
                <h2 class="pos" id="h2">Online Drive-in</h2>
                </div>
              
              <table class="reg" border="0">
              <tr>
             
    				
   	  					
              <td>
               <nav><a href="index.html"><div class="pos">Home</div><br></a></nav>
					<div id="content">



		<h1 align="left">Register Your Vehicle</h1>
    <form name="dataform" action="userinfo.php" method="post">
 
    <fieldset>
        <legend>User Account</legend>
         <span class="cardrop">
            <label for="fullname" class="block">Car Name<small>(Please Select your car)</small></label>
            <!--<input type="text" name="carname" id="carname" placeholder="car name" />-->
            <select name="carname" id="carname" >
            <option value="" name="">Select Your Car</option>
  <option value="city" name="city">Honda City</option>
  <option value="civic"  name="civic">Honda Civic</option>
  <option value="crv"  name="crv"> Honda crv</option>
  <option value="mehran"  name="mehran">Suzuki Mehran</option>
    <option value="alto"  name="alto" >Suzuki Alto</option>
      <option value="cultus"  name="cultus" >Suzuki Cultus</option>
        <option value="swift"  name="swift" >Suzuki Swift</option>
          <option value="corolla"  name="corolla" >Toyota Corolla</option>
            <option value="camry"  name="camry" >Toyota Camry</option>
              <option value="fortuner"  name="fortuner" >Toyota Fortuner</option>
                <option value="vitz"  name="vitz" >Toyota Vitz</option>
</select>

			</span>
        	<span>
            <label for="email" class="block">E-mail*<small>(abcd@example.com)</small></label>
            <input type="text" name="txtemail" id="eid" onChange="checkE()" required />
           </span>
          
    </fieldset>
            
    <fieldset>
            	<legend>CONTACT DETAILS</legend>
            <span>          
             <input type="radio" name="gender" id="man" value="man" /> 
             <label for="man">Persnol</label>
             <input type="radio" name="gender" id="woman" value="woman" required /> 
             <label for="woman">Business</label>
            </span>
            <br>
            <br>
             <span>
            <label for="fullname" class="block">Name*</label>
            <input type="text" name="name" id="name" required  />
			</span>
             <span>
            <label for="fullname" class="block">Surname*</label>
            <input type="text" name="surname" id="surname" />
			</span>
             <span>
            <label for="fullname" class="block">Address*</label>
            <input type="text" name="address" id="address" size="50%" /><br>
           
			</span>
             <span>
            <label for="fullname" class="block">Post Code*</label>
            <input type="number" name="postcode" id="postcode" />
			</span>
            <span>
            <label for="fullname" class="block">City*</label>
            <input type="text" name="city" id="town" />
			</span>
      <span>
             <label for="fullname" class="block">Country*</label>
              <label for="fullname" class="block">Pakistan</label>
      </span>
     
   				
       
                <br><br>
                
      
      			<span>
      			<label for="fullname" class="block">Telephone(mobile)*</label>
                 <input type="number" name="telnumber" id="telnumber" />
                </span>
                <span>
                
                <label for="fullname" class="block">Telephone(other)</label>
    			 <input type="number" name="othenumber" id="othenumber" />
    			</span>
                <br>
                <br>
                </fieldset>
                 <fieldset>
        <legend>Payment</legend>
         <span class="crdtype">          
             <input id="mastercard" name="cardtype" type="radio"/>
			<label for="mastercard"><img src="logo_brands/ewMjaHv.png"/>&nbsp;&nbsp;Mastercard</label>
             &nbsp;&nbsp;&nbsp;&nbsp;<input id="amex" name="cardtype" type="radio"/>
			<label for="amex"><img src="logo_brands/D2eQTim.png"/>&nbsp;&nbsp;Discover</label>
             &nbsp;&nbsp;&nbsp;&nbsp;<input id="visa" name="cardtype" type="radio"/>
			<label for="visa"><img src="logo_brands/3LmmFFV.png"/>&nbsp;&nbsp;VISA</label>
            </span>
            <br>
            <br>
        	<span>
            <label for="#" class="block">Card Number</label>
            <input type="text" name="email" id="email" />
             <!--<span class="error">* <?php echo $emailErr;?></span>-->
			</span>
            <span>
            <label for="fullname" class="block">Security Code</label>
            <input type="password" name="password" id="password" />
			</span>
            <span>
            <label for="fullname" class="block">Name on Card</label>
            <input type="text" name="password" id="repassword" placeholder="Exact Name on Card" />
            </span>
    			<br>
                <br>
                <span>
                 <input name="vehiclee" type="checkbox" id="car" />
                  <label for="car"> I wish to recive AutoWorld news on my e-mail</label>
              </span>
              <br>
              <span>
              <input type="checkbox" name="vehicle" id="ship" /> 
              <label for="airplane">I accept the privacy statement</label>
                </span>
                
    </fieldset>
                <span>
              <button type="submit" name="submit" id="send" onClick="validate()"/>Book Your Car 
               </button>
               
               </span>

    </fieldset>
</form>

</div><!-- content -->
 
            
              </td>
              </tr>
              </table>
              
              
              
              
            </header>
        </div>
    </body>
</html>