<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

$name=$_POST['name'];
$email=$_POST['textemail'];
$web=$_POST['web'];
$text=$_POST['text'];
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die('Could Not Connect'.mysql_error());
}
mysql_select_db("carshow",$con);

$query="INSERT INTO queries (name,email,web,query) 
VALUES ('".$name."' ,'".$email."','".$web."', '".$text."')";

mysql_query($query) or die (mysql_error());
mysql_close();
$url = "submitted.html";
Header("location: submitted.html");
?>
</body>
</html>