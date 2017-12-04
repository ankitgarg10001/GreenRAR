// JScript File

var id;
var type;
var tot;

$(document).ready(function () {
    var query = window.location;
    query = query.search.substring(1);
    value = query.split('&');
    for (var i = 0; i < value.length; i++) {
        var k = value[i].split('=');
        if (k[0] == 'type')
            type = k[1];
        if (k[0] == 'id')
            id = k[1];
        //alert(type);
    }
    //alert(type);
    calctot();
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
            tot = xmlhttp2.responseText;
            //alert(total);

        }
    }
    xmlhttp2.open("GET", "totalelements.php?type=" + type, true);
    xmlhttp2.send();



}
$(document).ready(function () {
    document.getElementById("elementing").innerHTML = '<img src="files/images/header-' + type + '.jpg" />';


});


$(document).ready(function () {

    //    $("#main_post").fadeOut("fast");
    //    $("#more_topics").fadeOut("fast");    
    addmore();
});


function adddata(obj) {
    var s = String();
    document.getElementById("all_posts").innerHTML = "";
    //current = obj.length;
    //alert(obj.length+ "  "+ tym);
    //calctot();
    for (var i = 0; i < obj.length; i++) {
        s += '<div class="post">  <div class="mid"> <div class="title"> <div class="title-icon icon' + type + '"> </div> <div class="entry-title-cont"> <h2 class="entry-title"> <a title="Permalink to' + obj[i][2] + '" href="elementpost.html?type=' + obj[i][0] + '&id=' + obj[i][1] + '"> ' + obj[i][2] + ' </a> </h2> </div> <div class="clear"> </div> </div>  <div class="post-img"> <img width="115" height="115" title="' + obj[i][2] + '" alt="' + obj[i][2] + '" src="' + obj[i][3][0] + '"> </div> <div class="clear"> <div class="mid-inner">   <div class="entry-content" id="entry_content_1"> ' + obj[i][5][0] + ' </div> <!-- .entry-content -->    </div>  </div>     </div>';
    }
    //alert(s);
    if (s == "")
        s = '<div style="margin:50px 5px 20px 5px ; padding:30px 10px 30px 250px; background-color:rgb(207,227,213);"><h3>No topics or posts met your search criteria.</h3></div>';
    document.getElementById("all_posts").innerHTML = s;
    //alert(type + '  ' + id);
    if (id > 1)
        document.getElementById("prev").innerHTML = '<a href="elementpost.html?type=' + type + '&id=' + (parseInt(id) - 1) + '"><-- Previous Post</a>';
    //alert(id + "  " + tot);
    if (id < tot)
        document.getElementById("next").innerHTML = '<a href="elementpost.html?type=' + type + '&id=' + (parseInt(id) + 1) + '">Next Post--></a>';
    var s = '';
    s = '<div class="comment-thread"><ol id="com">';
    for (var i = 0; i < obj[0][6].length; i++) {
        s += '<li id="' + (i + 1) + '" class="comment"><div class="det"><div class="nam"><a>' + obj[0][6][i][0] + '</a></div><div class="tym">' + obj[0][6][i][2] + '</div></div><div class="comdat">' + obj[0][6][i][1] + '</div></li>';

        //alert(s);
    }
    //alert(s);
    s += '</ol></div>';
    document.getElementById("maincomments").innerHTML = s;



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
            //alert(obj[0][6][0][0]);
            adddata(obj);
        }
    }
    //alert(current);

    //$('#comment-thread-outer').toggle();
    //$('#main').toggle();
    xmlhttp.open("GET", "elementpost.php?type=" + type + "&id=" + id, true);
    xmlhttp.send();
}



function newcomment() {
    var cmt = document.getElementById('newcomment').textContent;

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp5 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp5 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp5.onreadystatechange = function () {
        if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200) {
            var obj = xmlhttp5.responseText;
            var s = ""
            if (obj == "0") {//done
                alert("Comment Added!!");
                location.reload();

            }
            else if (obj == "1") {//done
                alert("There Was Some Error..Please Retry");
                //location.reload();

            }
            else if (obj == "2") {//done
                alert("Please Login First..");
                window.location = "./sign2.html"

            }
            document.getElementById('allcomments').innerHTML = s;

        }
    }
    xmlhttp5.open("GET", "addelementcomment.php?id="+id+"&type="+type+"&data="+cmt, true);
    xmlhttp5.send();
}