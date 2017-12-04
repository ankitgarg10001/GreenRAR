<?php
session_start();
if(isset($_SESSION['name']))
  unset($_SESSION['name']);
else
{    
    setcookie("name", "", time()-3600);
}
  
 //echo('Thanks. Click <a href="main.php" >here</a> to go back.'); 
if(isset($_SESSION['page']))
{
    $a=$_SESSION['page'];
    unset($_SESSION['page']);
    header( 'Location:'.$a.'' ) ;
    exit();
}
else
{    
    header("Location: index.html");
    exit();
}

echo "<script type='text/javascript'>";
echo "window.location='index.html';";
echo "</script>"; 
?>