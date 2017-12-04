<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
if($q=="Google")
{
    $xml=("http://news.google.co.in/news?q=environment&hl=en&client=firefox-a&hs=fIL&rls=org.mozilla:en-US:official&prmd=imvnsl&bav=on.2,or.r_gc.r_pw.r_qf.&bpcl=37189454&biw=1366&bih=621&um=1&ie=UTF-8&output=rss");
}
elseif($q=="ecology")
{
    $xml=("http://feeds.feedburner.com/EcologyTodayNews?format=xml");
}
elseif($q=="blogger")
{
    $xml=("http://bloggers.com/all/recent.rss");
}

elseif($q=="reuters")
{
    $xml=("http://feeds.reuters.com/reuters/environment");
}

elseif($q=="env")
{
    $xml=("http://www.theenvironmentalblog.org/feed/");
}



$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<p><a href='" . $channel_link
. "'>" . $channel_title . "</a>");
echo("<br />");
//echo($channel_desc . "ankkit</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++)
{
    $item_title=$x->item($i)->getElementsByTagName('title')
    ->item(0)->childNodes->item(0)->nodeValue;
    $item_link=$x->item($i)->getElementsByTagName('link')
    ->item(0)->childNodes->item(0)->nodeValue;
    $item_desc=$x->item($i)->getElementsByTagName('description')
    ->item(0)->childNodes->item(0)->nodeValue;

    echo ("<p><a href='" . $item_link
    . "'>" . $item_title . "</a>");
    echo ("<br />");
    echo ($item_desc . "</p>");
}
?> 