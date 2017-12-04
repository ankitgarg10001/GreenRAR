<?php
$q=$_GET["q"];
$ans=$_GET["ans"];
$con = mysql_connect("localhost","root","ankit");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("quiz", $con);


$sql="SELECT * FROM quiz WHERE qid =$q";
$sql1="SELECT * FROM correct";
$result = mysql_query($sql);
$result1 = mysql_query($sql1);
$row = mysql_fetch_array($result);
$row1 = mysql_fetch_array($result1);
$x=$row1['correct'];
//echo($x);
//echo($row['woptcode']);
if($row['woptcode']==$ans)
{
	
	$x++;
	mysql_query("UPDATE correct SET correct=$x");
	}
	//echo($row['woptcode']);
mysql_close($con);
//echo($x);
?>