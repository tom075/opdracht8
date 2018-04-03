function ajax(gewicht, lengte) {
    let debug = true;
    if (window.XMLHttpRequest) {
        XMLHttp = new XMLHttpRequest();
    } else {
        XMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    let controlScript = "BMI.php";
    let httpString = controlScript + "?lengte_cm=" + lengte + "&gewicht=" + gewicht;
    let httpRepose = "";
    if (debug) {
        console.log(httpString);
    }
    XMLHttp.open("GET", httpString, true);
    XMLHttp.send();
    XMLHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (debug) {
                console.log("http reponse = " + XMLHttp.responseText);
            }
            httpRepose = XMLHttp.responseText;
            resultaat.innerHTML = httpRepose;
            resultaat.style.border = "1px solid #000";

        }
    }
}