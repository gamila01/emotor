<?php
include 'db3.php'; //connect the connection page
  
if(empty($_SESSION)) // if the session not yet started 
   session_start();
if(!isset($_POST['submit'])) { // if the form not yet submitted
   header("Location: vehicle buy page.php");
   exit; 
}
//check if the username entered is in the database.
$test_query = "SELECT * FROM user WHERE user_name = '".$_POST['user_name']."'";
$query_result = mysql_query($test_query);
//conditions
if(mysql_num_rows($query_result)==0) {
//if username entered not yet exists
    echo "The username you entered is invalid.";
}else {
//if exists, then extract the password.
    while($row_query = mysql_fetch_array($query_result)) {
        // check if password are equal
        if($row_query['password']==$_POST['password']){
            $_SESSION['password'] = $_POST['password'];
            header("Location: vehicle buy page.php");
            exit; 
        } else{ // if not
            echo "Invalid Password"; 
        }
    }
}
?>