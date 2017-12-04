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
$sql="SELECT * FROM blog where `email`= '$nam'";
$res=mysql_query($sql,$con);

while($row = mysql_fetch_array($res))
{
    // echo "entered";
    $sql1 = "select count(*) FROM `comment` where `blog_id`=$row[0]";
    $res1=mysql_query($sql1,$con);
    $val=mysql_fetch_array($res1);
    //echo $val[0]."<br><br><br><br><br><br>";
    $row[4]=$val[0];
    $file = file_get_contents("./files/blog/$row[0].txt", true);
    $lines=explode("\n", $file);
    $row[5]=$lines[0];
    $txt=implode("", $lines);
    $txt=str_replace($row[5],"", $txt);
    $txt=str_replace("\n"," ", $txt);
    if(strlen($txt)>500)
        $txt=substr($txt,0,500)."...";
    $row[6]=$txt;
    //echo $row[6] ."<br><br>";
    
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