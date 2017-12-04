var slide_timer = 0;
x = 7;
x_next = 7;
$(document).ready(function () {
    next_text = '';
    x_tot = $('.slide').length;
    if (x_next >= x_tot) {
        x_next = 1;
    } else {
        x_next += 1;
    }
    //setInterval('check_timer()', 1000);
    start_slider(x);
});

function clicked_slide_switcher(the_slide) {
    //console.log('clicked_slide_switcher clearTimeout timerID: '+slide_timer);
    clearTimeout(slide_timer);

    //alert(the_slide + ' - ' + x + ' - ' + x_next);
    $('.slide').fadeOut("slow");
    $('.pagi').removeClass('pagi_current');

    callNow(the_slide);
}

function callNow(now) {

    //console.log('callNow clearTimeout timerID: '+timer);
    //clearTimeout(slide_timer);
    //jQuery('#slide_'+x).fadeOut("slow");
    //jQuery('.pagi').removeClass('pagi_current');

    next_text = $('#slide_' + now + ' > a.link').attr('trunc_title');
    next_text_full = $('#slide_' + now + ' > a.link').attr('title');
    next_href = $('#slide_' + now + ' > a.link').attr('href');

    $('#slide_' + now).fadeIn("slow");
    $('#pagi_' + now).parents('.pagi').addClass('pagi_current');

    x = now;

    if (x == x_tot) {
        x_next = 1;
    }
    else {
        x_next = parseInt(x) + 1;
    }

    start_slider(x);


}

function start_slider(x_start) {
    slide_timer = setTimeout('slide_switcher(' + x_start + ')', 2000);
}

function slide_switcher(x_switch) {
    //console.log('slider_switcher timerID: '+slide_timer);
    $('#slide_' + x_switch).fadeOut("slow");
    $('.pagi').removeClass('pagi_current');
    callNext(x_switch);
}

function callNext(blah) {
    next_text = $('#slide_' + x_next + ' > a.link').attr('trunc_title');
    next_text_full = $('#slide_' + x_next + ' > a.link').attr('title');
    next_href = $('#slide_' + x_next + ' > a.link').attr('href');

    $('#slide_' + x_next).fadeIn("slow");
    $('#pagi_' + x_next).parents('.pagi').addClass('pagi_current');

    x = x_next;
    if (x_next == x_tot) {
        x_next = 1;
    } else {
        x_next = parseInt(x_next) + 1;
    }
    start_slider(x);


}


$(document).ready(function () {
    var arr = new Array(12);
    arr[0] = "jan";
    arr[1] = "Feb";
    arr[2] = "Mar";
    arr[3] = "Apr";
    arr[4] = "May";
    arr[5] = "Jun";
    arr[6] = "July";
    arr[7] = "Aug";
    arr[8] = "Sept";
    arr[9] = "Oct";
    arr[10] = "Nov";
    arr[11] = "Dec";
    var d = new Date();
    var dat = d.getDate();
    var mon = d.getMonth();
    $('h3.datetoday').text('' + arr[mon] + ' ' + dat + '');
    //$('.ankit').text('' + arr[mon] + '  ' + dat + '');
});

$(document).ready(function () {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //alert("search obj");
            var obj = jQuery.parseJSON(xmlhttp.responseText);

            //alert("got object");
           // alert(""+obj[0][0] + "\n  " + obj[0][1]+"");
            changeleft(obj,"element");
        }
    }
    xmlhttp.open("GET", "coltopics.php?c=1", true);
    xmlhttp.send();
});


function changeleft(obj,s)
{
	
    //alert("hello");
    //alert("" + obj[0][0] + "\n  " + obj[0][1] + "");
    //str = '<div class="col_head"></div><div class="home_section"><a href="topic/earth/index.html"><img src="files/images/earth.png" class="reg" alt="Earth Home Section" /><img src="files/images/earthafter.png" class="over" alt="Earth" /></a><div class="cat_quick_link_arrow"></div><div class="cat_quick_link_cont" style=""><a href="2012/09/26/spotlight-worlds-most-imperiled-ecosystems/index0d98.html?cat_=3">Spotlight on Worlds Most Imperiled Ecosystems</a></div></div>';
   // document.getElementById("col_topics").innerHTML = str;
    // alert("done");
    if (s == "element")
        var arr = new Array("earth", "air", "energy", "water", "species");
    else
        var arr = new Array("laws", "greentube", "green_lifestyle", "buildings", "current affairs");
    for(var i=0;i<5;i++)
    {
        document.getElementById(s+i+'').setAttribute('href','elements.php?tab='+arr[i]+'&id='+obj[i][1]+'');
    document.getElementById(s+ i + '').innerHTML = '' + obj[i][0] + '';
   // alert("Done:" + obj[i][0] + "/n" + obj[i][1] + "");
    }
	
}

$(document).ready(function () {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp1 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp1.onreadystatechange = function () {
        if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
            //alert("search obj");
            var obj1 = jQuery.parseJSON(xmlhttp1.responseText);

            //alert("got object");
            // alert(""+obj[0][0] + "\n  " + obj[0][1]+"");
            changeleft(obj1, "f");
        }
    }
    xmlhttp1.open("GET", "coltopics.php?c=0", true);
    xmlhttp1.send();
});

$(document).ready(function () {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp2 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp2.onreadystatechange = function () {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
            //alert("search obj");
            var obj2 = jQuery.parseJSON(xmlhttp2.responseText);
            //alert("got object");
            //alert(""+obj2[0]+"");
            blog(obj2);
            
        }
    }
    xmlhttp2.open("GET", "blog.php", true);
    xmlhttp2.send();
});

function blog(obj) {
    
    var s = String();
    s = '<a href="elements.php?tab=blogs&id='+obj[0]+'" title="'+obj[1]+'"><div><p style="margin: 20px 10px 5px 70px; text-align: center;">'+obj[1]+'</p><p id="blogdata" style="margin: 15px 10px 5px 70px;"></p><p style="margin:50px 5px 5px 0px;text-align:right">'+obj[2]+'</p></div></a>';
    document.getElementById("home_et_world_pop_2").innerHTML = s;

    //$.get(obj[3], function (data) {
    //    document.getElementById("blogdata").innerHTML = data;

    //},text);
    

}

//video sidebar
$(document).ready(function () {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp3 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp3.onreadystatechange = function () {
        if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
            //alert("search obj");
            var obj3 = jQuery.parseJSON(xmlhttp3.responseText);
            //alert("got object");
            //alert(""+obj2[0]+"");
            sidebar(obj3,"et_persp");
            
        }
    }
    xmlhttp3.open("GET", "sidebar.php?c=0", true);
    xmlhttp3.send();

});

$(document).ready(function () {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp4 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp4 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp4.onreadystatechange = function () {
        if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
            //alert("search obj");
            var obj4 = jQuery.parseJSON(xmlhttp4.responseText);
            //alert("got object");
            //alert(""+obj2[0]+"");
            sidebar(obj4, "et_news");

        }
    }
    xmlhttp4.open("GET", "sidebar.php?c=1", true);
    xmlhttp4.send();

});
function sidebar(obj,s)
{
    var x = String();
    x='';
    for(var i=0;i<5;i++)
    {
        x += '<li><div style="height:55px;"><a href="elements.php?tab=videos&id=' + obj[i][0] + '"><div class="cont"><p>' + obj[i][1] + '</p></div></a></div></li>';
    }
document.getElementById(s).innerHTML=x;
}