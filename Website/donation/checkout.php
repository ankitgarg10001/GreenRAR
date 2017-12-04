<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
session_start();
if(!isset($_SESSION['cart']) || !isset($_SESSION['final']))
header("Location: shop.php");

?>
<html>
<meta style="visibility: hidden !important; display: block !important; width: 0px !important; height: 0px !important; border-style: none !important;">
<object id="__IDM__" type="application/x-idm-downloader" width="1" height="1" style="visibility: hidden !important; display: block !important; width: 1px !important; height: 1px !important; border-style: none !important; position: absolute !important; top: 0px !important; left: 0px !important;"></object>
</meta>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Portal Payment</title>

        <title>ACI Style Sheet</title>
<style> 	.Data {
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-weight : bold;
 		text-align : left;
 	}
 	.DataError {
 		color : red;
 		font-family : Arial, Helvetica, serif;
 		font-weight : bold;
 		text-align : left;
 	}
 	.Title {
 		background-color : #DCEDFE;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : medium;
 		font-style : normal;
 		font-weight : bold;
 		text-align : left;
 	}
 	.Error {
 		color : red;
 		font-family : Arial, Helvetica, serif;
 		font-size : large;
 		font-weight : bold;
 		text-align : center;
 	}
 	.Label {
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		text-align : right;
 	}
 	.LabelOpt {
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-style : italic;
 		text-align : right;
 	}
 	.RowOdd {
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : x-small;
 		background : #F0F0F0;
 	}
 	.RowEven {
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : x-small;
 		background : #DCEDFE;
 	}
 	.RowBackground {
 		background : silver;
 	}
 	A:link {
 		color : blue;
 	}
 	A:visited {
 		color : red;
 	}
 	A:link {
 		color : red;
 	}
 	A.footer:active {
 		color : blue;
 	}
 	A.footer:link {
 		color : red;
 	}
 	A.footer:visited {
 		color : red;
 	}
 	A.application {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-weight : bold;
 		font-size : 11;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 		font-style : italic;
 	}
 	A.application:active {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-weight : bold;
 		font-size : 11;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 		font-style : italic;
 	}
 	A.application:link {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-weight : bold;
 		font-size : 11;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 		font-style : italic;
 	}
 	A.application:visited {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-weight : bold;
 		font-size : 11;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 		font-style : italic;
 	}
 	A.menu {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-size : 9;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 	}
 	A.menu:active {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-size : 9;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 	}
 	A.menu:link {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-size : 9;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 	}
 	A.menu:visited {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-size : 9;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 	}
 	A.nav2:active {
 		color : #DCEDFE;
 	}
 	A.nav2:link {
 		color : #DCEDFE;
 	}
 	A.nav2:visited {
 		color : #DCEDFE;
 	}
 	.pad2 {padding-top:0px; padding-bottom:1px; font-size:12px; font-weight:bold; font-family: arial, helvetica, sans-serif;}
 	.pad3 {
 		background : black;
 		padding-top:0px;
 		padding-bottom:1px;
 		padding-left:8px;}
 	.nav2 {
 		text-decoration:none;
 		color : #DCEDFE;
 		background : black;
 		font-size:9px;}
 	BODY  {
 		background-color : #DCEDFE;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : small;
 		font-style : normal;
 		font-weight : normal;
 	}
 	BODY.menu  {
 		background-color : black;
 		color : #DCEDFE;
 		font-family : Arial, Helvetica, serif;
 		font-size : small;
 		font-style : normal;
 		font-weight : normal;
 	}
 	BODY.banner  {
 		background-color : red;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : small;
 		font-style : normal;
 		font-weight : normal;
 	}
 	H1 {
 		color : black;
 		font-size : large;
 		font-weight : bold;
 		text-align : left;
 		text-indent : 1em;
 	}
 	H2 {
 		color : black;
 		font-size : normal;
 		font-weight : bold;
 		text-align : left;
 		text-indent : 1em;
 	}
 	INPUT {
 		background-color : white;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-weight : bold;
 	}
 	INPUT.checkbox {
 		background-color : #DCEDFE;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-weight : normal;
 	}
 	INPUT.Button {
 		background : silver;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-weight : bold;
 		text-align : left;
 	}
 	P.footer {
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size: xx-small;
 		text-align : center;
 	}
 	span.application {
 		color : #DCEDFE;
 		background : black;
 		text-decoration:none;
 		font-weight : bold;
 		font-size : 11;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 		font-style : italic;
 	}
 	TABLE {
 		color : #DCEDFE;
 		font-size : small;
 		font-family : Arial, Helvetica, serif;
 		font-style : normal;
 		font-weight : normal;
 	}
 	TABLE.body {
 		margin-top : 20px;
 	}
 	TABLE.header {
 		margin-top : 15px;
 	}
 	TABLE.footer {
 		margin-top : 20px;
 	}
 	TR {
 		background-color : #DCEDFE;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : small;
 		font-style : normal;
 		font-weight : normal;
 		text-align : left;
 	}
 	TD {
 		font-family : Arial, Helvetica, serif;
 	}
 	TH {
 		font-family : Arial, Helvetica, serif;
 	}
 	TD.line {
 		background-color : black;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : 1pt;
 	}
 	TD.head {
 		color : Black;
 		font-family : Arial, Helvetica, serif;
 		font-size : medium;
 		font-weight : normal;
 		text-align : left;
 		text-indent : 1em;
 	}
 	TD.menu {
 		background-color : black;
 		color : #DCEDFE;
 		font-family : Arial, Helvetica, serif;
 		font-size : 10;
 		font-style : normal;
 		font-weight : normal;
 	}
 	TD.RptDat {
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : x-small;
 	}
 	TH.RptHdr {
 		background-color : black;
 		color : #DCEDFE;
 		font-family : Arial, Helvetica, serif;
 		font-weight : bold;
 		text-align : center;
 		font-size : x-small;
 	}
 	SELECT {
 		background : #DCEDFE;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : normal;
 		font-style : normal;
 		font-weight : bold;
 	}
 	.dropmenu {
 		position: absolute;
 		visibility: hidden;
 		background: black;
		width: 150px
 	}
 	.menubar {
 		position: absolute;
 		visibility: hidden;
 		background: black;
 	}
 	.tooltip {
 		position: absolute;
 		visibility: hidden;
 		color : black;
 		font-size : 10;
 		font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
 	}
	.hide {
		display: none;
	}
	.show {
		display: visible;
	}
