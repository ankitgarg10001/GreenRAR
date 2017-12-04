<?php
$typ=$_GET["type"];
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}
$arr=array();
$sql = "SELECT count(*) FROM elements where type=$typ";    
$res=mysql_query($sql,$con);

while($row = mysql_fetch_array($res))
{
    $arr=$row[0];
}
echo $arr;
$response=$arr;
mysql_close($con);
?>