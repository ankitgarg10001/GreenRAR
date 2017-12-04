<?php
$s=$_GET["q"];
include_once('db_connect.php');
$Result=mysql_query("select * from `login` where `email`='$s'");
$i=0;

while($row=mysql_fetch_array($Result))
{
    $i++;
    //echo "$i";
    if($i>0)
    {
        $x="Id Already Exists.Please Choose Another One..";
        break;
    }
}
if($i==0)
    $x="Congratulations..Id $s@ greenrar.com Available  :)";
echo "$x";
$response=$x;
?>