<?php
$id=$_GET["id"];
$count=$_GET["count"];

$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}


$arr=array();


if($id)
{
    $sql="SELECT * FROM video where id=$id"; 
    $res=mysql_query($sql,$con);
    //echo "here".$curr."  ".$typ;
    while($row = mysql_fetch_array($res))
    {
        $arr[]=$row;
    }
}

else if($count)
{
    $sql="SELECT * FROM video order by tym desc"; 
    $res=mysql_query($sql,$con);
    while($row = mysql_fetch_array($res))
    {
        if($count<=0)
            break;
        
        $arr[]=$row;
        $count--;
    }
}



$s = json_encode($arr);
echo $s;
$response=$s;
mysql_close($con);
?>