<?php


$con = mysql_connect("localhost","root","ankit");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("quiz", $con);


$sql1="SELECT * FROM correct";

$result1 = mysql_query($sql1);

$row1 = mysql_fetch_array($result1);
$x=$row1['correct'];

echo("CORRECT ANSWERS U GIVE :-  "."$x"."/10");
$y=0;
mysql_query("UPDATE correct SET correct=$y");
mysql_close($con);
//echo($x);
?>