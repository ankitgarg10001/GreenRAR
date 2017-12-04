<?php
// branch on the basis of 'sort' value 

switch ($_GET['sort']) 
{
      case 'Bold_start':
		$string=$_GET['string'];
		
		$response=$string."<b>";
		
		echo $response;	
		break;
		      case 'Bold_close':
		$string=$_GET['string'];
		
		$response=$string."</b>";
		
		echo $response;	
		break;
		case 'underline_start':
		$string=$_GET['string'];
		
		$response=$string."<u>";
		
		echo $response;	
		break;
		case 'underline_close':
		$string=$_GET['string'];
		
		$response=$string."</u>";
		
		echo $response;	
		break;
		case 'italic_start':
		$string=$_GET['string'];
		
		$response=$string."<i>";
		
		echo $response;	
		break;
		case 'italic_close':
		$string=$_GET['string'];
		
		$response=$string."</i>";
		
		echo $response;	
		break;
		case 'clear':
		$string=$_GET['string'];
		
		$response="";
		
		echo $response;	
		break;
		
}
?>
