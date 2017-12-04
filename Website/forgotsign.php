<!DOCTYPE>
<html>
<head>
<title>Redirecting...</title>
<link rel="stylesheet" type="text/css" href="/css/reset.css">
<link rel="stylesheet" type="text/css" href="/css/structure.css">
</head>

<body>
<?php
 if($_POST['txtuser']=="" ||$_POST['sec_ques']=="" ||$_POST['ans']=="" )
 {
     
     echo "<script type='text/javascript'>";
     echo "alert('Please Complete Form Before Submitting');";
     echo "window.location='forgot.html';";
     echo "</script>";
     exit();


     //include_once('forgot.html');
     //print '<script type="text/javascript">';
     //print 'alert("Please Complete Form Before Submitting")'; 
     //print '</script>';
     //exit();
 }
 include_once('db_connect.php');
 $a= $_POST[ans];
 $Result=mysql_query("select `ans` from `login` where `email`='$_POST[txtuser]' and ques='$_POST[sec_ques]'");
 
 $row=mysql_fetch_array($Result);
 //window.alert("value:"+ $row['ans']);
// echo $row['ans'];  //chk if gettin ans 
$b= $row['ans'];
 //echo $a;
if ($a==$b)
{
    session_start();
	$_SESSION['name']=$_POST["txtuser"];
    $Result=mysql_query("select `pswrd` from `login` where `email`='$_POST[txtuser]'");
    $row=mysql_fetch_array($Result);
    $b= $row['pswrd'];
    echo "<script type='text/javascript'>";
    echo "alert('Your Password Is: $b');";
    echo "window.location='index.html';";
    echo "</script>";
    exit();
    
  exit();
	 }
else
{    
    echo "<script type='text/javascript'>";
    echo "alert('Incorrect Information Provided');";
    echo "window.location='forgot.html';";
    echo "</script>";
    exit();
}
 
 ?>
</body>
</html>