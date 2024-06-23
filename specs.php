
<html>
  <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title> AutoWorld</title>
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
        
        
        
	
    </head>
    
    
<body id="page">
    
   			<!-- <div class="splash">
    		<img src="slidimage/8.jpg">
    		<li><span>Image 12</span><div><h4>AutoWorld at your Home</h4></div></li>
      </div>
      	<audio controls autoplay>
  			<source src="horse.ogg" type="audio/ogg">
  			<source src"" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio>-->
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
              <a href="#">Find a car </a>
              </span>
                <span class="right">
                <a href="Register.php" target="_blank">Register</a>
                <a href="#" target="_blank">&copy;AtoWorld</a>
                <a href="#">Show my cart</a>
                </span>
                <div class="clr"></div>
        </div><!--/ Codrops top bar -->
            
            	<div id="tab" border="solid">
                <img src="slidimage/logo22.png" width="280" id="logo" class="ajaxloader">
                </div>
           
            <header>
            	<div id="sub">
                <!--<h1><span>AutoWorld</span></h1>!-->
                <h2>Online Drive-in</h2>
                </div>
               		
               
               
              <div class="hor">
               <table border="0" class="hor" >
               
               <tr>
               
               		<td><p><a href="index.html">Home</a></p></td>
                    
					<td><p><a href="showroom.html">Showroom</a></p></td>
                    
			<td><p><a href="contact_us.html">Contact Us</a></p></td>
					<td><p><a href="about_us.html">About Us</a></p></td>
					
				
                </tr>
                </table>
				</div>
                
                <div class="hr">
                	<hr></hr>
                </div>


 </header>
        

<div class="classic">
<?php

       
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {  die('Could not connect: ' . mysql_error());  }
mysql_select_db("carshow", $con);

 if(isset($_POST['Corolla']))
 {
$sql="SELECT * from specs WHERE car_id = 'cr01' "  ;
$link='gallery/corolla.html';
 $a='Toyota Carolla';
 }
  if(isset($_POST['camry']))
   {
$sql="SELECT * from specs WHERE car_id = 'ty01' "  ;
$link='gallery/camry.html';
 $a='Toyota Camry';
 }
   if(isset($_POST['fortuner']))
   {
$sql="SELECT * from specs WHERE car_id = 'ty02' "  ;
 $link='gallery/fortuner.html';
 $a='Toyota Fortuner';
 }
    if(isset($_POST['vitz']))
   {
$sql="SELECT * from specs WHERE car_id = 'ty03' "  ;
 $link='gallery/vitz.html';
 $a='Toyota Vitz';
 }
   if(isset($_POST['civic']))
   {
$sql="SELECT * from specs WHERE car_id = 'hc01' "  ;
 $link='gallery/civic.html';
 $a='Honda Civic';
 }
   if(isset($_POST['city']))
   {
$sql="SELECT * from specs WHERE car_id = 'hc02' "  ;
 $link='gallery/city.html';
 $a='Honda City';
 }
   if(isset($_POST['crv']))
   {
$sql="SELECT * from specs WHERE car_id = 'hc03' "  ;
$link='gallery/crv.html';
 $a='Honda CRV';
 }
  if(isset($_POST['mehran']))
   {
$sql="SELECT * from specs WHERE car_id = 'sm01' "  ;
$link='gallery/mehran.html';
 $a='Suzuki Mehran';
 }
  if(isset($_POST['alto']))
   {
$sql="SELECT * from specs WHERE car_id = 'sa01' "  ;
$link='gallery/alto.html';
 $a='Suzuki Alto';
 }
  if(isset($_POST['swift']))
   {
$sql="SELECT * from specs WHERE car_id = 'ss01' "  ;
$link='gallery/swift.html';
 $a='Suzuki Swift';
 }
  if(isset($_POST['cultus']))
   {
$sql="SELECT * from specs WHERE car_id = 'sc01' "  ;
$link='gallery/cultus.html';
$a='Suzuki Cultus';

 }
 
$result = mysql_query($sql);

echo "<div class='cardesc'>$a</div>";
echo "<table  class='specs' id='spect' border='0' >
<tr>
<th>Engine</th>
</tr>
<tr>
<th>Horse Power</th>
</tr>
<tr>
<th>Torque</th>
</tr>
<tr>
<th>Transmission</th>
</tr>
<tr>
<th>Doors</th>
</tr>
<tr>
<th>Color</th>
</tr>
<tr>
<th>Price Rs.</th>
</tr></table>";

echo "<table class='specs' id='spectt' border='0' >";
while($row = mysql_fetch_array($result))
  
  {
	
  echo "<tr>";
  echo "<td>" . $row['Engine'] ."</td></tr>";
  echo "<td>" . $row['HorsePower'] ."</td></tr>";
  echo "<td>" . $row['Torque'] ."</td></tr>";
  echo "<td>" . $row['Transmission'] ."</td></tr>";
  echo "<td>" . $row['Doors'] ."</td></tr>";
  echo "<td>" . $row['Color'] ."</td></tr>";
  echo "<td>" . $row['price'] ."</td></tr>";
  
  
  }
echo "</table>";
mysql_close($con);
?>
</div>

<a href="javascript:history.back()"><input type="button" value="Back"  class="btn"></a>
 <a href=<?php echo $link ?>><input type="button" value="Gallery"  class="btn"></a>
 
 <div id="cartbtn">  <a href="Register.php"><span class="submit"><input type="submit" value=" Book this Car" /></span></a></div>
 
</body>

</html>