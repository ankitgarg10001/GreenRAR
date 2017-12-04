<?php
$typ=$_GET["type"];
$curr=$_GET["id"];

$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}
$arr=array();
$sql="SELECT * FROM elements where type=$typ and id=$curr";  
$res=mysql_query($sql,$con);

//echo "here".$curr."  ".$typ;
while($row = mysql_fetch_array($res))
{
    //echo $row[0]."   ".$row[1]."   ".$row[2];
    //echo "<br>";
    //echo "<br>";
    //echo "here";
    $xml = simplexml_load_file("files/elements/$row[0]_$row[1].xml") or die("Error: Cannot create object");
    
    foreach($xml->children() as $post => $data1){
        
        $row[3]=$data1->img;
        //echo $row[2];
        // echo "<br>";
        $row[4]= $data1->date[0];
        //echo "<br>";
        $row[5]=$data1->data[0];
        // echo "<br>";
        // echo "<br>";
        // echo "<br />";
    }
    $sql1="SELECT * FROM elementcomment where type=$typ and id=$curr order by time desc";  
    $res1=mysql_query($sql1,$con);
    $comment=array();
    $temp;
    while($row1 = mysql_fetch_array($res1))
    {
        $temp[0]=$row1[2];
        $temp[1]=$row1[3];
        $temp[2]=$row1[4];
        $comment[]=$temp;
    }
    
    $row[6]=$comment;
    //var_dump($row);
    $arr[]=$row;
    $curr--;
}



$s = json_encode($arr);
echo $s;
$response=$s;
mysql_close($con);
?>