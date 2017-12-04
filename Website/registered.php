
<?php
include_once('db_connect.php');
$date=$_POST[date];
if($date<10)
    $date='0'.$date;
//echo $date;
$dat=$_POST[year]."-".$_POST[month]."-".$date;
//echo $dat;
$Result=mysql_query("INSERT INTO `login`(`email`, `name`, `pswrd`, `dob`, `mobile`, `ques`, `ans`) VALUES ('$_POST[loginid]','$_POST[txtname]','$_POST[pswrd]','".$dat."',$_POST[num],'$_POST[sec_ques]','$_POST[ans]')");
//echo "'$_POST[loginid]',$_POST[txtname]','$_POST[pswrd]','$_POST[year]-$_POST[month]-$_POST[date]','','$_POST[num]','$_POST[sec_ques]','$_POST[ans]'";
//$Result=mysql_query("Insert into login values($_POST[loginid]',$_POST[txtname]','$_POST[pswrd]','.$_POST[year].'-'.$_POST[month].'-'.$_POST[date]','$_POST[num]','$_POST[sec_ques]','$_POST[ans]')");

    session_start();
    $_SESSION['name']=$_POST["loginid"];
    echo "<script type='text/javascript'>";
    echo "window.location='index.html';";
    echo "</script>";
?>