</style>
<script type="text/javascript" src="../files/jquery-1.4.2.min.js"></script>
</head>
<body scroll="" onload=" if (history.length &gt; 0) history.go(+1);" bgcolor="#DCEDFE">
<meta name="GENERATOR" content="IBM WebSphere Studio">
<style> 	.Title {
 		background-color : #DCEDFE;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : medium;
 		font-style : normal;
 		font-weight : bold;
 		text-align : left;
 	}
 	TD.titleline {
 		background-color : black;
 		color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : 1pt;
 	}
</style>



<table width="96%" border="0" cellspacing="0" cellpadding="0">
	<tbody><tr>
        <td height="1" bgcolor="black" class="titleline"></td> 
	</tr>
	
</tbody></table>


<table border="0" cellspacing="0" cellpadding="0" width="96%"> 
<tbody><tr>

<td>
	<table>
	<tbody><tr>
	<td height="30" align="right">
	<img alt="" border="0" align="right" width="200" height="50" src="./Portal Payment_files/sbi.bmp"></td>
	</tr>
	</tbody></table>
</td>

<td align="left">
	<table>
	<tbody><tr>
	<td width="20%" height="30" align="left">
	<img alt="" border="0" align="right" width="500px" src="./Portal Payment_files/logox.png">
	</td> 
	</tr>
	</tbody></table>
</td>

</tr>
</tbody></table>

<table width="96%" border="0" cellspacing="0" cellpadding="0">
	
	<tbody><tr><td><center>
	</center></td></tr>
	<tr> 
    <td height="1" bgcolor="blue" align="center" class="titleline"></td> 
	</tr>
		 
