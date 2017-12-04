<?php

$a=$_GET['data'];
$b=$_GET['id'];
$c=$_GET['comno'];
$c++;
$a=str_replace('+',' ',$a);
//echo $a;
session_start();
if(isset($_SESSION['name']) )
{
    $nam=$_SESSION['name'];
    
}
elseif( isset($_COOKIE['name']) )
{
    $nam=$_COOKIE['name'];
} 
//echo $a."<br>".$b."<br>".$c."<br>".$nam."<br>";
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}
//$arr=array();
$a=mysql_real_escape_string($a);
$sql="INSERT INTO `comment`(`blog_id`, `comment_no`, `email`, `comment`) VALUES ($b,$c,'$nam','$a')";
//echo $sql;
$res=mysql_query($sql,$con);
if($res)
    $response="true";
else
    $response='false';
echo $response;
mysql_close($con);
?>