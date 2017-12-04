<?php
$q=$_GET["rat"];
$max=$_GET["q"];

session_start();
$_SESSION['q']=$q;
$_SESSION['max']=$max;

header ("Location: index.php");

?>