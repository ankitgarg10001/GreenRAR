<?php

$a=$_GET['type'];
$b=$_GET['page'];
$c=$_GET['sort'];

if($c=='i3')
{
    $shift = mktime(date('H'),date('i'),date('s'),date("m"),date("d"),date("Y")-20);
    $c=date('Y-m-d H:i:s',$shift);
}
else if($c=='i2')
{
    $shift = mktime(date('H'),date('i'),date('s'),date("m"),date("d")-7,date("Y"));
    $c=date('Y-m-d H:i:s',$shift);
}
else
{
    $shift = mktime(date('H'),date('i'),date('s'),date("m"),date("d")-1,date("Y"));
    $c=date('Y-m-d H:i:s',$shift);
}


//$tomorrow = mktime(date('H'),date('i'),date('s'),date("m"),date("d")+1,date("Y"));
//$c=date('Y-m-d H:i:s',$tomorrow);
//echo date('Y-m-d H:i:s')."<br>";
//echo $c."<br>";
////echo "$a type $b page";
$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
if(!(mysql_select_db("greenrar", $con))){
    die("Table Connection Error");
}
$arr=array();


if($a==2)
{
    $sql="SELECT * FROM blog where `date_added` > '$c' ORDER by `date_added` desc limit $b";
    $res=mysql_query($sql,$con);
    
    while($row = mysql_fetch_array($res))
    {
        // echo "entered";
        $sql1 = "select count(*) FROM `comment` where `blog_id`=$row[0]";
        $res1=mysql_query($sql1,$con);
        $val=mysql_fetch_array($res1);
        //echo $val[0]."<br><br><br><br><br><br>";
        $row[4]=$val[0];
        $file = file_get_contents("./files/blog/$row[0].txt", true);
        $lines=explode("\n", $file);
        $row[5]=$lines[0];
        $txt=implode("", $lines);
        $txt=str_replace($row[5],"", $txt);
        $txt=str_replace("\n"," ", $txt);
        if(strlen($txt)>500)
            $txt=substr($txt,0,500)."...";
        $row[6]=$txt;
        //echo $row[6] ."<br><br>";
        
        $arr[]=$row;
        //echo "<br />";
        //echo "$row[0]<br>$row[1]<br>$row[2]<br>$row[3]<br>$row[4]<br><br>";
        //echo "<br />";
    }
}


else if($a==1)
{
    $temp=$b;

    $sql = "select `blog_id`,count(*) as comments FROM `comment` group by `blog_id` order by `comments` desc LIMIT $b";    
    $res=mysql_query($sql,$con);
    
    while($val = mysql_fetch_array($res))
    {
        $b--;
        $sql1 = "SELECT * FROM blog where `id`=$val[0] and `date_added` > '$c'";
        $res1=mysql_query($sql1,$con);
        
        //echo $val[0]."<br><br><br><br><br><br>";
        if(!($row=mysql_fetch_array($res1)))
        {
            continue;
        }
        $row[4]=$val[1];
        $file = file_get_contents("./files/blog/$row[0].txt", true);
        $lines=explode("\n", $file);
        $row[5]=$lines[0];
        $txt=implode("", $lines);
        $txt=str_replace($row[5],"", $txt);
        $txt=str_replace("\n"," ", $txt);
        if(strlen($txt)>500)
            $txt=substr($txt,0,500)."...";
        $row[6]=$txt;
        //echo $row[6] ."<br><br>";
        //echo "$row[0]<br>$row[1]<br>$row[2]<br>$row[3]<br>$row[4]<br><br>";
        
        $arr[]=$row;
        //echo "<br />";
        //echo "<br />";
    }
    if($b>0)
    {
        
        $sql = "SELECT * FROM blog where `date_added` > '$c' ORDER BY `date_added` desc LIMIT ".(2*$temp)."";    
        $res=mysql_query($sql,$con);
        
        while($row = mysql_fetch_array($res))
        {
            if($b>0)
            {
                $found="false";
                for($i=0;$i<sizeof($arr);$i++)
                {
                    if($arr[$i][0]==$row[0])
                    {
                        //echo("found". $arr[$i][0] ."<br>");
                        $found="true";
                        break;
                    }                    
                }
                
                if($found=="false")
                {
                    //echo("entered for $row[0]<br>");
                    $b--;
                    $sql1 = "select count(*) FROM `comment` where `blog_id`=$row[0]";
                    $res1=mysql_query($sql1,$con);
                    $val=mysql_fetch_array($res1);
                    //echo $val[0]."<br><br><br><br><br><br>";
                    $row[4]=$val[0];
                    $file = file_get_contents("./files/blog/$row[0].txt", true);
                    $lines=explode("\n", $file);
                    $row[5]=$lines[0];
                    $txt=implode("", $lines);
                    $txt=str_replace($row[5],"", $txt);
                    $txt=str_replace("\n"," ", $txt);
                    if(strlen($txt)>500)
                        $txt=substr($txt,0,500)."...";
                    $row[6]=$txt;
                    //echo $row[6] ."<br><br>";
                    // echo "$row[0]<br>$row[1]<br>$row[2]<br>$row[3]<br>$row[4]<br><br>";
                    
                    $arr[]=$row;
                }
                //echo "<br />";
                //echo "$row[0]<br>$row[1]<br>$row[2]<br>$row[3]<br>$row[4]<br><br>";
                //echo "<br />";
            }
            else
                break;
        }
    }
}



$s = json_encode($arr);
echo $s;
$response=$s;
mysql_close($con);
?>