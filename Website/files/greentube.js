// JScript File
var curr = 6;
var id = "";

$(document).ready(function () {
    var query = window.location;
    query = query.search.substring(1);
    value = query.split('&');
    for (var i = 0; i < value.length; i++) {
        var k = value[i].split('=');
        if (k[0] == 'id')
            id = k[1];
        // alert(id);
    }
    if (id != "") {
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
                s = '<div class="mvideo"> <div class="mvidtop"> <a href="./Greentube.html?id="' + obj[0][0] + '>' + obj[0][1] + '</a>  </div> <div class="mplayer" id="selected' + obj[0][0] + '"> Loading the player... </div> <div class="mdisc">' + obj[0][3] + '</div>  </div>';

                //alert(obj[0][2]);
                document.getElementById("mainvid").innerHTML = s;
                jwplayer("selected" + obj[0][0]).setup({
                    file: obj[0][2],
                    height: 520,
                    width: 926,
                });



            }
        }
        xmlhttp.open("GET", "greentube.php?id=" + id, true);
        xmlhttp.send();
    }

});


$(document).ready(function () {
    addvideo()
});






function addvideo() {
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
            //alert(""+obj[1][0] + "\n  " + obj[1][1]+"");
            addvids(obj1);
        }
    }
    xmlhttp1.open("GET", "greentube.php?count=" + curr, true);
    xmlhttp1.send();
}

function addvids(obj) {
    document.getElementById("extras").innerHTML = "";
    var j = 0;
    for (var i = 0; i < obj.length; i++) {
        if (j % 2)
            var s = '<div class="video vid2"> <div class="vidtop"><a href="Greentube.html?id=' + obj[i][0] + '">' + obj[i][1] + '</a>   </div> <div class="player" id="' + obj[i][0] + '"> Loading the player... </div>	 <div class="disc"> ' + obj[i][3] + ' </div> </div>';

        else
            var s = '<div class="video vid1"> <div class="vidtop"><a href="Greentube.html?id=' + obj[i][0] + '">' + obj[i][1] + '</a>   </div> <div class="player" id="' + obj[i][0] + '"> Loading the player... </div>	 <div class="disc"> ' + obj[i][3] + ' </div> </div>';
        j++;

        document.getElementById("extras").innerHTML += s;
        // alert(obj[i][0]);
    }


    for (var i = 0; i < obj.length; i++) {
        jwplayer(obj[i][0]).setup({
            file: obj[i][2],
            height: 241,
            width: 430,
        });
    }
}

function moreblog() {
    curr += 6;

    addvideo();

}