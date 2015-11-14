<?php
include 'db3.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 
   session_start();


if(isset($_SESSION['newuserlogin'])) { // if already login
   header("location: vehicle buy page.php"); // send to home page
   exit; 
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image: url(srebrnatapeta-plain-white-grey-back_20638.jpg);
	margin-left: 1.5in;
	margin-top: 1in;
	margin-right: 1.5in;
	margin-bottom: 1in;
}
body,td,th {
	font-size: large;
}
</style>
</head>
      <p><font class="leftfontstyle"><strong style="font-size:36px">User login</strong></font> </p>
      <form name="frm1" action="db4.php" method = "post" style="font-size:24px" >  
        Name:<br />
  <input type="text" name="user_name" />
  <br />
        password:<br />
  <input type="password" name="password" />
  <br />
  <input name="submit" type="submit" value="Login" />
      </form>
      <p>          <br />
        
        <br />
  &nbsp;&nbsp;&nbsp;<br />
        
        
        
      </p>
	  

<body>
</body>
</html>
