
$(document).ready(function () {
    recent();

});

function recent() {
    $("#new").toggle(500);
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp1 = new XMLHttpRequest();
       // alert("request done");
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