<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Next Page</title>
</head>

<body>
<?php
$q=$_GET["tab"];
$r=$_GET["id"];
if($r=="''")
{
$r="all";
}
echo "page for table : $q and document id  $r";
?>
</body>
</html>