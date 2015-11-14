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

$comments=$_POST["comments"];
$user_name=$_POST["user_name"];
$e_mail_address=$_POST["e_mail_address"];

mysql_query("INSERT INTO comments(comments, user_name, e_mail_address) VALUES('".$comments."','".$user_name."','".$e_mail_address."')") or die(mysql_error());
header("location:contact us page.php");
?>
</body>
</html>