<?php
session_start();
if(isset($_SESSION['name']) )
{
    $response="WELCOME <a href='profile.html' title='View Profile'> ".  $_SESSION['name']."</a><p id='sign'><a href='logout.php'><small><strong>Log out</strong></small></a><br /></p>";
    
}
elseif( isset($_COOKIE['name']) )
{
    $response="WELCOME <a href='profile.html' title='View Profile'>".$_COOKIE['name']."</a><p id='sign'><a href='logout.php'><small><strong>Log out</strong></small></a><br /></p>";
    
} 
else
{
    
    $response='<br/><p id="sign"><a href="sign2.html"><small><strong>Sign In</strong></small></a> &nbsp;&nbsp;&nbsp; <a href="register2.html"><small><strong>Register</strong></small></a><br /></p>';
    
}
echo $response;

?>