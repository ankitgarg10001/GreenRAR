<?php
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}


$arr=array();

    $sql="SELECT * FROM video order by tym desc"; 
    $res=mysql_query($sql,$con);
    while($row = mysql_fetch_array($res))
    {       
        $arr[]=$row;
    }
    

$rand_keys = array_rand($arr,1);
//echo $rand_keys;

    $ret=$arr[$rand_keys];
$s = json_encode($ret);
echo $s;
mysql_close($con);
$response=$s;


  ?>