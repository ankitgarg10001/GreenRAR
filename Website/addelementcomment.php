<?php
$typ=$_GET["type"];
$id=$_GET["id"];
$data=$_GET["data"];

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
else
{
    $_SESSION['page'] = "./elementpost.html?type=".$typ."&id=".$id;
    $response="2";
    echo $response;
    exit;
}
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}
//$arr=array();
$data=mysql_real_escape_string($data);
$sql="INSERT INTO `elementcomment`(`id`, `type`, `email`, `comment`) VALUES ($id,$typ,'$nam','$data')";
$res=mysql_query($sql,$con);
if($res)
    $response="0";
else
    $response='1';
echo $response;
mysql_close($con);
?>