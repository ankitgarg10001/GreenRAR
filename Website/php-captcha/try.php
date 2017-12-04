<html>
<head>

<script>
function emoticon(st)
{var stre=  document.getElementById("string1").value;
	if(st=='raj')
{
var ret= stre+'<img src="smile/icon_biggrin.gif" alt="Very Happy" title="Very Happy" border="0">';
}
	if(st=='raj1')
	{
      var ret= stre+'<img src="smile/icon_smile.gif" alt="Smile" title="Smile" border="0">';
    }
	if(st=='raj2')
	{
      var ret= stre+'<img src="smile/icon_sad.gif" alt="Sad" title="Sad" border="0">';
    }
	if(st=='raj4')
	{
      var ret= stre+'<img src="smile/icon_surprised.gif" alt="Surprised" title="Surprised" border="0">';
    }
	if(st=='raj5')
	{
      var ret= stre+'<img src="smile/icon_eek.gif" alt="Shocked" title="Shocked" border="0">';
    }
	if(st=='raj6')
	{
      var ret= stre+'<img src="smile/icon_confused.gif" alt="Confused" title="Confused" border="0">';
    }
	if(st=='raj7')
	{
      var ret= stre+'<img src="smile/icon_cool.gif" alt="Cool" title="Cool" border="0">';
    }
	if(st=='raj8')
	{
      var ret= stre+'<img src="smile/icon_lol.gif" alt="Laughing" title="Laughing" border="0">';
    }
	if(st=='raj9')
	{
      var ret= stre+'<img src="smile/icon_mad.gif" alt="Mad" title="Mad" border="0">';
    }
	if(st=='raj10')
	{
      var ret= stre+'<img src="smile/icon_razz.gif" alt="Razz" title="Razz" border="0">';
    }
	if(st=='raj11')
	{
      var ret= stre+'<img src="smile/icon_redface.gif" alt="Embarassed" title="Embarassed" border="0">';
    }
	if(st=='raj12')
	{
      var ret= stre+'<img src="smile/icon_cry.gif" alt="Crying or Very sad" title="Crying or Very sad" border="0">';
    }
	if(st=='raj13')
	{
      var ret= stre+' <img src="smile/icon_evil.gif" alt="Evil or Very Mad" title="Evil or Very Mad" border="0">';
    }
	if(st=='raj14')
	{
      var ret= stre+'<img src="smile/icon_twisted.gif" alt="Twisted Evil" title="Twisted Evil" border="0">';
    }
	if(st=='raj15')
	{
      var ret= stre+'<img src="smile/icon_rolleyes.gif" alt="Rolling Eyes" title="Rolling Eyes" border="0">';
    }
	if(st=='raj16')
	{
      var ret= stre+'<img src="smile/icon_wink.gif" alt="Wink" title="Wink" border="0">';
    }
	if(st=='raj17')
	{
      var ret= stre+' <img src="smile/icon_exclaim.gif" alt="Exclamation" title="Exclamation" border="0">';
    }
	if(st=='raj18')
	{
      var ret= stre+'<img src="smile/icon_question.gif" alt="Question" title="Question" border="0">';
    }
	if(st=='raj19')
	{
      var ret= stre+'<img src="smile/icon_idea.gif" alt="Idea" title="Idea" border="0">';
    }
	if(st=='raj20')
	{
      var ret= stre+'<img src="smile/icon_arrow.gif" alt="Arrow" title="Arrow" border="0">';
    }
	if(st=='raj21')
	{
      var ret= stre+'<img src="smile/icon_neutral.gif" alt="Neutral" title="Neutral" border="0">';
    }
	if(st=='raj22')
	{
      var ret= stre+'<img src="smile/icon_mrgreen.gif" alt="Mr. Green" title="Mr. Green" border="0">';
    }
	if(st=='raj23')
	{
      var ret= stre+'<img src="smile/worshippy.gif" alt="Worshippy" title="Worshippy" border="0">';
    }
	

	document.getElementById("string1").value=ret;
	}

function showResult(str1)
{

var str=  document.getElementById("string1").value;
alert(str1);
alert(str);

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
    alert("here");
    var ret=xmlhttp.responseText;
	document.getElementById("string1").value=ret;
    }
  }
xmlhttp.open("GET","./server.php?string="+str+"&sort="+str1,true);
xmlhttp.send();




}
</script>
 
<style type="text/css">


.table{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#333;
	background-color:#E4E4E4;	
	margin-top:50px;
	margin-bottom:100px;
margin-right:50px;
margin-left:10px;

}
.table td{
	background-color:#F8F8F8;	
	
}
</style>
</head>
<body >


<label>subject:</label>
<input type="text" name="string" id="string"/>
<br>
<div>
 <label>UPLOAD IMAGE(Enter only online upload link)</label>
 <input type="text" name="string2" id="string2"/>
 <br>
 <label>or upload image here!!!</label>
 <a href="http://www.postimage.org/" target="_blank">UPLOAD HERE</a>
 </div>



