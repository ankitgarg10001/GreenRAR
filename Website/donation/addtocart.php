<?php
session_start();
$str=$_GET['id'];
if(isset($_SESSION['cart']))
{
$_SESSION['cart']=$_SESSION['cart']." ".$str;
}
else
{
$_SESSION['cart']=$str;
}
$_SESSION['cart']=trim($_SESSION['cart']);
header ("Location: index.php");
?>