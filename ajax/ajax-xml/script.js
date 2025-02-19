function showCountry (str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function () {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("txtHint").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET", "getcountry.php?q="+str, true);
    xmlhttp.send();
}