<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="files/images/logo.ico">
    <title>GreenRAR</title>
    <link rel="stylesheet" type="text/css" media="all" href="files/style.css" />
    <link type="text/css" href="files/jx.bar.css" rel="stylesheet" />
    <script type="text/javascript" src="files/jquery-1.4.2.min.js"></script>
    <meta name="google-translate-customization" content="4e2eb08d8a5f60e2-dec951a7106d3688-g7f117e2120f5c955-13" />
</head>

<body class="home" style="background-color: aqua;">
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
           <div style="margin-top:20px;padding:20px;">
            <h1 class="head">SITE MAP FOR GREENRAR.WEB44.NET</h1>
           </div>
        <?php
        include 'simple_html_dom.php';
        set_time_limit(300);
        $ans=array();
        $str1="./index.html";
        $con = mysql_connect("localhost","root","ankit");
        //include_once($str1);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db("greenrar", $con);
        mysql_query("DELETE FROM sitemap");
        func($str1);
        class Crawler
        {
            
            protected $markup = "";
            public function __construct($url)
            {
                $this->markup = $this->getMarkup($url);
            }
            
            public function getMarkup($url)
            {
                return file_get_contents($url);
            }
            
            public function get($type)
            {
                $method = "_get_{$type}";
                if (method_exists($this, $method))
                {
                    return call_user_func(array($this, $method));
                }
            }
            
            protected function _get_images()
            {
                if (!empty($this->markup))
                {
                    preg_match_all('/<img [^>]*src="?([^ ">]+)"?/i', $this->markup, $images);
                    return !empty($images[1]) ? $images[1] : FALSE;
                }
            }
            
            protected function _get_links()
            {
                if (!empty($this->markup))
                {
                    preg_match_all('/<a [^>]*href="?([^ ">]+)"?/i', $this->markup, $links);
                    return !empty($links[1]) ? $links[1] : FALSE;
                }
            }
        }  // End of Crawler class




        function func($str)
        { 
            if(isset($str) && $str != '')
            {
                $url = $str;
                //We must enter http:// or https:// before the url, if it does not, then we check here
                //and write http if needed.
                //Create an object of class Crawler.
                $crawl = new Crawler($url);
                //Call the function get() with argument "links"
                $links  = $crawl->get('links');
                $links[]=$str;
                //$i = 0;
                //$j = 0;
                //Here we chech if array $links is empty or not. If it empty then we just pass the control to
                //the else condition.
                if(!empty($links))
                {
                    //Here we print the hyperlinks
                    foreach($links as $link)
                    {
                        //echo $link."<br><br>";
                        $link=mysql_real_escape_string($link);
                        mysql_query("INSERT INTO `sitemap`(`links`) VALUES ('$link')");
                        //echo $link."<br><br>";
                    }
                    $result=mysql_query("select DISTINCT `links` from sitemap order by links");
                    while($row = mysql_fetch_array($result))
                    {
                        
                        
                        //$data=file_get_html($row[0])->plaintext;
                        //echo "$row[0]<br><br>";
                       // echo "<h3><a href='".$row[0]."' style='margin:30px;'>".$row[0]."</a></h3><br><br>";
                        echo "<div style='background-color:white;color:black;border-radius:5px;box-shadow:2px 4px 5px #888888;margin:5px 50px;padding:10px 50px;display:block;'> <h3><a href='".$row['links']."'>".$row['links']."</a></h3></div>";
                        
                        //$pos=stripos($data,$_GET['q']); //gets 1st position of occcurence of string
                        
                        //if($pos!==false)
                        //{
                        //    $desc=substr($data,$pos-100,200);
                        //    $ans[$results][0]=$row['link'];
                        //    $ans[$results][1]=$desc;
                        //    $results++;
                        
                        //    echo "<div style='background-color:white;color:black;border-radius:5px;box-shadow:2px 4px 5px #888888;margin:5px 5px;padding:10px;'> <h3><a href='".$row['link']."'>".$row['link']."</a></h3><br/><blockquote style='padding-left:20px'>".$desc."</blockquote><br/><br/></div>";
                        
                        
                        //echo "<a href='".$row['link']."' style='margin:30px;'>".$row['link']."</a>";
                        //echo "<br>";
                        //echo "<p style='margin:30px;'>".$desc."</p>";
                        //echo "<br>";
                        
                    }
                    
                }
                
            }
        }
        
        
        mysql_close($con);
?>
        
        
        
        
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
