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

    // alert(url);
    // window.location = url;
    window.open(url, '_blank');
}