</tbody></table>
<br>
<table border="0" width="100%">
	<tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td align="center"><h5><font face="Verdana" color="#333399">WELCOME TO </font><font face="Verdana" color="#333399">SBI</font> <font face="Verdana" color="#333399">PAYMENT GATEWAY</font></h5> </td></tr>
</tbody></table>
<table width="100%" border="0"> 
<tbody><tr>
<td width="10%" valign="top"> 
<br><br><table border="0" cellpadding="0" cellspacing="0">
<tbody><tr></tr><tr></tr><tr>
<td align="center" valign="center">
<img src="./Portal Payment_files/vseal.GIF" border="0" width="100" height="40"> <br><br><br>
</td>
</tr>
</tbody></table>
 
 <br><br><table border="0" cellpadding="0" cellspacing="0">
 <tbody><tr></tr><tr></tr>
 <tr>
 <td align="center" valign="center">
<a href="javascript:CCPopUp('http://seal.controlcase.com/', 3853338200);">
<img src="./Portal Payment_files/PCI_logo.gif" oncontextmenu="return false;" border="0" height="55"></a><br>

</td>
</tr>
</tbody></table>
</td>
<td width="70%" align="center"> 

<table align="center" border="0"> 

</table><table class="paymenttable" border="0">

        
		<tbody><tr><td colspan="5">
        <table class="paymentinfotable" align="center" border="0" width="400">
		<tbody><tr><td class="paymentheader" bgcolor="#CCCCCC" colspan="5"><font color="black" size="3"><b>&nbsp;Billing Information</b></font></td></tr>
            <tr>
				<td class="paymentlabel" width="150"><b>&nbsp;Merchant&nbsp;&nbsp;</b></td>
                <td class="paymentdata" width="250">&nbsp;greenrar.web44.net</td>
            </tr>
            <tr>
                <td class="paymentlabel"><b>&nbsp;Website  &nbsp;&nbsp;</b></td>
                <td class="paymentdata">&nbsp;greenrar.web44.net</td>
            </tr>
            <tr>
                <td class="paymentlabel"><b>&nbsp;Amount &nbsp;&nbsp;</b></td>
                <td class="paymentdata">&nbsp;<?php echo 'Rs '.$_SESSION['final'] ?></td>
	       </tr>
        </tbody></table></td></tr>

	<tr><td>&nbsp;</td></tr>
  
</tbody></table><table class="paymentinfotable" border="0" align="center">
<tbody><tr><td class="paymentheader" bgcolor="#CCCCCC"><font color="black" size="3"><b>Payment Information</b></font></td></tr>


		<tr><td><table border="0" width="400"><tbody><tr><td>


            <input class="paymentchoiceradiohide" type="radio" name="paymentChoice" value="debitcardform&amp;postPayment.jsp&amp;0&amp;0" checked="">
                                      <b>Card Details </b>


        <input type="hidden" name="payment_id_lng" value="8354666442023260">
		<input type="hidden" name="institution_id_int" value="8">
        <table class="paymententrytable" border="0">
