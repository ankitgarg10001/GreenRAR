<?php

session_start();
if(isset($_SESSION['name']) )
{
    $nam=$_SESSION['name'];
    
}
elseif( isset($_COOKIE['name']) )
{
    $nam=$_COOKIE['name'];
} 
//echo $nam;
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}
$arr=array();
$sql="SELECT * FROM login where `email`= '$nam'";
$res=mysql_query($sql,$con);

while($row = mysql_fetch_array($res))
{
    // echo "entered";
    $sql1 = "select count(*) FROM `comment` where `email`='$nam'";
    $res1=mysql_query($sql1,$con);
    
    $val=mysql_fetch_array($res1);
    //echo $val[0]."<br><br><br><br><br><br>";
    $row[7]=$val[0];//no of total comments
    $sql2 = "select count(*) FROM `blog` where `email`='$nam'";
    $res2=mysql_query($sql2,$con);
    $val2=mysql_fetch_array($res2);
    //echo $val2[0]."<br><br><br><br><br><br>";
    $row[8]=$val2[0];//total no of blogs
    $arr[]=$row;
    //echo "<br />";
    //echo "$row[0]<br>$row[1]<br>$row[2]<br>$row[3]<br>$row[4]<br><br>";
    //echo "<br />";
}

$s = json_encode($arr);
echo $s;
$response=$s;
mysql_close($con);
?>