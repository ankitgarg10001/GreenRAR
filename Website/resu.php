<html>
<head>
<style>
.boxed1 {
  border: 1px solid silver ;
  width: 340px;
  height: 130px; 
  
  box-shadow:-2px 1px 2px #333333, 10px 10px 2px #333333;
  
  border-radius: 20px ;

}
</style>
</head>
<body>
<?php



$con = mysql_connect("localhost","root","ankit");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("quiz", $con);


$sql="SELECT * FROM quiz";

$result = mysql_query($sql);


while($row = mysql_fetch_array($result))
  {
  echo "<div class='boxed1'>";
  echo "<br>";
  echo "".$row['qid'] . "&nbsp;&nbsp;";
  echo  "Question:-". $row['Question'] . "<br>";
  echo "<br>";
  
 echo  "Answer is :-  ".$row['woptcode'] . "<br>";

  echo "<br><br>";
  echo "</div>";
  }




mysql_close($con);
?>
</body>
</html>