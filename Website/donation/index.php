<?php
session_start();
//session_destroy();
?>
<html>
<head>
<style>
.boxed {
  border: 1px solid silver ;
  width: 1500px;
  height: 2000px; 
  margin-left:10px;
  box-shadow:-2px 1px 2px #333333, 10px 10px 2px #333333;
  
  border-radius: 20px ;

}
</style>
</head>

<body>
<div class="boxed" style="background-image:url(bgb.jpg); width:1500px; height:2000px">
<div align="left">
<h3><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Donation Options</i></h3>
</div>
<table align="left" > 
<tr><td width="600">
<?php
$con = mysql_connect("localhost","root","ankit");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("donate", $con);
$rajul=$_SESSION['q'];
$rajat=$_SESSION['max'];
$result = mysql_query("SELECT * FROM $rajul where max_amount<=$rajat") or die(mysql_error());
echo "<table border='1' bordercolor='#FF0000'
bordercolorlight='#00FF00'
bordercolordark='#FF0000' style='margin-left:50px' >";
  echo "<tr>";
  echo "<td bgcolor='#999999'>";
  echo "Id";
  echo "</td>";
  echo "<td width='200' bgcolor='#999999'>";
  echo "NGO";
  echo "</td>";
   echo "<td bgcolor='#999999'>";
  echo "CAUSE";
  echo "</td>";
  echo "<td bgcolor='#999999'>";
  echo "DONATION AMOUNT";
  echo "</td>";
  echo "<td bgcolor='#999999'>";
  echo "Add Multiple times for your total amount";
  echo "</td>";
  echo "</tr>";
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
  echo $row['cause'];
  echo "</td>";
  echo "<td>";
  echo $row['max_amount'];
  echo "</td>";
  echo "<td>";
  echo "<a href='addtocart.php?id=".$row['id']."'>Donate</a>";
  echo "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?><br>
</td>
</tr>
</table width="700">
<table align="right" >
<tr>
<td>
<div style="margin-right:400px">
<h3>Your Donation:</h3>
</div>
<?php
if(isset($_SESSION['name']))

echo "<br>";
if(isset($_SESSION['cart']))
{
$con = mysql_connect("localhost","root","ankit");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("donate", $con);
$pieces = explode(" ",$_SESSION['cart']);
$count= count($pieces);
$total=0;
echo "<table border='1' width='700' bordercolor='#FF0000'
bordercolorlight='#00FF00'
bordercolordark='#FF0000' style='margin-right:50px'>";
  echo "<tr>";
  echo "<td bgcolor='#999999'>";
  echo "Id";
  echo "</td>";
  echo "<td bgcolor='#999999'>";
  echo "NGO";
  echo "</td>";
  echo "<td bgcolor='#999999'>";
  echo "Amount";
  echo "</td>";
  echo "</tr>";
for($i=0;$i<$count;$i++)
{
  $result = mysql_query("SELECT * FROM $rajul where max_amount<=$rajat && id=".$pieces[$i]);
  $row = mysql_fetch_array($result);
  echo "<tr>";
  echo "<td>";
  echo $pieces[$i];
  echo "</td>";
  echo "<td>";
  echo $row['ngo'];
  echo "</td>";
  echo "<td>";
  echo $row['max_amount'];
  echo "</td>";
  echo "<td>";
  echo "<a href='remove.php?id=".$i."'>Remove</a>";
  echo "</td>";
  echo "</tr>";
  $total=$total+$row['max_amount'];
}

echo "&nbsp;";
echo "<i>No. of Donations=</i>".$count;

echo "<br>&nbsp;<i>Total amount=</i>".$total;
if(isset($_SESSION['name']))
{
echo "<br>Member Discount=".$total/10;

$total=$total-$total/10;

echo "<br>&nbsp;<i>Total cost after discount=</i>".$total;
}
$tax=$total*2.5/100;

echo "<br>&nbsp;<i>Tax(2.5%) rebate</i>=".$tax;
$total1=$total;

echo "<br>&nbsp;<i>Total amount=</i>".$total1;
$_SESSION['final']=$total1;

echo "<br>";

}
else
{
	
echo "&nbsp;<i>Donation Empty</i>";
}
?>
</td>
</tr>
</table>
&nbsp;<a href='checkout.php'><i>Checkout</i></a>
</div>
</body>
</html>
