var id, data;
$(document).ready(function () {
    var query = window.location;
    query = query.search.substring(1);
    value = query.split('&');
    for (var i = 0; i < value.length; i++) {
        var k = value[i].split('=');
        if (k[0] == 'p')
            id = k[1];
    }
    $('#comment-thread-outer').toggle();
    $('#main').toggle();

    // alert(id);
});


$(document).ready(function startpg() {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp1 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp1.onreadystatechange = function () {
        if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
            data = jQuery.parseJSON(xmlhttp1.responseText);
            //s = obj[0] + "\n" + obj[1] + "\n" + obj[2] + "\n" + obj[3] + "\n" + obj[4] + "\n" + obj[5] + "\n" + obj[6] + "\n";
            //alert("got");
            populateblog();

        }
    }
    xmlhttp1.open("GET", "getblog.php?id=" + id, true);
    xmlhttp1.send();
});

function populateblog() {
   // if (typeof data[4].length === 'undefined')
   //alert(data[4].length);
    var timestamp = data[3];


    // alert(timestamp);
    month = timestamp.substring(5, 7);
    date = timestamp.substring(8, 10);
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
    document.getElementById('month').innerHTML = arr[month - 1];
    document.getElementById('date').innerHTML = date;
    document.getElementById('title').innerHTML = data[1];
    if (data[5].length < 2) {
        $("#mainimg").hide();
        //alert("hidden img");
    }
    else {
        $("#tagimg").attr("src", data[5]);
    }
    document.getElementById("usrdata").innerHTML = data[6];
    document.getElementById("dattym").innerHTML = date + " " + arr[month - 1] + " " + timestamp.substring(0, 4) + "&nbsp;&nbsp;&nbsp;" + timestamp.substring(11);
    aurthor = data[2].replace(" ", "+");
    document.getElementById("author").setAttribute("href", "aurthor.php?search=" + aurthor + "");

    document.getElementById("author").innerHTML = data[2];

    //alert(" "+data[4].length);
    if (data[4].length)

        document.getElementById("comments").innerHTML = data[4].length;
    else
        document.getElementById("comments").innerHTML = '0';
    $('#main').show(1000);



}

function addcomments() {

    // alert("came in");
    var s = '';
    s = '<div class="comment-thread"><ol id="com">';
    for (var i = 0; i < data[4].length; i++) {
        //alert(data[4][i][1] + data[4][i][2] + data[4][i][3] + data[4][i][0]);
        s += '<li id="' + (i + 1) + '" class="comment"><div class="det"><div class="nam"><a>' + data[4][i][1] + '</a></div><div class="tym">' + data[4][i][3] + '</div></div><div class="comdat">' + data[4][i][2] + '</div></li>';

        //alert(s);
    }
    //alert(s);
    s += '</ol><h3>Add comment</h3><div class="comment-replybox-thread"><textarea id="newcomment" cols="60" rows="8" placeholder="Enter Your Comment Here..."></textarea><br /><button type="button" style="margin: 10px 0px 10px -330px;" onclick="newcomment()">Submit</button></div></div>';

    //alert(s);
    document.getElementById("comment-thread-outer").innerHTML = s;
    if (document.getElementById("comment-actn").innerHTML == "View comments")
        document.getElementById("comment-actn").innerHTML = "Hide comments";
    else
        document.getElementById("comment-actn").innerHTML = "View comments";

    $('#comment-thread-outer').toggle(1000);

}

//sidebar now


$(document).ready(function () {
    recent();
});

function recent() {
    $("#new").hide(500);
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp2 = new XMLHttpRequest();
        //alert("request done");
    }
    else {// code for IE6, IE5
        xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp2.onreadystatechange = function () {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {

           // alert("search obj");
            var obj1 = jQuery.parseJSON(xmlhttp2.responseText);
           // alert("got object");
           // alert(""+obj1[0]+"");
            upd(obj1);

            timer = setTimeout('recent()', 9000);
        }
    }
    xmlhttp2.open("GET", "Btype.php?type=2&page=5&sort=i3", true);
    xmlhttp2.send();

}

function upd(obj) {
    // alert(time());
    //alert((new Date()).getFullYear() + " " + (new Date()).getMonth() + " " + (new Date()).getDate());
    for (var i = 0; i < 5; i++) {
        var year = obj[i][3].substring(0, 4);
        var month = obj[i][3].substring(5, 7);
        var date = obj[i][3].substring(8, 10);
       // alert(year + " " + month + " " + date);
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
    $("#new").show(1000);
}

function newcomment() {
    var cmt = document.getElementById('newcomment').textContent;
    //alert(cmt);
    cmt = cmt.replace(' ', '+');
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
            var obj3 = xmlhttp3.responseText;
            //alert(obj3);

            if (obj3 == 'true') {
                alert("Comment Submitted");
                location.reload();
            }
            else {
                alert("Error!!\n Please Retry..");
            }

            timer = setTimeout('recent()', 9000);
        }
    }
    if (typeof data[4].length === 'undefined') {
        xmlhttp3.open("GET", "addcomment.php?data=" + cmt + "&id=" + id + "&comno=0", true);
        xmlhttp3.send();
    }
    else
    {
        xmlhttp3.open("GET", "addcomment.php?data=" + cmt + "&id=" + id + "&comno=" + data[4].length + "", true);
        xmlhttp3.send();
    }
}