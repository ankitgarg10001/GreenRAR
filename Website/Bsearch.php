
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="files/images/logo.ico">
    <title>GreenRAR-SearchBlog</title>
    <link rel="stylesheet" type="text/css" media="all" href="files/style.css" />
    <link type="text/css" href="files/jx.bar.css" rel="stylesheet" />
    <script type="text/javascript" src="files/jquery-1.4.2.min.js"></script>
    <script src="files/Main.js"></script>
    <link href="files/profile.css" rel="stylesheet" />
    <link href="files/blog.css" rel="stylesheet" />
    <script src="files/Recent-Posts.js"></script>
    <meta name="google-translate-customization" content="4e2eb08d8a5f60e2-dec951a7106d3688-g7f117e2120f5c955-13" />
</head>

<!--<body class="home" style="background: url('files/images/backgrounds/bkimg.jpg') no-repeat center top white; background-color: aqua;">-->
<body class="home" style="background-color: aqua;">


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

               

                <div class="sidebar">
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


            </div>
            <?php

            $a=$_POST['search'];
            $s="";
            $con = mysql_connect("localhost","root","ankit");
            if (!$con)
            {
                die('Could not connect: ' . mysql_error());
            }
            if(!(mysql_select_db("greenrar", $con))){
                die("Table Connection Error");
            }
            $sql = "SELECT * FROM blog where `name` LIKE '%$a%'";
            $res=mysql_query($sql,$con);
            $arr=array();
            echo "<div id='main_post'>";
            echo "<span style='font-size:14px;font-weight:bold;float: left;text-transform: uppercase;'>$a searched</span><br/><br/>";
            while($row = mysql_fetch_array($res))
            {
                
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
                $aurthor=str_replace(" ","+",$row[2]);
                if (strlen($row[5]) < 2)
                    $s = '<!-- start privew of blog--> <div class="post"> <div class="p-head"> <h2 class="title"> <a href="./Mblog.php?p=' . $row[0] . '" title="Permanent Link to ' . $row[1]. '">' . $row[1] . '</a> </h2>  <div class="metadata"> <span class="content">Posted ' . $row[3] . ' by <strong> <a href="aurthor.php?search=' .$aurthor . '" title="Posts by ' . $row[2]. '@greenrar.com" rel="author">'. $row[2] . '@greenrar.com</a> </strong> </span> </div>  <div class="comment"> Views : ' . $row[4] . ' </div> </div>   <div class="p-con"> <p> ' . $row[6] . ' <a href="./Mblog.php?p=' . $row[0] . '" class="read_more"></a>  </p> <div class="clear"></div> </div>    </div> <!--end blog privew-->';
                else
                    $s = '<!-- start privew of blog--> <div class="post"> <div class="p-head"> <h2 class="title"> <a href="./Mblog.php?p=' . $row[0] . '" title="Permanent Link to '. $row[1] . '">' . $row[1] . '</a> </h2>  <div class="metadata"> <span class="content">Posted ' . $row[3] . ' by <strong> <a href="aurthor.php?search=' .$aurthor . '" title="Posts by ' . $row[2]. '@greenrar.com" rel="author">' . $row[2] . '@greenrar.com</a> </strong> </span> </div>  <div class="comment"> Views : ' . $row[4] . ' </div> </div>   <div class="p-con"> <a href="./Mblog.php?p=' . $row[0] . '"> <img src="' . $row[5] . '" class="post-thumb" alt="Alternate to pic here" title="' . $row[5] . '" /> </a> <p> ' . $row[6] . ' <a href="./Mblog.php?p=' . $row[0] . '" class="read_more"></a>  </p> <div class="clear"></div> </div>    </div> <!--end blog privew-->';
                echo $s; 
                // $arr[]=$row;
                //echo "<br />";
                // echo "$row[1]";
                // echo "<br />";
            }
            //echo "alert($s)";
            echo "</div>";
            mysql_close($con);
?>
                
                    
                    <div style="height:20px;"></div>


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
