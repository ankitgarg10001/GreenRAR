<?php

if($_GET['c']=="1")
{
    $a="greenrar";
    $sql = "SELECT * FROM `news`";
    
    //select * from (select * from `news` order by `imp` desc,`id`)AS a LIMIT 5
    //use this to get top 5 news
}
else if($_GET['c']=="0")
{
    $a="greenrar";
    $sql = "SELECT * FROM video order by tym desc";
}


$ret=array();
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

	if(mysql_select_db($a, $con)){
    
        }
    else{
        die("Table Connection Error");
    }
        
	
    
    $res=mysql_query($sql,$con);
	$arr=array();
    $x=0;
	while($row = mysql_fetch_array($res))
    {
        $arr[]=$row;
        //echo "$x";
        $x=$x+1;
    }
    $rand_keys = array_rand($arr,5);
    for($i=0;$i<5;$i++)
    {
    $ret[]=$arr[$rand_keys[$i]];
    //echo $ret[i][0];
    }
/*for($i=0;$i<5;$i++)
{

echo "<br/>".$ret[$i][0];
echo "<br/>".$ret[$i][1];
echo "<br/>";
echo "<br/>";
echo "<br/>";
}*/

    //echo "jason";
$s = json_encode($ret);
echo $s;
mysql_close($con);
$response=$s;


  ?>