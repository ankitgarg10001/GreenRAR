<?php

$a=$_GET['id'];
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}
//$arr=array();
$sql="SELECT * FROM blog where `id` = $a";
$res=mysql_query($sql,$con);
$str;

while($row = mysql_fetch_array($res))
{
    //echo "entered";
    $sql1 = "select `comment_no`,`email`,`comment`,`datetime` FROM `comment` where `blog_id`=$a";
    $res1=mysql_query($sql1,$con);
    while($val=mysql_fetch_array($res1))
    {
        //echo $val[0]."<br><br><br><br><br><br>";
        $row[4][]=$val;
    }
    if($row[4]==null)
        $row[4]=0;
    $file = file_get_contents("./files/blog/$row[0].txt", true);
    $lines=explode("\n", $file);
    $row[5]=$lines[0];//main pic id here
    $txt=implode("", $lines);
    $txt=str_replace($row[5],"", $txt);
    $txt=str_replace("\n"," ", $txt);
    $row[6]=$txt;
    //echo $row[6] ."<br><br>";
    
    //$arr[]=$row;
    //echo "<br />";
    $str=$row;
    //echo "$row[0]<br>$row[1]<br>$row[2]<br>$row[3]<br>$row[4]<br>$row[5]<br>$row[6]<br><br>";
    //echo "<br />";
}
$s = json_encode($str);
echo $s;
$response=$s;
mysql_close($con);
?>