// JScript File

var current;
var total;
var type;

$(document).ready(function () {
    var query = window.location;
    query = query.search.substring(1);
    value = query.split('&');
    for (var i = 0; i < value.length; i++) {
        var k = value[i].split('=');
        if (k[0] == 'element')
            type = k[1];
        //alert(type);
    }
});

$(document).ready(function () {
    document.getElementById("elementing").innerHTML = '<img src="files/images/header-'+type+'.jpg" />';
});



function calctot() {
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
            total = xmlhttp2.responseText;
            // alert(total);

        }
    }
    xmlhttp2.open("GET", "totalelements.php?type=" + type, true);
    xmlhttp2.send();



}

$(document).ready(function () {

//    $("#main_post").fadeOut("fast");
//    $("#more_topics").fadeOut("fast");
   current = 1;
   addmore();
});


function adddata(obj) {
    var s = String();
    document.getElementById("all_posts").innerHTML = "";
    current = obj.length;
    //alert(obj.length+ "  "+ tym);
    calctot();
    for (var i = 0; i < obj.length; i++) {
        if(obj[i][5][0].length>500)
        obj[i][5][0] = obj[i][5][0].substring(0, 500) + "...";

        
        s += '<div class="post"> <div class="post-img"> <a href="elementpost.html?type=' + obj[i][0] + '&id=' + obj[i][1] + '"> <img width="115" height="115" title="' + obj[i][2] + '" alt="' + obj[i][2] + '" src="' + obj[i][3][0] + '"></a> </div> <div class="mid"> <div class="title"> <div class="title-icon icon' + type + '"></div> <div class="entry-title-cont"> <h2 class="entry-title"><a title="Permalink to' + obj[i][2] + '" href="elementpost.html?type=' + obj[i][0] + '&id=' + obj[i][1] + '">' + obj[i][2] + '</a></h2> </div> <div class="clear"></div> </div>  <div class="mid-inner">   <div class="entry-content" id="entry_content_1"> ' + obj[i][5][0] + ' <div class="read-more"><a href="elementpost.html?type=' + obj[i][0] + '&id=' + obj[i][1] + '">[Continue Reading]</a></div> </div> <!-- .entry-content -->    </div>  </div>     </div>';
       
    }
    //alert(s);
    if (s == "")
        s = '<div style="margin:50px 5px 20px 5px ; padding:30px 10px 30px 250px; background-color:rgb(207,227,213);"><h3>No topics or posts met your search criteria.</h3></div>';
    document.getElementById("all_posts").innerHTML = s;

   $("#all_posts").fadeIn(1000);
   $("#more_topics").fadeIn(1000);


}

function addmore() {

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           // alert("search obj");
            var obj = jQuery.parseJSON(xmlhttp.responseText);
            //alert(obj[0][3][0]);
            //alert(current);
            //alert("got object");
            //alert("element.php?type=" + type + "&current=" + current);
            adddata(obj);
        }
    }
    //alert(current);
    
    //$('#comment-thread-outer').toggle();
    //$('#main').toggle();
    xmlhttp.open("GET", "element.php?type=" + type + "&current=" + current, true);
    xmlhttp.send();
}

function moreblog() {
    if (current < total) {

        $("#all_posts").fadeOut("fast");
        $("#more_topics").fadeOut("fast");
        current += 1;
        addmore();
    }

}


//$(document).ready(function () {
//    recent();

//});

//function recent() {
//    $("#new").toggle(500);
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
//            //alert(""+obj2[0]+"");
//            upd(obj1);

//            timer = setTimeout('recent()', 9000);
//        }
//    }
//    xmlhttp1.open("GET", "Btype.php?type=2&page=5&sort=i3", true);
//    xmlhttp1.send();

//}

//function upd(obj) {
//    // alert(time());
//    for (var i = 0; i < 5; i++) {
//        var year = obj[i][3].substring(0, 4);
//        var month = obj[i][3].substring(5, 7);
//        var date = obj[i][3].substring(8, 10);

//        var hr = obj[i][3].substring(11, 13);
//        var min = obj[i][3].substring(14, 16);
//        var tym = "";
//        if ((new Date()).getFullYear() > parseInt(year)) {
//            tym = (new Date().getFullYear() - year) + " year ";
//        }
//        else if ((new Date()).getMonth() > parseInt(month)) {
//            tym = (new Date().getMonth() - month) + " Month ";
//        }
//        else if ((new Date()).getDate() > parseInt(date)) {
//            tym = (new Date().getDate() - date) + " days ";
//        }

//        else if ((new Date()).getHours() > parseInt(hr)) {
//            tym = (new Date().getHours() - hr) + " Hours ";
//        }
//        else if ((new Date()).getMinutes() > parseInt(min)) {
//            tym = (new Date().getMinutes() - min) + " Minutes ";
//        }
//        else
//            tym = "Seconds "
//        //alert(tym);






//        //alert(year+month+date+hr+min);
//        //alert(obj[i][3]);

//        aurthor = obj[i][2].replace(" ", "+");
//        document.getElementById("Li" + (i + 1)).innerHTML = '<a href="./Mblog.php?p=' + obj[i][0] + '"><span class="bullet"></span>' + obj[i][1] + '</a><span class="details">by <a href="aurthor.php?search=' + aurthor + '">' + obj[i][2] + '</a> ' + tym + 'ago</span>';
//    }
//    $("#new").toggle(1000);
//}


