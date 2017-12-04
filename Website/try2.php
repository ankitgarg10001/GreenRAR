<?php

$ret=array();
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("greenrar", $con);

$sol=array();
for($i=1;$i<11;$i++)
{
    $sql = "SELECT * FROM elements where type=$i";
    $res=mysql_query($sql,$con);
    
	$arr=array();
    while($row = mysql_fetch_array($res))
    {
        $arr[]=$row;
        //echo "$arr[0]";
    }
    $rand_keys = array_rand($arr, 1);
    $sol[]=$arr[$rand_keys];
}
$s = json_encode($sol);
echo $s;
mysql_close($con);
$response=$s;
?>