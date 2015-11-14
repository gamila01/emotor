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

<body>
<table cellpadding="0" cellspacing="0" width="100%"> 

<tr>

<td></td>

<td align="right" class="footerlinks" height="30">&nbsp;</td>

<td></td>
</tr>

<?php
$connect = @mysql_connect('localhost' , 'root' , ''); //connect is a variable
if(!$connect)
{
	die(mysql_error()); //if cannot create a connection with database, it shows error message 
}

mysql_select_db('emotor' , $connect) or die (mysql_error());

$mydata=mysql_query("SELECT * FROM ads") or die(mysql_error());//all data which are in the table in database, assign to the mydata variable

$tabledata="<table border='1'><tr><th>code</th><th>make</th><th>model</th><th>model_no</th><th>year</th><th>location</th><th>price</th><th>telephone_no</th></tr>";
if(mysql_num_rows($mydata)>0)//mysql_num_rows is a function and this will check number of rows in the database
{
	while($data=mysql_fetch_assoc($mydata))
	{
		 $tabledata.="<tr><td>".$data['code']."</td><td>".$data['make']."</td><td>".$data['model']."</td><td>".$data['model_no']."</td><td>".$data['year']."</td><td>".$data['location']."</td><td>".$data['price']."</td><td>".$data['telephone_no']."</td></tr>";
		
	}
	$tabledata.="</table>";
	echo $tabledata;
}
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong></strong></p>
<blockquote>
  <blockquote>
    <blockquote> 
   <blockquote>
     <blockquote>
       <blockquote>
         <p>&nbsp;</p>
         <blockquote>
           <blockquote>
             <blockquote>
               <blockquote>
                 <blockquote>
                   <p>&nbsp;</p>
</table></td>
 <table width="614" align="center">
          <tr>
            <td width="141"><a href="user login page.php">Login </a></td>
            <td width="183"><a href="user registor page.php">For register</a></td>
            <td width="274"><a href="Contact us page.php">contact us</a></td>
			 <td width="274"><a href="ad publish page.php">Sell vehicle</a></td>
			  <td width="274"><a href="logout.php">Logout</a></td>
          </tr>
        </table>

</body>
</html>
