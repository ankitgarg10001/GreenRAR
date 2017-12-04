<?php
// Fill up array with names


//get the q parameter from URL
$q=$_GET["q"];
$hint="";
//lookup all hints from array if length of q>0
if (strlen($q) > 10)
  {
  $hint="password Greater then 10 characters is Invalid";
  }
//else
//{
//	$hint="password is too large";
//	}
// Set output to "no suggestion" if no hint were found
// or to the correct values

  $response=$hint;
 

//output the response
echo $response;
?>