</br>
</br>
<input type="submit" name="sort" value="Bold_start" onclick=showResult(this.value)>
<input type="submit" name="sort" value="Bold_close" onclick=showResult(this.value)>
<input type="submit" name="sort" value="underline_start" onclick=showResult(this.value)>
<input type="submit" name="sort" value="underline_close" onclick=showResult(this.value)>
<input type="submit" name="sort" value="italic_start" onclick=showResult(this.value)>
<input type="submit" name="sort" value="italic_close" onclick=showResult(this.value)>
<input type="submit" name="sort" value="clear" onclick=showResult(this.value)>
<div id="smilies">
        	<span class="gensmall">Emotions</span>
                        <div class="s-row">
                        <a>
                <img src="smile/icon_biggrin.gif" alt="Very Happy" title="Very Happy" border="0" onClick="emoticon('raj')">
            </a>
                        <a >
                <img src="smile/icon_smile.gif" alt="Smile" title="Smile" border="0" onClick="emoticon('raj1')">
            </a>
                        <a >
                <img src="smile/icon_sad.gif" alt="Sad" title="Sad" border="0" onClick="emoticon('raj2')">
            </a>
                        <a >
                <img src="smile/icon_surprised.gif" alt="Surprised" title="Surprised" border="0" onClick="emoticon('raj4')">
            </a>
                        </div>
                        <div class="s-row">
                        <a >
                <img src="smile/icon_eek.gif" alt="Shocked" title="Shocked" border="0" onClick="emoticon('raj5')">
            </a>
                        <a >
                <img src="smile/icon_confused.gif" alt="Confused" title="Confused" border="0" onClick="emoticon('raj6')">
            </a>
                        <a >
                <img src="smile/icon_cool.gif" alt="Cool" title="Cool" border="0" onClick="emoticon('raj7')">
            </a>
                        <a >
                <img src="smile/icon_lol.gif" alt="Laughing" title="Laughing" border="0" onClick="emoticon('raj8')">
            </a>
                        </div>
                        <div class="s-row">
                        <a >
                <img src="smile/icon_mad.gif" alt="Mad" title="Mad" border="0" onClick="emoticon('raj9')">
            </a>
                        <a >
                <img src="smile/icon_razz.gif" alt="Razz" title="Razz" border="0" onClick="emoticon('raj10')">
            </a>
                        <a >
                <img src="smile/icon_redface.gif" alt="Embarassed" title="Embarassed" border="0" onClick="emoticon('raj11')">
            </a>
                        <a >
                <img src="smile/icon_cry.gif" alt="Crying or Very sad" title="Crying or Very sad" border="0" onClick="emoticon('raj12')">
            </a>
                        </div>
                        <div class="s-row">
                        <a >
                <img src="smile/icon_evil.gif" alt="Evil or Very Mad" title="Evil or Very Mad" border="0" onClick="emoticon('raj13')">
            </a>
                        <a >
                <img src="smile/icon_twisted.gif" alt="Twisted Evil" title="Twisted Evil" border="0" onClick="emoticon('raj14')">
            </a>
                        <a >
                <img src="smile/icon_rolleyes.gif" alt="Rolling Eyes" title="Rolling Eyes" border="0" onClick="emoticon('raj15')">
            </a>
                        <a >
                <img src="smile/icon_wink.gif" alt="Wink" title="Wink" border="0" onClick="emoticon('raj16')">
            </a>
                        </div>
                        <div class="s-row">
                        <a >
                <img src="smile/icon_exclaim.gif" alt="Exclamation" title="Exclamation" border="0" onClick="emoticon('raj17')">
            </a>
                        <a >
                <img src="smile/icon_question.gif" alt="Question" title="Question" border="0" onClick="emoticon('raj18')">
            </a>
                        <a >
                <img src="smile/icon_idea.gif" alt="Idea" title="Idea" border="0" onClick="emoticon('raj19')">
            </a>
                        <a >
                <img src="smile/icon_arrow.gif" alt="Arrow" title="Arrow" border="0" onClick="emoticon('raj20')">
            </a>
                        </div>
                        <div class="s-row">
                        <a >
                <img src="smile/icon_neutral.gif" alt="Neutral" title="Neutral" border="0" onClick="emoticon('raj21')">
            </a>
                        <a >
                <img src="smile/icon_mrgreen.gif" alt="Mr. Green" title="Mr. Green" border="0" onClick="emoticon('raj22')">
            </a>
                        <a >
                <img src="smile/worshippy.gif" alt="Worshippy" title="Worshippy" border="0" onClick="emoticon('raj23')">
            </a>
                        </div>
                    </div>
<br>


 <form method="post">


<textarea rows="10" cols="50" name="string1" id="string1">
</textarea>
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="" valign="top"> Validation code:</td>
      <td><img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="6_letters_code" name="6_letters_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh
        <p></p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" onClick="return validate();" value="Submit"></td>
    </tr>
  </table>
</form>

<script type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script> 

</body>
</html>