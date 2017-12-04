<?php
$typ=$_GET["type"];
$curr=$_GET["current"];

$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}
$arr=array();

$sql="SELECT * FROM elements where type=$typ order by id desc";  
$res=mysql_query($sql,$con);

//echo "here".$curr."  ".$typ;
while($row = mysql_fetch_array($res))
{
    if($curr<=0)
        break;
    
    //echo $row[0]."   ".$row[1]."   ".$row[2];
    //echo "<br>";
    //echo "<br>";
    //echo "here";
   // echo "files/elements/$row[0]_$row[1].xml";
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
        
    $arr[]=$row;
    $curr--;
}



$s = json_encode($arr);
echo $s;
$response=$s;
mysql_close($con);
?>