<script>
$('#fn').hide();
flag=0;
function func1()
{
var a=document.getElementById("cardn").value;
var b=document.getElementById("mont").value;
var c=document.getElementById("yea").value;
var e=document.getElementById("cvv").value;
var d=document.getElementById("name").value;
if(a=='' || b=='' || c=='' || d=='' || e=='' || flag==1)
alert('enter all the fields correctly');
else
location.href='pay.php?cardno='+a+'&month='+b+'&year='+c+'&name='+d+'&cvv='+e;
}
function func2()
{
location.href='shop.php';
}
function fname(){
	flag=0;
	var x1=/^[A-Za-z]+$/;
	var x=document.getElementById('name').value;
	if(!x.match(x1) )
	{	
		alert('Cannot enter number or special characters');
		document.getElementById('cardn').name();
		flag=1;
	}
}
function fcard()  
{   
flag=0;
var x=document.getElementById('cardn').value;
var numbers = /^[0-9]{16}$/;  //^,$--anchor tags: beginning and end
if(!x.match(numbers) )  
{ 
alert("Enter Valid Card Number");
document.getElementById('cardn').focus();
flag=1;
}  
}  
function fmonth()  
{ 
flag=0;
var x=document.getElementById('mont').value;
if(x<=0 || x>12 )  
{ 
alert("Enter Valid Month");
document.getElementById('mont').focus();
flag=1;
}  
} 
function fyear()  
{   
flag=0;
var x=document.getElementById('yea').value;
var numbers = /^[0-9]{4}$/;  //^,$--anchor tags: beginning and end
if(!x.match(numbers))  
{ 
alert("Enter Valid Year");
document.getElementById('yea').focus();
flag=1;
}  
} 
function fcvv()  
{   
flag=0;
var x=document.getElementById('cvv').value;
var numbers = /^[0-9]{3,4}$/;  //^,$--anchor tags: beginning and end
if(!x.match(numbers))  
{ 
alert("Enter Valid CVV");
document.getElementById('cvv').focus();
flag=1;
}  
} 
</script>
								<tbody>
								<form action="trial.php">
								<tr>
								<td class="paymentlabel" id="cardno" >&nbsp;Card Number</td>
								<td class="paymentinputtd"><input type="text" id="cardn" name="cardno" width="310" onblur="fcard()" autofocus></td>
								</tr>
								<tr>
								<td class="paymentlabel">&nbsp;Valid Thru / Expiry Date</td>
								<td class="paymentinputtd">
								<input name="month" id="mont" type="number" width="30" min="1" max="12"	placeholder="Month" onblur="fmonth()">
								<input name="year" id="yea" type="number" width="30"  min="2000" max="2025" placeholder="Year" onblur="fyear()">
								</td>
								</tr>
								<tr><td  class="paymentlabel" >&nbsp;Cardholder's Name</td>
								<td><input type="text" id="name" name="name" width="310" onblur='fname()'></td>
								<td >
								</tr>
								<tr>
								<td class="paymentlabel">&nbsp;<input id="cvvd" type="hidden" name="pinRadio" value="0" >CVV NO</td>
								<td class="paymentinputtd"><input type="password" id="cvv" name="testPin" size="4"onblur=fcvv()>&nbsp;&nbsp;<input type="hidden" name="Ecom_Payment_Pin"><input type="hidden" name="Ecom_Payment_Pin_Tran"></td>
								</tr>
								<tr>
								<td>&nbsp;
								
								</td>
								</tr>
								<tr>					
								<td align="right"><input class="button" type="button" value="Submit" onclick="func1()"></td>
								<td><input class="button" type="button" value="Cancel" onclick="func2()"></td>
								</tr>
										
								</form>
	</tbody></table>
	</td></tr></tbody></table></td>

	</tr></tbody></table>
	<table border="0" align="center">


		<tbody><tr><td colspan="2" align="center">
			<center>
			</center>
		</td></tr>

		<!--CR Captcha Implementation ends-->
</tbody></table>

</tbody></table><font color="black" type="Times New Roman" size="3px;">
</font></td></tr></tbody></table>





<!-- // card number, cvv, pin and name validation starts here ON 11-04-07 -->


        <meta name="GENERATOR" content="IBM WebSphere Studio">
<style> 	
 	TD.titleline {
 		background-color : black;
 		font-family : Arial, Helvetica, serif;
 		font-size : 1pt;
 	}
</style>

<table align="center" width="96%" border="0" cellspacing="0" cellpadding="0">
	<tbody><tr>
        <td height="1" class="titleline"></td> 
	</tr>
	
</tbody></table> 
<table class="footer" border="0" cellspacing="0" cellpadding="0" align="center">
  
<br><br><br><br><br><br><br><br><br><br>
	<tbody><tr>
    	<td align="center">
        <font color="black" size="2">
<p><b>Disclaimer:</b>This service is presently available to Debit Cards of all Branches under Core Banking Solutions of SBI. Bank is only facilitating a payment mechanism and is not responsible for any deficiency of service by the merchant. Privity of contract is between you and the merchant.


		</p></font></td>
	</tr>
	  </tbody></table>

	<table align="center">

	  <tbody><tr><td><a class="footer" href="http://www.fss.co.in/" target="V"><img src="./Portal Payment_files/fss1.JPG" border="0"></a></td></tr>

	</tbody></table>



	


</body></html>