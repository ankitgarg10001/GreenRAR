 <?php
    $con = mysql_connect("localhost","root","ankit");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }else{
        //echo "Connected";
    }
    if(mysql_select_db("greenrar", $con))
    {
        $sql = "SELECT * FROM `blog`";
        //echo "query";
    }
    else{
        die("Table Connection Error");
    }
    
	$res=mysql_query($sql,$con);
    
    
	$arr=array();
    while($row = mysql_fetch_array($res))
    {
        $arr[]=$row;
        //echo "$arr[0]";
    }
    $rand_keys = array_rand($arr, 1);
    //echo $rand_keys;
    $ret=$arr[$rand_keys];
    
    $s = json_encode($ret);
    echo $s;
    mysql_close($con);
    $response=$s;
        ?>
