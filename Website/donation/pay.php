<html>
<head>
<style>
.boxed {
  border: 1px solid silver ;
  width: 500px;
  height: 500px; 
  margin-left:10px;
  box-shadow:-2px 1px 2px #333333, 10px 10px 2px #333333;
  background-image:url(bbg.png);
  border-radius: 20px ;

}
</style>
</head>
<body>
<table cellspacing="100">
<tr>
<td>
<div class="boxed" align="center">

<?php
session_start();
$con = mysql_connect("localhost","root","ankit");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("donate", $con);
mysql_query("INSERT INTO card (name,cardno,amount,date)
VALUES ('".$_GET['name']."',".crypt($_GET['cardno']).",".$_SESSION['final'].",'".time()."')");
echo "<h2>
BILL
</h2>";
$pieces = explode(" ",$_SESSION['cart']);
$count= count($pieces);
$total=0;
  echo "<table border='2'>";
  echo "<tr>";
  echo "<td>";
  echo "Id";
  echo "</td>";
  echo "<td>";
  echo "NGO";
  echo "</td>";
  echo "<td>";
  echo "DONATED AMOUNT";
  echo "</td>";
  echo "</tr>";
for($i=0;$i<$count;$i++)
{$rajul=$_SESSION['q'];
$rajat=$_SESSION['max'];
 $result = mysql_query("SELECT * FROM $rajul where max_amount<=$rajat && id=".$pieces[$i]);
 $row = mysql_fetch_array($result);
  echo "<tr>";
  echo "<td>";
  echo $row['id'];
  echo "</td>";
  echo "<td>";
  echo $row['ngo'];
  echo "</td>";
  echo "<td>";
  echo $row['max_amount'];
  echo "</td>";
  echo "</tr>";
  $total=$total+$row['max_amount'];
}
echo "Name=".$_GET['name'];
echo "<br>Date=".date('Y-m-d');
echo "<br>Total Amount=".$total;
echo '<br><a href="javascript:window.print()">Print</a>';
unset($_SESSION['final']);
unset($_SESSION['cart']);
echo '<br><a href="donation.html">Go To Start</a>';
echo '</table>';
?>
</div>
</td>
<td >
<img src="1212.png" width="400" height="600">
</td></tr></table>
</body>
</html>
