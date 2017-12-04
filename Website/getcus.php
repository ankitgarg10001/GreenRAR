<?php
session_start();

if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;

$q=$_GET["q"];

$id=$_SESSION['views'];
$con = mysql_connect("localhost","root","ankit");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("quiz", $con);


$sql="SELECT * FROM quiz WHERE qid =$q";

$result = mysql_query($sql);



while($row = mysql_fetch_array($result))
  {
  
  echo "".$row['qid'] . "&nbsp;&nbsp;";
  echo  "Question:-". $row['Question'] . "<br>";
  echo "<input type='radio' name='useropt' value='a' />".$row['opt1'] . "<br>";
  echo  "<input type='radio' name='useropt' value='b' />".$row['opt2'] . "<br>";
  echo  "<input type='radio' name='useropt' value='c' />".$row['opt3'] . "<br>";
  echo  "<input type='radio' name='useropt' value='d' />".$row['opt4'] . "<br>";
 

  
  }


if(isset($_SESSION['views']))
  unset($_SESSION['views']);

mysql_close($con);
?>