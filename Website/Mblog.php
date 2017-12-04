<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="files/images/logo.ico">
    <title>GreenRAR-Mainblog</title>
    <link rel="stylesheet" type="text/css" media="all" href="files/style.css" />
    <link type="text/css" href="files/jx.bar.css" rel="stylesheet" />
    <script type="text/javascript" src="files/jquery-1.4.2.min.js"></script>
    <script src="files/Mblog.js"></script>
    <script src="files/Main.js"></script>
    <meta name="google-translate-customization" content="4e2eb08d8a5f60e2-dec951a7106d3688-g7f117e2120f5c955-13" />
    <link href="files/Mblog.css" rel="stylesheet" />
   <link href="files/blog.css" rel="stylesheet" />
<?php
$id=$_GET["p"];
session_start();
if(!(isset($_SESSION['name']) ||isset($_COOKIE['name'])) )
{    
    $_SESSION['page'] = './Mblog.php?p='.$id;
    echo "<script type='text/javascript'>";
    echo "alert('Please Login First!!');";
    echo "window.location='Sign2.html';";
    echo "</script>";
    exit();
}

//$con = mysql_connect("localhost","root","ankit");
//if (!$con)
//{
//    die('Could not connect: ' . mysql_error());
//}
//if(!(mysql_select_db("greenrar", $con);)){
//    die("Table Connection Error");
//}
//$arr;
//    $sql="SELECT * FROM blog where `id`=$id";
//    $res=mysql_query($sql,$con);

//    while($row = mysql_fetch_array($res))
//    {
//        $arr=$row;
//        echo "alert($arr[0].$arr[1].$arr[2].$arr[3]);";
//    }

?>

</head>

<!--<body class="home" style="background: url('files/images/backgrounds/bkimg.jpg') no-repeat center top white; background-color: aqua;">-->
<body class="home" style="background-color: rgb(248, 248, 248);">


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
                        <!-- <li><a href="elements.php?tab=earth&id=''">
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
           
            <div class="sidebar" style="margin-top:50px;">
                <h2>Find Blogs:</h2>
                <div class="search_box">
                    <form action="Bsearch.php" method="post">
                        <input name="search" class="search_input" onfocus="if(this.value == 'Enter keyword...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter keyword...';}" type="text" size="25" value="Enter keyword...">
                        <input class="button_find" type="submit" value="">
                    </form>

                </div>
                <ul id="new">
                    <li id="Li0" style="margin-bottom: 10px;">
                        <h2>Recent Posts</h2>
                    </li>
                    <li id="Li1"></li>
                    <li id="Li2"></li>
                    <li id="Li3"></li>
                    <li id="Li4"></li>
                    <li id="Li5"></li>

                </ul>



                <!-- a menu here
            <br />
                side wala dynamically bana dunga
            <br />
                upar apna theme dalna h-->




            </div>
            <!--<iframe id="frame1" src="Bhome.html" style="width: 100%; margin: 0; border: 0px;" onload='javascript:resizeIframe("frame1");' onfocus='javascript:resizeIframe("frame1");'  onmousemove="javascript:resizeIframe('frame1');"></iframe>-->
            <div class="item">

                <div class="article">
                    <div class="article-header">
                        <div class="ribbon date ">
                            <div id="month" class="top ribbon-piece"></div>
                            <div id="date" class="bottom ribbon-piece"></div>
                            <div class="tail">
                                <div class="left ribbon-piece"></div>
                                <div class="right ribbon-piece"></div>
                            </div>
                        </div>
                        <h1 id="title" class="entry-title">
                        </h1>
                    </div>
                    <div class="article-content">
                        <p id="mainimg">
                            <img src="" alt="" height="332" width="500" id="tagimg">
                        </p>
                        <div id="usrdata"></div>
                    </div>
                    <div class="article-footer">

                        <div class="publish-info">
                            Posted
                        <span class="time" id="dattym"></span>
                            by <a class="aurthor" href="" rel="author" id="author"></a>
                        </div>
                    </div>
                    <div class="comments">
                        <div class="comments-header" onclick="addcomments()">
                            <h3><span class="bubble " title="">
                                <span id="comments"></span>
                                <span class="bubble-tail"></span>
                            </span>&nbsp; <span id="comment-actn">View comments</span>
    
                            </h3>
                        </div>
                        <div id="comment-thread-outer">
                        </div>


                    </div>
                </div>
            </div>
            
        
        </div>
        <!-- #main -->
    </div>
    <!-- #wrapper -->




    <div id="footer">
        <div style="width: 986px; margin: 0 auto;">
            <ul>
                <li style="margin: 7px 10px 5px 10px; position: relative; float: left; color: aquamarine; font-size: 16px;"><a href="Aboutsite.html">About</a></li>

                <li style="margin: 7px 10px 5px 10px; position: relative; float: left; color: aquamarine; font-size: 16px;"><a href="About.html">Contact Us</a></li>

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
