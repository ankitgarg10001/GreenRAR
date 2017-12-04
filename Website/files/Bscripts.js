// JScript File
var current;
var total;
var tym;

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
    xmlhttp2.open("GET", "totalblogs.php", true);
    xmlhttp2.send();



}

$(document).ready(function () {

    $("#main_post").fadeOut("fast");
    $("#more_topics").fadeOut("fast");
    current = 1;
    tym = "i3";
    addmore(2);
});

function popular() {
    if (document.getElementById('li_tab1').getAttribute('class') != "active") {

        $("#more_topics").fadeOut("fast");
        $("#main_post").fadeOut("fast");
        //alert("changing");
        tab("tab1");
        document.getElementById("section_block_title").innerHTML = "Popular Topics";
        current = 1;
        addmore(1);
    }



}

function timeline() {
    if (document.getElementById('li_tab2').getAttribute('class') != "active") {
        $("#main_post").fadeOut("fast");
        $("#more_topics").fadeOut("fast");
        tab("tab2");
        document.getElementById("section_block_title").innerHTML = "Topics Timeline";
        current = 1;
        // alert("done");
        addmore(2);

    }

}

function tab(tab) {
    //document.getElementById('tab1').style.display = 'none';
    //document.getElementById('tab2').style.display = 'none';
    document.getElementById('li_tab1').setAttribute("class", "");
    document.getElementById('li_tab2').setAttribute("class", "");
    //document.getElementById(tab).style.display = 'block';
    document.getElementById('li_' + tab).setAttribute("class", "active");
    sortbyselect("i3");
}

function sortbyselect(opt) {
    if (document.getElementById(opt).getAttribute('class') != "active") {
        for (i = 1; i < 4; i++) {
            document.getElementById("i" + i).setAttribute("class", "");

        }
        document.getElementById(opt).setAttribute("class", "active");
        tym = opt;
        //alert("done");
    }
}

function sortby(opt) {

    $("#main_post").fadeOut("fast");
    $("#more_topics").fadeOut("fast");
    sortbyselect(opt);
    current--;
    if (current < 1)
        current = 0;
    moreblog();


}


function addblog(obj) {
    var s = String();
    document.getElementById("main_post").innerHTML = "";
    current = obj.length;
    //alert(obj.length+ "  "+ tym);
    calctot();
    for (var i = 0; i < obj.length; i++) {
        //alert(""+obj[i][4]+""); to chk comments

        //var txtFile = new XMLHttpRequest();
        //txtFile.open("GET", "./files/blog/" + obj[i][0] + ".txt", true);
        //txtFile.onreadystatechange = function () {
        //    if (txtFile.readyState === 4) {  // document is ready to parse.
        //        //alert("ankit");
        //        if (txtFile.status === 200) {  // file is found
        //            //alert("ankit");
        //            allText = txtFile.responseText;
        //            //alert (allText);
        //            lines = txtFile.responseText.split("\n");
        //            link[i]= lines[0];
        //            lines.splice(0, 1);
        //            txt[i] = lines.join('\n');
        //            //alert(img);
        //            //alert(obj[i][0]);

        //        }
        //    }
        //}
        //txtFile.send(null);
        //alert(txt[i]);
        ////alert(txt.length);
        ////if (txt[i].length > 500)
        ////    txt[i] = txt[i].substring(0, 500) + "...";
        ////txt[i].replace("\n", " ");
        ////alert(img);
        ////alert(txt);
        // alert("" + obj[i][0] + obj[i][1] + obj[i][2] + obj[i][3] + obj[i][4] + obj[i][5] + obj[i][6] + "");
        //alert("ankit"+obj[i][5]+"ankit");

        aurthor = obj[i][2].replace(" ", "+");

        //s += obj[i][5].length + obj[i][5][0]+"<br>"+obj[i][5][1]+"<br>"+obj[i][5][2]+"<br>"+obj[i][5][3]+"<br>"+obj[i][5][4]+"<br>"+obj[i][5][5]+"<br>"+obj[i][5][6]+"<br><br>";
        if (obj[i][5].length < 2)
            s += '<!-- start privew of blog--> <div class="post"> <div class="p-head"> <h2 class="title"> <a href="./Mblog.php?p=' + obj[i][0] + '" title="Permanent Link to ' + obj[i][1] + '">' + obj[i][1] + '</a> </h2>  <div class="metadata"> <span class="content">Posted ' + obj[i][3] + ' by <strong> <a href="aurthor.php?search=' + aurthor + '" title="Posts by ' + obj[i][2] + '@greenrar.com" rel="author">' + obj[i][2] + '@greenrar.com</a> </strong> </span> </div>  <div class="comment"> Comments : ' + obj[i][4] + ' </div> </div>   <div class="p-con"> <p> ' + obj[i][6] + ' <a href="./Mblog.php?p=' + obj[i][0] + '" class="read_more"></a>  </p> <div class="clear"></div> </div>    </div> <!--end blog privew-->';
        else
            s += '<!-- start privew of blog--> <div class="post"> <div class="p-head"> <h2 class="title"> <a href="./Mblog.php?p=' + obj[i][0] + '" title="Permanent Link to ' + obj[i][1] + '">' + obj[i][1] + '</a> </h2>  <div class="metadata"> <span class="content">Posted ' + obj[i][3] + ' by <strong> <a href="aurthor.php?search=' + aurthor + '" title="Posts by ' + obj[i][2] + '@greenrar.com" rel="author">' + obj[i][2] + '@greenrar.com</a> </strong> </span> </div>  <div class="comment"> Comments : ' + obj[i][4] + ' </div> </div>   <div class="p-con"> <a href="./Mblog.php?p=' + obj[i][0] + '"> <img src="' + obj[i][5] + '" class="post-thumb" alt="Alternate to pic here" title="' + obj[i][5] + '" /> </a> <p> ' + obj[i][6] + ' <a href="./Mblog.php?p=' + obj[i][0] + '" class="read_more"></a>  </p> <div class="clear"></div> </div>    </div> <!--end blog privew-->';



    }
    //alert(s);
    if (s == "")
        s = '<div style="margin:50px 5px 20px 5px ; padding:30px 10px 30px 250px; background-color:rgb(207,227,213);"><h3>No topics or posts met your search criteria.</h3></div>';
    document.getElementById("main_post").innerHTML += s;
    $("#main_post").fadeIn(1000);
    $("#more_topics").fadeIn(1000);


}

function addmore(type) {

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
    xmlhttp.open("GET", "Btype.php?type=" + type + "&page=" + current + "&sort=" + tym + "", true);
    xmlhttp.send();

}

function moreblog() {
    if (current < total) {

        $("#main_post").fadeOut("fast");
        $("#more_topics").fadeOut("fast");
        var choice;
        var x = $("ul.tabs").children("li.active").attr("id");
        //alert(x);
        if (x == "li_tab2")
            choice = 2;
        else
            choice = 1;
        //alert(current);
        //alert(total);
        current += 1;
        addmore(choice);
    }

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
        document.getElementById("Li" + (i + 1)).innerHTML = '<a href="./Mblog.php?p=' + obj[i][0] + '"><span class="bullet"></span>' + obj[i][1] + '</a><span class="details">by <a href="aurthor.php?search=' + aurthor+'">' + obj[i][2] + '</a> ' + tym + 'ago</span>';
    }
    $("#new").show(1000);
}



