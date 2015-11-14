<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: home page.php"); // Redirecting To Home Page
}
?>