<?php
session_start();
include_once('db_connect.php');
$Result=mysql_query("select name from login where email='$_POST[txtuser]' and pswrd='$_POST[txtpwd]'");

while($row=mysql_fetch_array($Result))
{
    if (is_null($_POST["remember"])) {
        $_SESSION['name']=$_POST["txtuser"];
        
    } 
    else {
        $expire=time()+60*60*24*3;
        setcookie("name", $_POST["txtuser"], $expire);
        
    }
    
    if(isset($_SESSION['page']))
    {
        //echo "ankit".$_SESSION['page'];
        //print '<script type="text/javascript">';
        ////echo "alert(".$_SESSION['page'].")";
        //echo "window.location=". $_SESSION['page'].";";
        //print '</script>';
        $a=$_SESSION['page'];
        unset($_SESSION['page']);
        header( 'Location:'.$a.'' ) ;
        exit();
    }
    else
    {
        //echo('<a href="main.php" >Go Back!</a>');
       
        header("Location: index.html");//if enters this loop, go to main n exit
        exit();
    }
}
//echo "WRONG PASSWORD OR CAPSLOCK ON";
print '<script type="text/javascript">';
print 'alert("Please check your Password or if Capslock is On");'; 
echo "window.location='sign2.html';";
print '</script>';


 ?>