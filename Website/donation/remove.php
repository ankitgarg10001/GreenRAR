<?php
session_start();
$id=$_GET['id'];
$pieces = explode(" ",$_SESSION['cart']);
$count= count($pieces);
$str="";
for($i=0;$i<$count;$i++)
{
if($i!=$id)
$str=$str.$pieces[$i]." ";
}
$_SESSION['cart']=trim($str);
if($_SESSION['cart']=="")
unset($_SESSION['cart']);
header ("Location: index.php");
?>