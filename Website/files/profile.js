// JScript File

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

            //alert(current);
            //alert("got object");
            addblog(obj);
        }
    }
    //alert(current);
    xmlhttp.open("GET", "profile.php", true);
    xmlhttp.send();

});

function addblog(obj) {
    var s = String();
    document.getElementById("main_post").innerHTML = "";
    current = obj.length;
    for (var i = 0; i < obj.length; i++) {
        aurthor = obj[i][2].replace(" ", "+");
        if (obj[i][5].length < 2)
            s += '<!-- start privew of blog--> <div class="post"> <div class="p-head"> <h2 class="title"> <a href="./Mblog.php?p=' + obj[i][0] + '" title="Permanent Link to ' + obj[i][1] + '">' + obj[i][1] + '</a> </h2>  <div class="metadata"> <span class="content">Posted ' + obj[i][3] + ' by <strong> <a href="aurthor.php?search=' + aurthor + '" title="Posts by ' + obj[i][2] + '@greenrar.com" rel="author">' + obj[i][2] + '@greenrar.com</a> </strong> </span> </div>  <div class="comment"> Comments : ' + obj[i][4] + ' </div> </div>   <div class="p-con"> <p> ' + obj[i][6] + ' <a href="./Mblog.php?p=' + obj[i][0] + '" class="read_more"></a>  </p> <div class="clear"></div> </div>    </div> <!--end blog privew-->';
        else
            s += '<!-- start privew of blog--> <div class="post"> <div class="p-head"> <h2 class="title"> <a href="./Mblog.php?p=' + obj[i][0] + '" title="Permanent Link to ' + obj[i][1] + '">' + obj[i][1] + '</a> </h2>  <div class="metadata"> <span class="content">Posted ' + obj[i][3] + ' by <strong> <a href="aurthor.php?search=' + aurthor + '" title="Posts by ' + obj[i][2] + '@greenrar.com" rel="author">' + obj[i][2] + '@greenrar.com</a> </strong> </span> </div>  <div class="comment"> Comments : ' + obj[i][4] + ' </div> </div>   <div class="p-con"> <a href="./Mblog.php?p=' + obj[i][0] + '"> <img src="' + obj[i][5] + '" class="post-thumb" alt="Alternate to pic here" title="' + obj[i][5] + '" /> </a> <p> ' + obj[i][6] + ' <a href="./Mblog.php?p=' + obj[i][0] + '" class="read_more"></a>  </p> <div class="clear"></div> </div>    </div> <!--end blog privew-->';
    }
    if (s == "")
        s = '<div style="margin:50px 5px 20px 5px ; padding:30px 10px 30px 250px; background-color:rgb(207,227,213);"><h3>No topics or posts met your search criteria.</h3></div>';
    document.getElementById("main_post").innerHTML += s;
    $("#main_post").fadeIn(1000);
    $("#more_topics").fadeIn(1000);


}
$(document).ready(function () {
    recent();

});

function recent() {
    $("#new").toggle(500);
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
            //alert(""+obj2[0]+"");
            upd(obj1);

            timer = setTimeout('recent()', 9000);
        }
    }
    xmlhttp1.open("GET", "Btype.php?type=2&page=5&sort=i3", true);
    xmlhttp1.send();

}

function upd(obj) {
    // alert(time());
    for (var i = 0; i < 5; i++) {
        var year = obj[i][3].substring(0, 4);
        var month = obj[i][3].substring(5, 7);
        var date = obj[i][3].substring(8, 10);

        var hr = obj[i][3].substring(11, 13);
        var min = obj[i][3].substring(14, 16);
        var tym = "";
        if ((new Date()).getFullYear() > parseInt(year)) {
            tym = (new Date().getFullYear() - year) + " year ";
        }
        else if ((new Date()).getMonth()+1 > parseInt(month)) {
            tym = (new Date().getMonth() - month+1) + " Month ";
        }
        else if ((new Date()).getDate() > parseInt(date)) {
            tym = (new Date().getDate() - date) + " days ";
        }

        else if ((new Date()).getHours() > parseInt(hr)) {
            tym = (new Date().getHours() - hr) + " Hours ";
        }
        else if ((new Date()).getMinutes() > parseInt(min)) {
            tym = (new Date().getMinutes() - min) + " Minutes ";
        }
        else
            tym = "Seconds "
        //alert(tym);






        //alert(year+month+date+hr+min);
        //alert(obj[i][3]);
        aurthor = obj[i][2].replace(" ", "+");
        document.getElementById("Li" + (i + 1)).innerHTML = '<a href="./Mblog.php?p=' + obj[i][0] + '"><span class="bullet"></span>' + obj[i][1] + '</a><span class="details">by <a href="aurthor.php?search=' + aurthor + '">' + obj[i][2] + '</a> ' + tym + 'ago</span>';
    }
    $("#new").toggle(1000);
}

$(document).ready(function () {
    $("#info").fadeOut("fast");

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
            var det = jQuery.parseJSON(xmlhttp2.responseText);
            //alert(det[0][0]);
            addusrdetals(det);
        }
    }
    //alert(current);
    xmlhttp2.open("GET", "usrdetails.php", true);
    xmlhttp2.send();

});
function addusrdetals(obj) {
    var detal = new Array();
    detal[0] = 'Email Id';
    detal[1] = 'Username';
    detal[2] = 'Password';
    detal[3] = 'Date of Birth';
    detal[4] = 'Mobile No.';
    detal[5] = 'Secret Question';
    detal[6] = 'Answer';
    detal[7] = 'Total No. Of Comments';
    detal[8] = 'Total No. Of Blogs Written';
    var s = '<h1>Details</h1><br /><br />';
    for (var i = 0; i < 9; i++) {
        s += '<p>' + detal[i] + ' : ' + obj[0][i] + '</p>';
    }
    document.getElementById("info").innerHTML = s;
    $("#info").fadeIn(1000);


}