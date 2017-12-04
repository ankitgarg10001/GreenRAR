<html>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quiz System</title>
<?php
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (6*10);//Change the 25 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);
?>


<script type="text/javascript">
var qq=0;
  var days = <?php echo $remainingDay; ?>  
  var hours = <?php echo $remainingHour; ?>  
  var minutes = <?php echo $remainingMinutes; ?>  
  var seconds = <?php echo $remainingSeconds; ?> 
function setCountDown ()
{
	if(qq==0)
	{
	showChange1();
	}
  seconds--;
  if (seconds < 0){
      minutes--;
      seconds = 59
  }
  if (minutes < 0){
      hours--;
      minutes = 59
  }
  if (hours < 0){
      days--;
      hours = 23
  }
  qq=qq+1;
  document.getElementById("remain").innerHTML = days+" days, "+hours+" hours, "+minutes+" minutes, "+seconds+" seconds";
  SD=window.setTimeout( "setCountDown()", 1000 );
  if (minutes == '00' && seconds == '00') { seconds = "00"; window.clearTimeout(SD);
   		//window.alert("Time is up. Press OK to continue."); // change timeout message as required
  		window.location = "result.html" // Add your redirect url
 	} 

}
var q=1;
var my=0;
var i=0;
var curr = 0;
var currans = -1;
function close2()
{
	window.location="result.html";
	}
	function showChange()
{
	if(q>=11)
	{
		window.location="result.html";
		}
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
q=q+1;
xmlhttp.open("GET","getcus.php?q="+q,true);

xmlhttp.send();
}
function showChange3()
{
	
	if(q>=11)
	{
		window.location="result.html";
		}
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }

xmlhttp.open("GET","getcus.php?q="+q,true);
q=q+1;
xmlhttp.send();
}
function showChange1()
{
	if(q==1)
	{
		var s=1;
		}
		s=q;
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }

xmlhttp.open("GET","getcus.php?q="+s,true);
xmlhttp.send();
}



function cli() {
	my=0;
    var radioButtonlist = document.getElementsByName("useropt");
    for (var x = 0; x < radioButtonlist.length; x++) 
	{
        if (radioButtonlist[x].checked) 
		{
           //alert("Selected item Value " + radioButtonlist[x].value);
			my = radioButtonlist[x].value;
		}
		                                         
	}
	if(my==0)
	{
		 alert("please choose any option");
		 showChange1();
	 }
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
    }
  }

xmlhttp.open("GET","quiz.php?q="+q+"&ans="+my,true);
xmlhttp.send();
if(my!=0)
	{
		// alert("answer submitted");
		 //alert(q);
		 //alert(my);
		 showChange();
	 }
}

</script>
<style>
.boxed {
  border: 1px solid silver ;
  width: 340px;
  height: 320px; 
  margin-left:10px;
  box-shadow:-2px 1px 2px #333333, 10px 10px 2px #333333;
   background-image:url(3123123.jpg);
  border-radius: 20px ;

}
</style>
</head>
<body onload="setCountDown();" background="files/images/quiz/wallpaper-background-computer-artistic-desktop-crystal-best-designs-40383.jpg" >
<br>
<br>
<table cellspacing="50">
<tr>
<td>
<marquee direction="down" behavior="scroll" scrollamount="12">
<img src="files/images/quiz/hed.png" width="400px" height="200px">
</marquee>
</td>
<td>
<table align="center">
<tr>

<td>

<div  class="boxed" align="center" >
<div  >
 Start Time: <?php echo $actualDateDisplay; ?> <br>
 End Time:<?php echo $targetDateDisplay; ?><br /></div>
 <hr>
 <div id="remain" align="center"><?php echo "$remainingSeconds seconds";?></div>
 <hr>
 <br>
 <br>

<div align="center">
<table>
<tr>
<td>
<div id="txtHint"></div>

<input name="" type="submit" value="Skip"  onclick="showChange()"/>

<input type='submit' name="" value="Submit Your Answer" onClick="cli()">

<input type="submit" value="Finish" onClick="close2()"/>

<div id="txtHint1"></div>
 </td> </tr></table> 
  </div>
  </div>
  </td>
  </tr>
  </table>
  </td>
  <td>
  <marquee direction="down" behavior="scroll" scrollamount="12">
<files/images/quiz/img src="hed.png" width="400px" height="200px">
</marquee>
  </td>
</body>
</html>
