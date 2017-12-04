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

    //next_text = $('#slide_' + now + ' > a.link').attr('trunc_title');
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
    slide_timer = setTimeout('slide_switcher(' + x_start + ')', 4000);
}

function slide_switcher(x_switch) {
    //console.log('slider_switcher timerID: '+slide_timer);
    $('#slide_' + x_switch).fadeOut("slow");
    $('.pagi').removeClass('pagi_current');
    callNext(x_switch);
}

function callNext(blah) {
    //next_text = $('#slide_' + x_next + ' > a.link').attr('trunc_title');
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
       // alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           // alert("search obj");
            var obj = jQuery.parseJSON(xmlhttp.responseText);

            //alert("got object");
            // alert(""+obj[0][0] + "\n  " + obj[0][1]+"");
            changeright(obj);
        }
    }
    xmlhttp.open("GET", "coltopics.php", true);
    xmlhttp.send();
});


function changeright(obj) {
    var arr = new Array("earth", "air", "energy", "water", "species", "laws", "greentube", "green_lifestyle", "buildings", "current+affairs");
    for (var i = 0; i < 10; i++) {
        if (obj[i] != null) {
            //alert(obj[i][2]);
            if (i != 6) {
                document.getElementById("element" + i).setAttribute('href', 'elementpost.html?type=' + obj[i][0] + '&id=' + obj[i][1]);
                document.getElementById("element" + i).innerHTML = '' + obj[i][2] + '';

            } // alert("Done:" + obj[i][0] + "/n" + obj[i][1] + "");
            else {
                document.getElementById("element" + i).setAttribute('href', 'Greentube.html?id=' + obj[i][0] + '');
                document.getElementById("element" + i).innerHTML = '' + obj[i][1] + '';

            }
        }

    }
}

//xmlhttp[5];

//function req(i)
//{
//    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
//        xmlhttp[i] = new XMLHttpRequest();
//        //alert("request done");
//    }
//    else {// code for IE6, IE5
//        xmlhttp[i] = new ActiveXObject("Microsoft.XMLHTTP");
//    }
//    xmlhttp[i].onreadystatechange = function () {
//        if (xmlhttp[i].readyState == 4 && xmlhttp[i].status == 200) {
//            //alert("search obj");
//            var obj1 = jQuery.parseJSON(xmlhttp[i].responseText);
//        }
//    }




//}









//$(document).ready(function () {
//    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
//        xmlhttp1 = new XMLHttpRequest();
//        //alert("request done");
//    }
//    else {// code for IE6, IE5
//        xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
//    }
//    xmlhttp1.onreadystatechange = function () {
//        if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
//            //alert("search obj");
//            var obj1 = jQuery.parseJSON(xmlhttp1.responseText);

//            //alert("got object");
//            // alert(""+obj[0][0] + "\n  " + obj[0][1]+"");
//            changeleft(obj1, "f");
//        }
//    }
//    xmlhttp1.open("GET", "coltopics.php?c=0", true);
//    xmlhttp1.send();
//});

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
    s = '<a href="Mblog.php?p=' + obj[0] + '"><div><p style="margin: 20px 30px 5px 10px; text-align: center;">' + obj[1] + '</p><p id="blogdata" style="margin: 15px 10px 5px 70px;"></p><p style="margin:50px 5px 5px 0px;text-align:right"><a style="margin-right:10px;color:white;font-size:16px;" href="aurthor.php?search=' + obj[2] + '">' + obj[2] + '</a></p></div></a>';
    document.getElementById("home_et_world_pop_2").innerHTML = s;

    //$.get(obj[3], function (data) {
    //    document.getElementById("blogdata").innerHTML = data;

    //},text);


}

//video sidebar
$(document).ready(function () {
    video();
});

function video() {
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
            sidebar(obj3, "et_persp");
            timer = setTimeout('video()', 9000);

        }
    }
    xmlhttp3.open("GET", "sidebar.php?c=0", true);
    xmlhttp3.send();

}

//$(document).ready(function () {
//    function timeout_init() {
//        setTimeout('news(()', 6000);
//        alert("timed out");
//    }

//});

$(document).ready(function () {
    news();

});
function news() {
    //alert("called");
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
            //alert(""+obj4[1][0]+"");
            sidebar(obj4, "et_news");
            timer = setTimeout('news()', 5000);
            //alert("timer set");

        }
    }
    xmlhttp4.open("GET", "sidebar.php?c=1", true);
    xmlhttp4.send();

}
function sidebar(obj, s) {
    $("#" + s).toggle(500);  //try always refresh from server if values dont change
    var x = String();
    x = '';
    if (s == "et_news") {
        var a = "news";
        for (var i = 0; i < 5; i++) {

            x += '<li><div style="height:55px;"><a href="news.php?id=' + obj[i][0] + '" id="news' + i + '" title=' + obj[i][2] + ' ><div class="cont"><p>' + obj[i][1] + '</p></div></a></div></li>';

            //x += '<li><div style="height:55px;"><a href="elements.php?tab=' + a + '&id=' + obj[i][0] + '"><div class="cont"><p>' + obj[i][1] + '</p></div></a></div></li>';
        }
    }
    else {
        var a = "videos";
        for (var i = 0; i < 5; i++) {
            x += '<li><div style="height:55px;"><a href="Greentube.html?id=' + obj[i][0] + '"><div class="cont"><p>' + obj[i][1] + '</p></div></a></div></li>';
        }
    }


    document.getElementById(s).innerHTML = x;

    $('#' + s).toggle(1500);
}


$(document).ready(function () {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp5 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp5 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp5.onreadystatechange = function () {
        if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200) {
            //alert("search obj");
            var obj5 = jQuery.parseJSON(xmlhttp5.responseText);
            //alert("got object");
            //alert(""+obj5[0]+"");
            sidevid(obj5);

        }
    }
    xmlhttp5.open("GET", "sidevid.php", true);
    xmlhttp5.send();

});
function sidevid(obj) {
    //alert(obj[2]);
    jwplayer("myElement").setup({
        file: obj[2],
        height: 174,
        width: 328,
    });
    //s = '<video width="328" height="174" controls="controls" ><source src="' + obj[2] + '.mp4" type="video/mp4"><source src="' + obj[2] + '.webm" type="video/webm">Your browser does not support the video tag.</video>';
    //s = '<script type="text/javascript"> jwplayer("myElement").setup({ file: "files/videonews/c.mp4", height: 174, width:328, }); </script>';
    //document.getElementById("sidevid").innerHTML += s;
}


$(document).ready(function () {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp6 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp6 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp6.onreadystatechange = function () {
        if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200) {
            //alert("search obj");
            var obj6 = xmlhttp6.responseText;
            //alert("got object");
            //alert(""+obj6+"");
            //document.getElementById("sidevid").innerHTML=();
            document.getElementById('rajul').innerHTML = obj6;

        }
    }
    xmlhttp6.open("GET", "loginstatus.php", true);
    xmlhttp6.send();

});
function googlesearch() {
    var s = document.getElementById("search-query").value;
    var s = s.replace(' ', '+');
    //var url = "http://www.google.com/search?sitesearch=greenrar.web44.net&as_q=" + s;
    var url = "crawler.php?q=" + s;
    //alert(url);
    //window.location = url;
    window.open(url, '_blank');
}