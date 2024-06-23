       <?php

$car_name=$_POST['carname'];
$emial=$_POST['txtemail'];
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$contact=$_POST['telnumber'];

      
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {  die('Could not connect: ' . mysql_error());  }
mysql_select_db("carshow", $con);
$query="INSERT INTO userinfo (car_name, emial, name,address, city, contact,date ) 
VALUES('".$car_name."' ,'".$emial."','".$name."', '".$address."', '".$city."', ".$contact.",  CURTIME() )";

mysql_query($query) or die (mysql_error());
mysql_close();
$url = "Showmycart.html";
Header("location: Showmycart.html");

?>
    