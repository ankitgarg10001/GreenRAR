<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="files/images/logo.ico">
    <title>GreenRAR</title>
    <link rel="stylesheet" type="text/css" media="all" href="files/style.css" />
    <link type="text/css" href="files/jx.bar.css" rel="stylesheet" />
    <script type="text/javascript" src="files/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="files/scripts.js"></script>
    <meta name="google-translate-customization" content="4e2eb08d8a5f60e2-dec951a7106d3688-g7f117e2120f5c955-13" />
    <script src="jwplayer/jwplayer.js"></script>
</head>

<body class="home" style="background: url('files/images/backgrounds/bkimg.jpg') no-repeat center top white; background-color: aqua;">
    <!--<body class="home" style="background: url('files/images/backgrounds/bkimg.jpg') no-repeat center top white; background-color: aqua;" onload="alert('Website Currently Under Development \n      Will Be Up n Running Soon !!! :D')">
    -->

    <div id="float-bar" class="jx-bar jx-bar-button">

        <div class="jx-bar-inner">
            <ul>
                <li><a href="index.html">
                    <img src="files/images/bar button.png" alt="GreenRAR Homepage" style="height: 31px" /></a></li>
            </ul>

            <img style="float: left; margin-left: 40px; height: 31px; width: 550px;" src="files/images/sloka.png" />

            <form action="" name="" method="get">
                <div id="search_area_wrap">
                    <div id="search_area">
                        <span class="search_left"></span>
                        <span class="search_mid">
                            <input type="text" id="search-query" class="search_mid_input" name="srch" />
                        </span>
                        <button type="submit" onclick="googlesearch()" class="search_right"></button>
                    </div>
                </div>
            </form>
            <div id="google_translate_element" style="margin-top: -10px; margin-left: 200px;"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL }, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </div>

    </div>

    <div id="wrapper" class="hfeed">
        <div id="header">
            <div id="header-inner">
                <div id="branding" role="banner">
                    <div id="logo-cont">
                        <a href="index.html" title="Go Green With GreenRAR" rel="home">
                            <img src="files/images/green-logo.png" alt="Go Green With GreenRAR" style="width: 244px; height: 85px;" />
                        </a>
                    </div>

                </div>

                <div id="rajul" style="height: 50px; margin: 0px 10px 10px 750px; text-align: center; color: #666; font-size: 16px; line-height: 18px;">
                </div>


                <!-- Main Topics Short mein :P -->


                <div id="top-nav" role="navigation">
                    <ul id="top-nav-top">
                        <li><a href="Bhome.html">
                            <img src="files/images/top-nav/top-nav-eco-today.png" alt="BLOG" /></a></li>
                        <li><a href="./element.html?element=1">
                            <img src="files/images/top-nav/top-nav-earth.png" alt="Earth" /></a></li>
                        <li><a href="./element.html?element=2">
                            <img src="files/images/top-nav/top-nav-air.png" alt="Air" /></a></li>
                        <li><a href="./element.html?element=3">
                            <img src="files/images/top-nav/top-nav-energy.png" alt="Energy" /></a></li>
                        <li><a href="./element.html?element=4">
                            <img src="files/images/top-nav/top-nav-water.png" alt="Water" /></a></li>
                        <!-- <li><a href="./element.html?element=5">
                            <img src="files/images/top-nav/top-nav-humans.png" alt="Humans" /></a></li>-->
                        <li><a href="./element.html?element=5">
                            <img style="margin-left: 7px;" src="files/images/top-nav/top-nav-species.png" alt="Species" /></a></li>
                    </ul>

                </div>
                <!-- #top-nav -->
            </div>
            <!-- #header-inner -->
        </div>
        <!-- #header -->


        <script>

            jQuery('#top-nav-top > li > a').hover(
                            function () {
                                jQuery(this).addClass('active_hover');//alert(jQuery(this).attr('src'));//
                            },
                            function () {
                                jQuery(this).removeClass('active_hover');
                                //$(this).find("span:last").remove();
                            }
                        );

        </script>
        <div id="main">
        <div style="background-color:white;display:block">
<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `news` WHERE id=$id" ;
    //$sql = "SELECT * FROM video order by tym desc";

$con = mysql_connect("localhost","root","ankit");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

if(mysql_select_db("greenrar", $con)){
    
}
else{
    die("Table Connection Error");
}

$res=mysql_query($sql,$con);
$row = mysql_fetch_array($res);
//echo "here";
//var_dump($row);
    echo "<h1>$row[1]</h1><br><br>";
echo $row[2];

?>
</div>
        
        
        
        </div>
        <!-- #main -->
    </div>
    <!-- #wrapper -->




    <div id="footer">
        <div style="width: 986px; margin: 0 auto;">
            <ul>
                <li style="margin: 7px 10px 5px 10px; position: relative; float: left; color: aquamarine; font-size: 16px;"><a href="Aboutsite.html">About</a></li>

                <li style="margin: 7px 10px 5px 10px; position: relative; float: left; color: aquamarine; font-size: 16px;"><a href="about.html">Contact Us</a></li>

                <li style="margin: 7px 10px 5px 10px; position: relative; float: left; color: aquamarine; font-size: 16px;"><a href="sitemap.php">SiteMap</a></li>


            </ul>
            <div style="margin-right: 20px; margin-bottom: 2px; text-align: right">
                <a href="index.html" title="Greenrar">
                    <img src="files/images/bar button.png" height="30px" /></a>
            </div>


        </div>


    </div>


    <!-- #footer -->
</body>
</html>
