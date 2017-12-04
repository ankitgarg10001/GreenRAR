<html>

 <?php
$con = mysql_connect("localhost","root","ankit");
$z=$_GET['whyvol'];
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("greenrar", $con);
 //echo($z);
$sql="INSERT INTO whyvol VALUES('$z')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "record added";
 
mysql_close($con)
?>

</html>
 