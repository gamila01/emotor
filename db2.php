<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$connect = @mysql_connect('localhost' , 'root' , ''); //connect is a variable
if(!$connect)
{
	die(mysql_error()); //if cannot create a connection with database, it shows error message 
}

mysql_select_db('emotor' , $connect) or die (mysql_error());

$code=$_POST["code"];
$make=$_POST["make"];
$model=$_POST["model"];
$model_no=$_POST["model_no"];
$year=$_POST["year"];
$location=$_POST["location"];
$price=$_POST["price"];
$telephone_no=$_POST["telephone_no"];

mysql_query("INSERT INTO ads(code, make, model, model_no, year, location, price,telephone_no) VALUES('".$code."','".$make."','".$model."','".$model_no."','".$year."','".$location."','".$price."','".$telephone_no."')") or die(mysql_error());

header("location:vehicle buy page.php");
?>
</body>
</html>