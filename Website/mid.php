<?php
session_start();
//session_destroy();
?> 
<html>
<body>
<FONT FACE="LUCIDA HANDWRITING" COLOR="#FF0000" SIZE="3">These Are The Following Options You Have</FONT>
<table align="center" > 
<tr><td width="600">
<?php
$con = mysql_connect("localhost","root","ankit");
$e1=$_GET['e1'];
$e2=$_GET['e2'];

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("greenrar", $con);
$result = mysql_query("SELECT * FROM volunteer where date >= '$e1' && location = '$e2'") or die(mysql_error());

  echo "<tr>";
  echo "<td bgcolor='#999999'>";
  echo "Id";
  echo "</td>";
  echo "<td width='200' bgcolor='#999999'>";
  echo "NGO";
  echo "</td>";
   echo "<td bgcolor='#999999'>";
  echo "WORK";
  echo "</td>";
  echo "<td bgcolor='#999999'>";
  echo "Volunteer";
  echo "</td>";
  while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>";
  echo $row['id'];
  echo "</td>";
  echo "<td>";
  echo $row['ngo'];
  echo "</td>";
  echo "<td>";
  echo $row['work'];
  echo "</td>";
  echo "<td>";
  echo "<a href='thanku volunteer.html'>Click To Volunteer</a>";
  echo "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?><br>
</td>
</tr>
</table>
</body>
</html>
